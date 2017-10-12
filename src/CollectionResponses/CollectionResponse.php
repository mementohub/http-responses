<?php

namespace iMemento\Http\CollectionResponses;

use Symfony\Component\HttpFoundation\Response;

class CollectionResponse extends Response
{
    public function __construct($content = '', $headers = [])
    {
        parent::__construct($content,200, $headers);
    }
}