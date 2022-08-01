<?php

class ProductImage extends BaseClass
{
    public $path;
    public $productId;


  public static function getTable(){
      return 'product_images';
  }

}
