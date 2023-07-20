<?php
namespace MpesaSDK;

class MpesaSDK{
    public function authenticate(string $name):string
    {
        if(!$name){
            return "No Name";
        }

        return $name;
    }
}