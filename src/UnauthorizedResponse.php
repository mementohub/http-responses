<?php

namespace iMemento\Http\Responses;

class UnauthorizedResponse extends ErrorResponse
{
    public function __construct($content = '', $headers = [])
    {
        parent::__construct($content, 401, $headers);
    }
}