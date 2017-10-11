<?php

namespace iMemento\Http\Responses;

use Symfony\Component\HttpFoundation\Response;

class ItemCreatedResponse extends Response
{
    public function __construct($content = '', $headers = [])
    {
        parent::__construct('Item created!', 201, $headers);
    }
}