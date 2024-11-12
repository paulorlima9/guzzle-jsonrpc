<?php

/*
 * This file is part of Guzzle HTTP JSON-RPC
 *
 * Copyright (c) 2014 Nature Delivered Ltd. <http://graze.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @see  http://github.com/graze/guzzle-jsonrpc/blob/master/LICENSE
 * @link http://github.com/graze/guzzle-jsonrpc
 */

namespace Graze\GuzzleHttp\JsonRpc\Message;

use Psr\Http\Message\RequestInterface as HttpRequestInterface;
use Psr\Http\Message\ResponseInterface as HttpResponseInterface;

interface MessageFactoryInterface
{
    /**
     * @param  string  $method
     * @param  string  $uri
     * @return RequestInterface
     */
    public function createRequest($method, $uri, array $headers = [], array $options = []);

    /**
     * @param  int  $statusCode
     * @return ResponseInterface
     */
    public function createResponse($statusCode, array $headers = [], array $options = []);

    /**
     * @return RequestInterface
     */
    public function fromRequest(HttpRequestInterface $request);

    /**
     * @return ResponseInterface
     */
    public function fromResponse(HttpResponseInterface $response);
}
