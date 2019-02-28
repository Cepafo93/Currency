<?php


namespace Currency;


class Convert
{

    public function __construct($price1, $rate1, $quantity1,  $price2,  $rate2, $quantity2)
    {
        $this->price1 = $price1;
        $this->price2 = $price2;
        $this->rate1 = $rate1;
        $this->rate2 = $rate2;
        $this->quantity1 = $quantity1;
        $this->quantity2 = $quantity2;
    }

    public function calcul()
    {
        $result = ((($this->price1*$this->rate1)*$this->quantity1) + (($this->price2/$this->rate2)*$this->quantity2))*125.56;

        return 'Le total du panier est de: ' . number_format($result,2) . ' yen';
    }




}