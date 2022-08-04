<?php


class ProductService extends BaseClass
{
    public $product_id;
    public $service_id;

    public static function getTable()
    {
    return 'product_services';
    }

    public function getService(){
        return Service::find($this->service_id);
    }

}
