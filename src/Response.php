<?php

namespace iMemento\Http\Responses;

use Symfony\Component\HttpFoundation\Response as HttpResponse;

class Response
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
    public function __construct($content = null, $status = 200, $headers = [])
    {
        return new HttpResponse($content, $status, $headers);
    }

}