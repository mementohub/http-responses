<?php

namespace iMemento\Http\Responses;

class UnauthorizedResponse extends Response
{
    /**
     * Constructor.
     *
     * @param mixed $content The response content, see setContent()
     * @param array $headers An array of response headers
     * @param array $debug Debug array
     *
     * @throws \InvalidArgumentException When the HTTP status code is not valid
     */
    public function __construct($content = null, $headers = [], array $debug)
    {
        //we create the debug array
        $content = [
            'content' => $content,
            'error' => $debug['error'],
            'code' => $debug['code'],
            'trace' => $debug['trace'],
            'id' => $debug['id'],
        ];

        parent::__construct($content, 401, $headers);
    }
}