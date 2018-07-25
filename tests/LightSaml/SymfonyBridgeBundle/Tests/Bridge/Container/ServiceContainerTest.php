<?php

/*
 * This file is part of the LightSAML Symfony Bridge Bundle package.
 *
 * (c) Milos Tomic <tmilos@lightsaml.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace LightSaml\SymfonyBridgeBundle\Tests\Bridge\Container;

use LightSaml\Binding\BindingFactoryInterface;
use LightSaml\Resolver\Credential\CredentialResolverInterface;
use LightSaml\Resolver\Endpoint\EndpointResolverInterface;
use LightSaml\Resolver\Session\SessionProcessorInterface;
use LightSaml\Resolver\Signature\SignatureResolverInterface;
use LightSaml\SymfonyBridgeBundle\Bridge\Container\ServiceContainer;
use LightSaml\Validator\Model\Assertion\AssertionTimeValidatorInterface;
use LightSaml\Validator\Model\Assertion\AssertionValidatorInterface;
use LightSaml\Validator\Model\NameId\NameIdValidatorInterface;
use LightSaml\Validator\Model\Signature\SignatureValidatorInterface;
use LightSaml\Logout\Resolver\Logout\LogoutSessionResolverInterface;
use PHPUnit\Framework\TestCase;

class ServiceContainerTest extends TestCase
{
    public function test_constructs_with_all_arguments()
    {
        new ServiceContainer(
            $this->getMockBuilder(AssertionValidatorInterface::class)->getMock(),
            $this->getMockBuilder(AssertionTimeValidatorInterface::class)->getMock(),
            $this->getMockBuilder(SignatureResolverInterface::class)->getMock(),
            $this->getMockBuilder(EndpointResolverInterface::class)->getMock(),
            $this->getMockBuilder(NameIdValidatorInterface::class)->getMock(),
            $this->getMockBuilder(BindingFactoryInterface::class)->getMock(),
            $this->getMockBuilder(SignatureValidatorInterface::class)->getMock(),
            $this->getMockBuilder(CredentialResolverInterface::class)->getMock(),
            $this->getMockBuilder(LogoutSessionResolverInterface::class)->getMock(),
            $this->getMockBuilder(SessionProcessorInterface::class)->getMock()
        );
    }
}
