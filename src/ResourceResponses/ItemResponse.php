<?php

namespace iMemento\Http\Responses\ResourceResponses;

use Symfony\Component\HttpFoundation\Response;

/**
 * Class ItemResponse
 * @package iMemento\Http\Responses\ResourceResponses
 */
class ItemResponse extends Response
{
    /**
     * Use this when responding to a resource show endpoint.
     *
     * @param null $content
     * @param array $headers
     */
    public function __construct($content = null, $headers = [])
    {
        $headers['Content-Type'] = 'application/json';

        parent::__construct($content, Response::HTTP_OK, $headers);
    }
}