<?php

namespace iMemento\Http\Responses\CollectionResponses;

use Symfony\Component\HttpFoundation\Response;

/**
 * Class CollectionResponse
 * @package iMemento\Http\Responses\CollectionResponses
 */
class CollectionResponse extends Response
{
    /**
     * Use this for responding with a non-paginated collection.
     *
     * @param array $content
     * @param array $headers
     */
    public function __construct(array $content, $headers = [])
    {
        $headers['Content-Type'] = 'application/json';
        
        $content = json_encode($content);
        parent::__construct($content,200, $headers);
    }
}