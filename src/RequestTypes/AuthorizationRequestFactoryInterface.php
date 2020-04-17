<?php

declare(strict_types=1);

namespace League\OAuth2\Server\RequestTypes;

interface AuthorizationRequestFactoryInterface
{
    public function createAuthorizationRequest(): AuthorizationRequestInterface;
}
