<?php

namespace iMemento\Http\Responses;

class MethodNotAllowedResponse extends Response
{
    public function __construct($content = null, $headers = [], array $debug)
    {
        parent::__construct($content, 405, $headers, $debug);
    }
}