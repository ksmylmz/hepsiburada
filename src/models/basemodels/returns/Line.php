<?php
namespace ksmylmz\hepsiburada\models\basemodels\returns;

class Line
{    
    /**
     * lineItemId
     *
     * @var string
     */
    public $lineItemId;    
    /**
     * productName
     *
     * @var string
     */
    public $productName;    
    /**
     * productImageUrlFormat
     *
     * @var string
     */
    public $productImageUrlFormat;    
    /**
     * listingId
     *
     * @var string
     */
    public $listingId;    
    /**
     * merchantId
     *
     * @var string
     */
    public $merchantId;    
    /**
     * hbSku
     *
     * @var string
     */
    public $hbSku;    
    /**
     * merchantSku
     *
     * @var string
     */
    public $merchantSku;
    public Price $price; 
    public Price $totalPrice; //TotalPrice

}
