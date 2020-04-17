<?php
/**
 * Abstract authorization grant.
 *
 * @author      Julián Gutiérrez <juliangut@gmail.com>
 * @copyright   Copyright (c) Alex Bilbie
 * @license     http://mit-license.org/
 *
 * @link        https://github.com/thephpleague/oauth2-server
 */

namespace League\OAuth2\Server\Grant;

use League\OAuth2\Server\RequestTypes\AuthorizationRequestFactoryInterface;

abstract class AbstractAuthorizeGrant extends AbstractGrant
{
    /**
     * @var AuthorizationRequestFactoryInterface
     */
    protected $authorizationRequestFactory;

    /**
     * @param string $uri
     * @param array  $params
     * @param string $queryDelimiter
     *
     * @return string
     */
    public function makeRedirectUri($uri, $params = [], $queryDelimiter = '?')
    {
        $uri .= (\strstr($uri, $queryDelimiter) === false) ? $queryDelimiter : '&';

        return $uri . \http_build_query($params);
    }

    public function setAuthorizationRequestFactory(AuthorizationRequestFactoryInterface $authorizationRequestFactory)
    {
        $this->authorizationRequestFactory = $authorizationRequestFactory;
    }
}
