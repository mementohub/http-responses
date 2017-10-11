<?php

namespace iMemento\Http\ResourceResponses;

use Symfony\Component\HttpFoundation\Response;

class ItemCreatedResponse extends Response
{
    public function __construct($content = '', $headers = [])
    {
        parent::__construct($content,201, $headers);
    }
}