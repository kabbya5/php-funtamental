<?php 

class Model{
    public static function save(array $data){
        $table = static::getTableName();
        echo "Saving data to the {$table} table";
        print_r($data);
    }

    protected static function getTableName(){
        return 'Default Table';
    }
}

class User extends Model{
    protected static function getTableName()
    {
        return 'users';
    }
}

class Product extends Model{
    protected static function getTableName()
    {
        return 'product';
    }
}

User::save(['name', 'email']);
Product::save(['product', '1200']);