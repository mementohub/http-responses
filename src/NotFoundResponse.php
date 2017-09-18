<?php

namespace iMemento\Http\Responses;

class NotFoundResponse extends ErrorResponse
{
    public function __construct($content = '', $headers = [])
    {
        parent::__construct($content, 404, $headers);
    }
}