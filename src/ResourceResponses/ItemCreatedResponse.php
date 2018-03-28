<?php

namespace iMemento\Http\Responses\ResourceResponses;

use Symfony\Component\HttpFoundation\Response;

/**
 * Class ItemCreatedResponse
 * @package iMemento\Http\Responses\ResourceResponses
 */
class ItemCreatedResponse extends Response
{
    /**
     * Use this when responding to a resource create endpoint.
     *
     * @param null $content
     * @param array $headers
     */
    public function __construct($content = null, $headers = [])
    {
        $headers['Content-Type'] = 'application/json';

        $content = $content ?? json_encode(['message' => 'Item created.']);
        
        parent::__construct($content, Response::HTTP_CREATED, $headers);
    }
}