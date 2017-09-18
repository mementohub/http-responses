<?php

namespace iMemento\Http\Responses;

class UnsupportedMediaTypeResponse extends Response
{
    public function __construct($content = null, $headers = [], array $debug)
    {
        parent::__construct($content, 415, $headers, $debug);
    }
}