<?php
namespace CheckHQ;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class CheckHQServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package->name('checkhq')
            ->hasConfigFile('checkhq');
    }
}