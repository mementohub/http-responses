<?php

namespace iMemento\Http\Responses;

class UnauthorizedResponse extends Response
{
    public function __construct($content = null, $headers = [], array $debug)
    {
        parent::__construct($content, 401, $headers, $debug);
    }
}