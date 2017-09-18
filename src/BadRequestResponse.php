<?php

namespace iMemento\Http\Responses;

class BadRequestResponse extends ErrorResponse
{
    public function __construct($content = '', $headers = [])
    {
        parent::__construct($content, 400, $headers);
    }
}