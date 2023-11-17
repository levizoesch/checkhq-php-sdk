<?php

use CheckHQ\CheckHQServiceProvider;
use CheckHQ\Tests\BaseTest;

class CheckHQServiceProviderTest extends BaseTest
{
    protected function getPackageProviders($app)
    {
        return [CheckHQServiceProvider::class];
    }

    public function testCheckHQServiceProviderIsRegistered()
    {
        $this->assertTrue($this->app->getProvider(CheckHQServiceProvider::class) instanceof CheckHQServiceProvider);
        $this->assertFileExists('config/teller.php');
    }
}