<?php

namespace iMemento\Http\Responses;

class ForbiddenResponse extends ErrorResponse
{
    public function __construct($content = '', $headers = [])
    {
        parent::__construct($content, 403, $headers);
    }
}