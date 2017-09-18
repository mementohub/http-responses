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
     * @param mixed $debug An array of debug info
     *
     * @throws \InvalidArgumentException When the HTTP status code is not valid
     */
    public function __construct($content = null, $status = 200, $headers = [], $debug = null)
    {
        //if debug, we append the debug info
        if($debug) {
            $content = [
                'content' => $content,
                'error' => $debug['error'] ?? null,
                'code' => $debug['code'] ?? null,
                'trace' => $debug['trace'] ?? null,
                'id' => $debug['id'] ?? null,
            ];
        }

        return new HttpResponse($content, $status, $headers);
    }

}