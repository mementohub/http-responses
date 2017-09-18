<?php

namespace iMemento\Http\Responses;

class NotFoundResponse extends Response
{
    public function __construct($content = null, $headers = [], array $debug)
    {
        parent::__construct($content, 404, $headers, $debug);
    }
}