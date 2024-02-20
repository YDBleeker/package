<?php

namespace Yonidebleeker\QuoteGen;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class QuoteServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('quote')
            ->hasMigration('make_quotes_table')
            ->runsMigrations();
    }
}



