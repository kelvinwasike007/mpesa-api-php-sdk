<?php
namespace Etul\MpesaSDK;

class MpesaSDK{
    public function test(string $name):string
    {
        if(!$name){
            return "No Name";
        }

        return $name;
    }
}