<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Listing extends Model
{
    use HasFactory;
    // public static function Data(){
    //     return Listing::all();
    // }

    public static function find($id){
        $listings = self::all();

        foreach($listings as $listing){
            if($listing['id'] == $id){
                return $listing;
            }
        }
    }
    public function scopeFilter($query, array $filters){
        // filters itu kek name yg bakal dipassing dari html nya apa 
        if ($filters['tag'] ?? false ){
            $query->where('tags','like', '%'. request('tag') .'%');
            //ini regex (kenapa ada % % nya supaya si laravel biasa nyari tag di semua bagian )
        }
        if ($filters['search'] ?? false){
            $query->where('title','like', '%'. request('search') . '%')
            ->orWhere('description','like', '%'. request('search') . '%')
            ->orWhere('tags','like', '%' . request('search') . '%');
        }
    }
}
