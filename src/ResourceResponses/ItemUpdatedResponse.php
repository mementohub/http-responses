<?php

namespace iMemento\Http\Responses\ResourceResponses;

use Symfony\Component\HttpFoundation\Response;

/**
 * Class ItemUpdatedResponse
 * @package iMemento\Http\Responses\ResourceResponses
 */
class ItemUpdatedResponse extends Response
{
    /**
     * Use this when responding to a resource update endpoint.
     *
     * @param null $content
     * @param array $headers
     */
    public function __construct($content = null, $headers = [])
    {
        $content = $content ?? json_encode(['message' => 'Item updated.']);
        parent::__construct($content,200, $headers);
    }
}