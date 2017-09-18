<?php

namespace iMemento\Http\Responses;

class MethodNotAllowedResponse extends ErrorResponse
{
    public function __construct($content = '', $headers = [])
    {
        parent::__construct($content, 405, $headers);
    }
}