<?php

use CheckHQ\CheckHQServiceProvider;
use CheckHQ\Tests\BaseTest;

class CheckHQServiceProviderTest extends BaseTest
{
    protected function getPackageProviders($app): array
    {
        return [CheckHQServiceProvider::class];
    }

    public function testTellerSDKServiceProviderIsRegistered()
    {
        $this->assertTrue($this->app->getProvider(CheckHQServiceProvider::class) instanceof TellerSDKServiceProvider);
        $this->assertFileExists('config/teller.php');
    }
}