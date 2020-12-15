<?php

namespace App\Tests;

use App\Entity\Product;
use PHPUnit\Framework\TestCase;

class ProductTest extends TestCase
{

    public function testComputedTVAFoodProduct(){

        //on construit un nouveau produit
        $product = new Product("a product", Product::FOOD_PRODUCT, 20);

        // on assure que la methode computeTVA va retourner 1.1
        $this->assertSame(1.1, $product->computeTVA());



    }
}
