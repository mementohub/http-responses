<?php

namespace iMemento\Http\Responses\Tests;

use PHPUnit\Framework\TestCase;
use iMemento\Http\Responses\NotFoundResponse;
use Symfony\Component\HttpFoundation\Response;

/**
 * @covers Client
 */
class ResponseTest extends TestCase
{

    public function test_response_status_code()
    {
        $response = new NotFoundResponse('not found');
        $this->assertEquals(Response::HTTP_NOT_FOUND, $response->getStatusCode());
    }
}
