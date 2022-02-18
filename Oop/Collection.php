<?php

namespace Oop;


class Collection
{
    private static $storage = [];

    public static function add(object $key, mixed $data = NULL){
        self::$storage[$key] = $data;
    }

    public static function remove(object $key){
        if(self::$storage[$key]){
            unset(self::$storage[$key]);
        }
    }

    public function getHash(object $object){
       return spl_object_hash($object);
    }

    public static function current(){
        return self::$storage;
    }

    public static function getObjectList(){
        return end(self::$storage);
    }

    public static function check(object  $key){
        return array_key_exists($key, self::$storage);

    }

    public static function removeAll(ObjectCollection $collection){
        unset($collection);

    }

}