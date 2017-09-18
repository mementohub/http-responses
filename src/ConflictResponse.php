<?php

namespace iMemento\Http\Responses;

class ConflictResponse extends ErrorResponse
{
    public function __construct($content = '', $headers = [])
    {
        parent::__construct($content, 409, $headers);
    }
}