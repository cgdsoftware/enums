<?php

namespace LaravelEnso\Enums;

use Illuminate\Support\ServiceProvider;
use LaravelEnso\Enums\app\Facades\Enums;

class EnumServiceProvider extends ServiceProvider
{
    public $register = [];

    public function boot()
    {
        Enums::register($this->register);
    }
}
