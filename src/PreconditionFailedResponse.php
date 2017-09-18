<?php

namespace iMemento\Http\Responses;

class PreconditionFailedResponse extends Response
{
    public function __construct($content = null, $headers = [], array $debug)
    {
        parent::__construct($content, 412, $headers, $debug);
    }
}