<?php

namespace iMemento\Http\Responses;

class ConflictResponse extends Response
{
    public function __construct($content = null, $headers = [], array $debug)
    {
        parent::__construct($content, 409, $headers, $debug);
    }
}