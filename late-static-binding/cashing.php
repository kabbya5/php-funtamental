<?php 

class Cache{
    protected static $data = [];

    public static function store($key, $value){
        $prefix = static::getChachePrefix();
        self::$data[$prefix . $key] = $value;
        echo "Stored data in cache with key :{$prefix} {$key} \n";
    }

    public static function retrieve($key){
        $prefix = static::getChachePrefix();
        return self::$data[$prefix. $key] ?? null;
    }

    public static function getChachePrefix(){
        return 'generic';
    }
}

class UserCache extends cache{
    public static function getChachePrefix(){
        return ' User';
    }
}

class ProductCache extends Cache {
    public static function getChachePrefix() {
        return 'product';
    }
}

UserCache::store('123', 'Alice');
echo UserCache::retrieve('123') . "\n"; // Output: Alice

ProductCache::store('456', 'Laptop');
echo ProductCache::retrieve('456') . "\n";