<?php

namespace App\Factory;

use App\Adapter\ProviderAdapter;

class ProviderFactory {


    public function callProvider($provider){

        /** @var ProviderAdapter  $className */
        $className = "App\\Adapter\\".$provider."Adapter";

        if(class_exists($className)) {

            return new $className();

        }

        throw new \Exception("Built-in Provider Not Found",1200);
    }

}