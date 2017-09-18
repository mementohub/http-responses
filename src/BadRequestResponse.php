<?php

namespace iMemento\Http\Responses;

class BadRequestResponse extends Response
{
    public function __construct($content = null, $headers = [], array $debug)
    {
        parent::__construct($content, 400, $headers, $debug);
    }
}