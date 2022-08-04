<?php


class Product extends BaseClass
{
    private $name;
    public $model;
    public $pret;
    public $rezolutie;
    public $display;
    public $diagonala;

    public static function getTable()
    {
        return 'products';
    }

    /**
     * @return mixed
     */
    public function getPret()
    {
        return $this->pret;
    }

    public function  getProductServices(){
        return ProductService::findBy('product_id', $this->getId());
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }



}
