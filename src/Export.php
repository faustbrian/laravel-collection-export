<?php

/*
 * This file is part of Collection Export.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace BrianFaust\CollectionExport;

use BrianFaust\Payload\Json;
use BrianFaust\Payload\Xml;
use BrianFaust\Payload\Yaml;
use BrianFaust\Payload\YamlInline;
use Illuminate\Http\Response;

/**
 * Class Export.
 */
class Export extends Builder
{
    /**
     * Export the given data as XLS.
     *
     * @param $data
     *
     * @return Response
     */
    public function xls($data): Response
    {
        return $this->export($data, 'xls');
    }

    /**
     * Export the given data as XLSX.
     *
     * @param $data
     *
     * @return Response
     */
    public function xlsx($data): Response
    {
        return $this->export($data, 'xlsx');
    }

    /**
     * Export the given data as CSV.
     *
     * @param $data
     *
     * @return Response
     */
    public function csv($data): Response
    {
        return $this->export($data, 'csv');
    }

    /**
     * Export the given data as PDF.
     *
     * @param $data
     *
     * @return Response
     */
    public function pdf($data): Response
    {
        return $this->export($data, 'pdf');
    }

    /**
     * Export the given data as JSON.
     *
     * @param array $data
     *
     * @return Response
     */
    public function json($data): Response
    {
        return $this->buildResponse(
            (new Json())->serialise($data), 'json'
        );
    }

    /**
     * Export the given data as XML.
     *
     * @param array $data
     *
     * @return Response
     */
    public function xml($data): Response
    {
        return $this->buildResponse(
            (new Xml())->serialise($data), 'xml'
        );
    }

    /**
     * Export the given data as YAML.
     *
     * @param array $data
     *
     * @return Response
     */
    public function yaml($data): Response
    {
        return $this->buildResponse(
            (new Yaml())->serialise($data), 'yml'
        );
    }

    /**
     * Export the given data as YAML (Inline).
     *
     * @param array $data
     *
     * @return Response
     */
    public function yamlInline($data): Response
    {
        return $this->buildResponse(
            (new YamlInline())->serialise($data), 'yml'
        );
    }
}
