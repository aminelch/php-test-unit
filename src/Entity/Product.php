<?php

namespace App\Entity;

class Product
{
    const FOOD_PRODUCT = 'food';



    public $name;


    public $type;


    public $price;


   public function __construct($name, $type, $price)
   {
       $this->name=$name;
       $this->type = $type;
       $this->price = $price;
   }


   /**
    * calculate TVA for a product
    * @return float
    */
    public function computeTVA():float
    {
        if (self::FOOD_PRODUCT == $this->type) {
            return $this->price * 0.055;
        }

        return $this->price * 0.196;
    }
}
