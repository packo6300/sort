<?php

namespace sorteo;

use Illuminate\Database\Eloquent\Model;
use DB;
class Sorteo extends Model{
   
    /**
     * regresa toda la lista de sorteos
     * @return type
     */
    public static function getAll(){
        return DB::table('sorteos')->get();
    }
    /**
     * regresa toda la lista de sorteos paginados
     * @return type
     */
    public static function getAllPaginate(){
        return DB::table('sorteos')->offset(10)->limit(5)->get();
    }
    
    public static function setNew($sorteo) {
        $id=0;
        if(!empty($sorteo)){
         $id=DB::table('users')->insertGetId($sorteo);   
        }
        return $id;
    }
}
