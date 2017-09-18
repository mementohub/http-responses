<?php

namespace iMemento\Http\Responses;

use Symfony\Component\HttpFoundation\Response;

class ErrorResponse extends Response
{

    /**
     * Constructor.
     *
     * @param mixed $content The response content, see setContent()
     * @param int   $status  The response status code
     * @param array $headers An array of response headers
     *
     * @throws \InvalidArgumentException When the HTTP status code is not valid
     */
    public function __construct($content = '', $status = 400, $headers = [])
    {
        parent::__construct($content, $status, $headers);
    }

}