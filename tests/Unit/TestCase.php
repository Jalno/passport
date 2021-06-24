<?php
namespace Jalno\Passport\Tests\Unit;

use Laravel\Lumen\Testing\TestCase as BaseCase;
use Jalno\Lumen\Application;

class TestCase extends BaseCase
{
	public function createApplication()
	{
		return new Application(__DIR__ . "../../", \Jalno\Passport\Package::class);
	}
}
