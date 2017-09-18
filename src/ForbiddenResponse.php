<?php

namespace iMemento\Http\Responses;

class ForbiddenResponse extends Response
{
    public function __construct($content = null, $headers = [], array $debug)
    {
        parent::__construct($content, 403, $headers, $debug);
    }
}