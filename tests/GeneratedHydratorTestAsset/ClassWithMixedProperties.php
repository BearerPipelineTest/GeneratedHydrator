<?php

declare(strict_types=1);

namespace GeneratedHydratorTestAsset;

/**
 * Base test class to play around with mixed visibility properties
 */
class ClassWithMixedProperties
{
    public string $publicProperty0 = 'publicProperty0';

    public string $publicProperty1 = 'publicProperty1';

    public string $publicProperty2 = 'publicProperty2';

    protected string $protectedProperty0 = 'protectedProperty0';

    protected string $protectedProperty1 = 'protectedProperty1';

    protected string $protectedProperty2 = 'protectedProperty2';

    private string $privateProperty0 = 'privateProperty0';

    private string $privateProperty1 = 'privateProperty1';

    private string $privateProperty2 = 'privateProperty2';

    public function setPrivateProperty0(string $privateProperty0): void
    {
        $this->privateProperty0 = $privateProperty0;
    }

    public function getPrivateProperty0(): string
    {
        return $this->privateProperty0;
    }

    public function setPrivateProperty1(string $privateProperty1): void
    {
        $this->privateProperty1 = $privateProperty1;
    }

    public function getPrivateProperty1(): string
    {
        return $this->privateProperty1;
    }

    public function setPrivateProperty2(string $privateProperty2): void
    {
        $this->privateProperty2 = $privateProperty2;
    }

    public function getPrivateProperty2(): string
    {
        return $this->privateProperty2;
    }

    public function setProtectedProperty0(string $protectedProperty0): void
    {
        $this->protectedProperty0 = $protectedProperty0;
    }

    public function getProtectedProperty0(): string
    {
        return $this->protectedProperty0;
    }

    public function setProtectedProperty1(string $protectedProperty1): void
    {
        $this->protectedProperty1 = $protectedProperty1;
    }

    public function getProtectedProperty1(): string
    {
        return $this->protectedProperty1;
    }

    public function setProtectedProperty2(string $protectedProperty2): void
    {
        $this->protectedProperty2 = $protectedProperty2;
    }

    public function getProtectedProperty2(): string
    {
        return $this->protectedProperty2;
    }

    public function setPublicProperty0(string $publicProperty0): void
    {
        $this->publicProperty0 = $publicProperty0;
    }

    public function getPublicProperty0(): string
    {
        return $this->publicProperty0;
    }

    public function setPublicProperty1(string $publicProperty1): void
    {
        $this->publicProperty1 = $publicProperty1;
    }

    public function getPublicProperty1(): string
    {
        return $this->publicProperty1;
    }

    public function setPublicProperty2(string $publicProperty2): void
    {
        $this->publicProperty2 = $publicProperty2;
    }

    public function getPublicProperty2(): string
    {
        return $this->publicProperty2;
    }
}
