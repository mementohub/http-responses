<?php

namespace iMemento\Http\Responses\ResourceResponses;

use Symfony\Component\HttpFoundation\Response;

class ItemCreatedResponse extends Response
{
    public function __construct($content = null, $headers = [])
    {
        $content = $content ?? json_encode(['message' => 'Item created.']);
        parent::__construct($content,201, $headers);
    }
}