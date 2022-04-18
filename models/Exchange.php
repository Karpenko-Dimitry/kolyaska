<?php


class Exchange
{

    public static function getCurrentExRate()
    {
        $path = 'https://api.privatbank.ua/p24api/pubinfo?json&exchange&coursid=5';
        $jsonPrivatBankRate = file_get_contents($path);
        $arrayPrivatBankRate = json_decode($jsonPrivatBankRate, true);
        $currentExRate = $arrayPrivatBankRate[0]['sale'];

        return $currentExRate;
    }

    public static function getStaticExRate()
    {
        $commonData = CommonModel::getCommonData();
        $staticExRate = $commonData['ex_rate'];

        return $staticExRate;
    }

    public static function exchangePrice($priceUSD)
    {

        if (isset($_SESSION['exrate']) && !empty($_SESSION['exrate'] && $_SESSION['exrate'] < 32)) {
            $staticExRate = self::getStaticExRate();
            if ($_SESSION['exrate'] < ($staticExRate - 2) || $_SESSION['exrate'] > ($staticExRate + 2)) {
                $ExRate = $_SESSION['exrate'];
            } else {
                $ExRate = self::getStaticExRate();
            }
        } else {
            $ExRate = self::getStaticExRate();
        }

        $priceUAH = number_format(round(($priceUSD * $ExRate), 1), 0, ',', ' ');

        return $priceUAH;
    }

    public static function exchangePriceNoformat($priceUSD)
    {

        if (isset($_SESSION['exrate']) && !empty($_SESSION['exrate'] && $_SESSION['exrate'] < 32)) {
            $staticExRate = self::getStaticExRate();
            if ($_SESSION['exrate'] < ($staticExRate - 2) || $_SESSION['exrate'] > ($staticExRate + 2)) {
                $ExRate = $_SESSION['exrate'];
            } else {
                $ExRate = self::getStaticExRate();
            }
        } else {
            $ExRate = self::getStaticExRate();
        }

        $priceUAH = round($priceUSD * $ExRate);

        return $priceUAH;
    }

    public static function formatPrice($price)
    {
        return $price = number_format(round(($price), 1), 0, ',', ' ');
    }
}