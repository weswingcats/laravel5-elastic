<?php namespace Adobradi\Elastic\Facades;

use Illuminate\Support\Facades\Facade;

class Elastic extends Facade {

    protected static function getFacadeAccessor()
    {
        return 'elastic';
    }

} 