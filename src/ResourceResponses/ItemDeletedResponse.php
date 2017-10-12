<?php

namespace iMemento\Http\Responses\ResourceResponses;

use Symfony\Component\HttpFoundation\Response;

/**
 * Class ItemDeletedResponse
 * @package iMemento\Http\Responses\ResourceResponses
 */
class ItemDeletedResponse extends Response
{
    /**
     * Use this when responding to a resource delete endpoint.
     *
     * @param null $content
     * @param array $headers
     */
    public function __construct($content = null, $headers = [])
    {
        $content = $content ?? json_encode(['message' => 'Item deleted.']);
        parent::__construct($content,200, $headers);
    }
}