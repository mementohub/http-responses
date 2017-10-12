<?php

namespace iMemento\Http\Responses\CollectionResponses;

use Symfony\Component\HttpFoundation\Response;

/**
 * Class PaginatedCollectionResponse
 * @package iMemento\Http\Responses\CollectionResponses
 */
class PaginatedCollectionResponse extends Response
{
    /**
     * Use this for responding with a paginated collection.
     *
     * @param array $content
     * @param array $headers
     */
    public function __construct(array $content = null, $headers = [])
    {
        $headers['Content-Type'] = 'application/json';

        $content = json_encode($content);
        parent::__construct($content,200, $headers);
    }
}