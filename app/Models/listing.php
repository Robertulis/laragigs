<?php
namespace App\Models;

class Listing{
    public static function all(){
        return[
            [
                'id'=>1,
                'title'=>'Lisitng one',
                'description'=>'1'
            ],
            [
                'id'=>2,
                'title'=>'Lisitng two',
                'description'=>'2 ',
            ]
            ];
    }

    public static function find($id){
        $listings = self::all();

        foreach ($listings as $listing){
            if ($listing['id']==$id){
                return $listing;
            }
        }
    }
};
?>