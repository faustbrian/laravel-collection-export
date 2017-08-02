<?php


declare(strict_types=1);

/*
 * This file is part of Collection Export.
 *
 * (c) Brian Faust <hello@brianfaust.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\CollectionExport;

use Illuminate\Http\Response;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Facades\Excel;
use Maatwebsite\Excel\Writers\LaravelExcelWriter;

/**
 * Class Builder.
 */
class Builder
{
    /** @var string */
    protected $filename;

    /**
     * Set the filename.
     *
     * @param $value
     *
     * @return $this
     */
    public function filename($value): self
    {
        $this->filename = $value;

        return $this;
    }

    /**
     * Export the given data into the given format.
     *
     * @param strign $data
     * @param strign $type
     *
     * @return Response
     */
    protected function buildResponse($data, $type): Response
    {
        $filename = $this->filename.'-'.time().'.'.$type;

        return response()->make($data, 200, [
            'Content-Type'        => 'application/octet-stream',
            'Content-Disposition' => 'attachment; filename="'.$filename.'"',
        ]);
    }

    /**
     * Export the given data into an Excel-compatible format.
     *
     * @param string $data
     * @param string $type
     *
     * @return mixed
     */
    protected function export($data, $type): LaravelExcelWriter
    {
        if (! $data instanceof Collection) {
            $data = new Collection($data);
        }

        return Excel::create($this->filename.'-'.time(), function ($excel) use ($data) {
            $excel->sheet('Data', function ($sheet) use ($data) {
                $sheet->fromArray($data);
            });
        })->export($type);
    }
}
