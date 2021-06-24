<?php
namespace Jalno\Passport\Tests\Unit;

use Jalno\Passport\Package;

class PackageTest extends TestCase {
	protected Package $package;

	public function setUp(): void
	{
		parent::setUp();
		$this->package = new Package();
	}

	public function testGetProviders()
	{
		foreach ($this->package->getProviders() as $provider) {
			$this->assertTrue(class_exists($provider));
		}
	}

	public function testBasePath()
	{
		$this->assertEquals(realpath(__DIR__ . "/../../src"), $this->package->basePath());
	}

	public function testGetNamespace()
	{
		$this->assertEquals("Jalno\\Passport", $this->package->getNamespace());
	}

	public function testSetupRouter()
	{
		$this->package->setupRouter($this->app->make("router"));
		$this->assertTrue(true);
	}
}