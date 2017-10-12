<?php

namespace iMemento\Http\Responses\CollectionResponses;

use Symfony\Component\HttpFoundation\Response;

class CollectionResponse extends Response
{
    public function __construct($content = '', $headers = [])
    {
        parent::__construct($content,200, $headers);
    }
}