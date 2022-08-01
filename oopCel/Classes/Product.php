<?php

class Product extends BaseClass
{

    public $maker;
    public $model;
    public $pret;
    public $rezolutie;
    public $display;
    public $diagonala;


   public static function getTable(){
       return 'products';
   }

   public function getMaker(){
       return Maker::find($this->maker);
   }

   public function getImages(){
       return ProductImage::findby ('id',$this->id);
   }
}
