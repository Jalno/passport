<?php
namespace Jalno\Passport\Tests\Unit\Providers;

use Jalno\Passport\TokenExpireServiceProvider;
use Jalno\Passport\Tests\Unit\TestCase;

class TokenExpireServiceProviderTest extends TestCase {
	protected TokenExpireServiceProvider $provider;

	public function setUp(): void
	{
		parent::setUp();
		$this->provider = new TokenExpireServiceProvider($this->app);
	}

	public function testBoot()
	{
		$this->provider->boot();
		$this->assertTrue(true);
	}
}