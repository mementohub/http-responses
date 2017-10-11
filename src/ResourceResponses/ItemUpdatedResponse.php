<?php

namespace iMemento\Http\ResourceResponses;

use Symfony\Component\HttpFoundation\Response;

class ItemUpdatedResponse extends Response
{
    public function __construct($content = '', $headers = [])
    {
        parent::__construct($content,200, $headers);
    }
}