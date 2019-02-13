<?php

class Artikel {
    public $artikel;
    public $price;

    /**
     * @return mixed
     */
    public function getArtikel()
    {
        return $this->artikel;
    }

    /**
     * @param mixed $artikel
     */
    public function setArtikel($artikel, $price)
    {
        $this->artikel = $artikel;
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getPriceBTW()
    {
        return $this->price / 100 * 21;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @return mixed
     */
    public function getPriceTotal()
    {
        return $this->price / 100 * 121;
    }
}

function Btw($price1, $price2, $price3){
    return $price1+ $price2 + $price3;
}

function Total($price1, $price2, $price3){
    return $price1+ $price2 + $price3;
}

$artikel1 = new Artikel();
$artikel1->setArtikel($_POST['artikel1'], $_POST['artikel1price']);

$artikel2 = new Artikel();
$artikel2->setArtikel($_POST['artikel2'], $_POST['artikel2price']);

$artikel3 = new Artikel();
$artikel3->setArtikel($_POST['artikel3'], $_POST['artikel3price']);

echo ''.$artikel1->getArtikel().' €'.$artikel1->getPrice().' <br/>';
echo ''.$artikel2->getArtikel().' €'.$artikel2->getPrice().' <br/>';
echo ''.$artikel3->getArtikel().' €'.$artikel3->getPrice().' <br/>';
echo 'BTW '.btw($artikel1->getPriceBTW(), $artikel2->getPriceBTW(), $artikel3->getPriceBTW()).' <br/>';
echo 'Totaal '.Total($artikel1->getPriceTotal(), $artikel2->getPriceTotal(), $artikel3->getPriceTotal()).' <br/>';



