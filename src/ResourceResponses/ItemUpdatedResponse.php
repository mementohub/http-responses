<?php

namespace iMemento\Http\Responses\ResourceResponses;

use Symfony\Component\HttpFoundation\Response;

class ItemUpdatedResponse extends Response
{
    public function __construct($content = null, $headers = [])
    {
        $content = $content ?? json_encode(['message' => 'Item updated.']);
        parent::__construct($content,200, $headers);
    }
}