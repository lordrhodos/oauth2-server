<?php

declare(strict_types=1);

namespace League\OAuth2\Server\RequestTypes;

class AuthorizationRequestFactory implements AuthorizationRequestFactoryInterface
{
    public function createAuthorizationRequest(): AuthorizationRequestInterface
    {
        return new AuthorizationRequest();
    }
}
