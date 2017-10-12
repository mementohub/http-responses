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
     * @param string $content
     * @param array $headers
     */
    public function __construct($content = '', $headers = [])
    {
        parent::__construct($content,200, $headers);
    }
}