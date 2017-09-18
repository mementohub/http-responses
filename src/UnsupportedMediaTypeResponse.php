<?php

namespace iMemento\Http\Responses;

class UnsupportedMediaTypeResponse extends ErrorResponse
{
    public function __construct($content = '', $headers = [])
    {
        parent::__construct($content, 415, $headers);
    }
}