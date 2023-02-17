<?php

namespace Atak011\VaoCore;


use Atak011\VaoCore\Components\Alert;
use Atak011\VaoCore\Components\Forms\Form;
use Atak011\VaoCore\Components\Error\Error;
use Atak011\VaoCore\Components\Forms\UpsertForm;
use Atak011\VaoCore\Components\Inputs\NumberInput;
use Atak011\VaoCore\Components\Inputs\TextInput;
use Atak011\VaoCore\Components\Stats\Stats1;
use Atak011\VaoCore\Components\Inputs\Checkbox1;
use Atak011\VaoCore\Components\Inputs\DateInput;
use Atak011\VaoCore\Components\Inputs\FileInput;
use Atak011\VaoCore\Components\Inputs\SelectInput;
use Atak011\VaoCore\Components\Table\DatatableTable;
use Atak011\VaoCore\Components\Inputs\TextAreaInput;
use Atak011\VaoCore\Components\Toast\ToastNotification;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Atak011\VaoCore\Commands\VaoCoreCommand;

class VaoCoreServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package->name('vao-core');

    }
}
