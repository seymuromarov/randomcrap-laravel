<?php

namespace Seymuromarov\Randomcrap\Facades;

Use Illuminate\Support\Facades\Facade;

class Randomcrap extends Facade
{

    protected static function getFacadeAccessor()
    {
        return 'seymuromarov-randomcrap';
    }

}