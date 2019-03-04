<?php

declare(strict_types=1);

namespace GeneratedHydratorTest;

use CodeGenerationUtils\Autoloader\AutoloaderInterface;
use CodeGenerationUtils\GeneratorStrategy\GeneratorStrategyInterface;
use CodeGenerationUtils\Inflector\ClassNameInflectorInterface;
use GeneratedHydrator\ClassGenerator\HydratorGenerator;
use GeneratedHydrator\Configuration;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use function is_dir;

/**
 * Tests for {@see \GeneratedHydrator\Configuration}
 */
class ConfigurationTest extends TestCase
{
    /** @var Configuration */
    protected $configuration;

    /**
     * {@inheritDoc}
     *
     * @covers \GeneratedHydrator\Configuration::__construct
     */
    public function setUp() : void
    {
        $this->configuration = new Configuration('test');
    }

    /**
     * @covers \GeneratedHydrator\Configuration::setHydratedClassName
     * @covers \GeneratedHydrator\Configuration::getHydratedClassName
     */
    public function testGetSetHydratedClassName() : void
    {
        self::assertSame('test', $this->configuration->getHydratedClassName());
        $this->configuration->setHydratedClassName('bar');
        self::assertSame('bar', $this->configuration->getHydratedClassName());
    }

    /**
     * @covers \GeneratedHydrator\Configuration::createFactory
     */
    public function testCreateFactory() : void
    {
        self::assertInstanceOf('GeneratedHydrator\Factory\HydratorFactory', $this->configuration->createFactory());
    }

    /**
     * @covers \GeneratedHydrator\Configuration::doesAutoGenerateProxies
     * @covers \GeneratedHydrator\Configuration::setAutoGenerateProxies
     */
    public function testGetSetAutoGenerateProxies() : void
    {
        self::assertTrue($this->configuration->doesAutoGenerateProxies(), 'Default setting check for BC');

        $this->configuration->setAutoGenerateProxies(false);
        self::assertFalse($this->configuration->doesAutoGenerateProxies());

        $this->configuration->setAutoGenerateProxies(true);
        self::assertTrue($this->configuration->doesAutoGenerateProxies());
    }

    /**
     * @covers \GeneratedHydrator\Configuration::getGeneratedClassesNamespace
     * @covers \GeneratedHydrator\Configuration::setGeneratedClassesNamespace
     */
    public function testGetSetProxiesNamespace() : void
    {
        self::assertSame(
            'GeneratedHydratorGeneratedClass',
            $this->configuration->getGeneratedClassesNamespace(),
            'Default setting check for BC'
        );

        $this->configuration->setGeneratedClassesNamespace('foo');
        self::assertSame('foo', $this->configuration->getGeneratedClassesNamespace());
    }

    /**
     * @covers \GeneratedHydrator\Configuration::getClassNameInflector
     * @covers \GeneratedHydrator\Configuration::setClassNameInflector
     */
    public function testSetGetClassNameInflector() : void
    {
        self::assertInstanceOf(ClassNameInflectorInterface::class, $this->configuration->getClassNameInflector());

        /** @var ClassNameInflectorInterface|MockObject $inflector */
        $inflector = $this->createMock(ClassNameInflectorInterface::class);

        $this->configuration->setClassNameInflector($inflector);
        self::assertSame($inflector, $this->configuration->getClassNameInflector());
    }

    /**
     * @covers \GeneratedHydrator\Configuration::getGeneratorStrategy
     * @covers \GeneratedHydrator\Configuration::setGeneratorStrategy
     */
    public function testSetGetGeneratorStrategy() : void
    {
        self::assertInstanceOf(GeneratorStrategyInterface::class, $this->configuration->getGeneratorStrategy());

        /** @var GeneratorStrategyInterface|MockObject $strategy */
        $strategy = $this->createMock(GeneratorStrategyInterface::class);

        $this->configuration->setGeneratorStrategy($strategy);
        self::assertSame($strategy, $this->configuration->getGeneratorStrategy());
    }

    /**
     * @covers \GeneratedHydrator\Configuration::getGeneratedClassesTargetDir
     * @covers \GeneratedHydrator\Configuration::setGeneratedClassesTargetDir
     */
    public function testSetGetProxiesTargetDir() : void
    {
        self::assertTrue(is_dir($this->configuration->getGeneratedClassesTargetDir()));

        $this->configuration->setGeneratedClassesTargetDir(__DIR__);
        self::assertSame(__DIR__, $this->configuration->getGeneratedClassesTargetDir());
    }

    /**
     * @covers \GeneratedHydrator\Configuration::getGeneratedClassAutoloader
     * @covers \GeneratedHydrator\Configuration::setGeneratedClassAutoloader
     */
    public function testSetGetGeneratedClassAutoloader() : void
    {
        self::assertInstanceOf(AutoloaderInterface::class, $this->configuration->getGeneratedClassAutoloader());

        /** @var AutoloaderInterface|MockObject $autoloader */
        $autoloader = $this->createMock(AutoloaderInterface::class);

        $this->configuration->setGeneratedClassAutoloader($autoloader);
        self::assertSame($autoloader, $this->configuration->getGeneratedClassAutoloader());
    }

    /**
     * @covers \GeneratedHydrator\Configuration::getHydratorGenerator
     * @covers \GeneratedHydrator\Configuration::setHydratorGenerator
     */
    public function testSetGetHydratorGenerator() : void
    {
        self::assertInstanceOf(HydratorGenerator::class, $this->configuration->getHydratorGenerator());

        /** @var HydratorGenerator $generator*/
        $generator = $this->createMock(HydratorGenerator::class);

        $this->configuration->setHydratorGenerator($generator);
        self::assertSame($generator, $this->configuration->getHydratorGenerator());
    }
}
