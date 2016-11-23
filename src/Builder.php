<?php

/*
 * This file is part of Collection Export.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\CollectionExport;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Facades\Excel;

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
    public function filename($value)
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
    protected function buildResponse($data, $type)
    {
        $filename = $this->filename.'-'.time().'.'.$type;

        return response()->make($data, 200, [
            'Content-Type' => 'application/octet-stream',
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
    protected function export($data, $type)
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
