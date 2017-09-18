<?php

namespace iMemento\Http\Responses;

class PreconditionFailedResponse extends ErrorResponse
{
    public function __construct($content = '', $headers = [])
    {
        parent::__construct($content, 412, $headers);
    }
}