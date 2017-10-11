<?php

namespace iMemento\Http\ResourceResponses;

use Symfony\Component\HttpFoundation\Response;

class ItemDeletedResponse extends Response
{
    public function __construct($content = null, $headers = [])
    {
        $content = $content ?? json_encode(['message' => 'Item deleted.']);
        parent::__construct($content,200, $headers);
    }
}