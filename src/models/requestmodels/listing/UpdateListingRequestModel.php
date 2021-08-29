<?php
namespace ksmylmz\hepsiburada\models\requestmodels\listing;

class UpdateListingRequestModel
{    
    /**
     * HepsiburadaSku
     *
     * @var string
     */
    public $HepsiburadaSku;    
    /**
     * MerchantSku
     *
     * @var string
     */
    public $MerchantSku;    
    /**
     * ProductName
     *
     * @var string
     */
    public $ProductName;    
    /**
     * Price
     *
     * @var double
     */
    public $Price;    
    /**
     * AvailableStock
     *
     * @var integer
     */
    public $AvailableStock;    
    /**
     * DispatchTime
     *
     * @var integer
     */
    public $DispatchTime;    
    /**
     * MaximumPurchasableQuantity
     *
     * @var integer
     */
    public $MaximumPurchasableQuantity;    
    /**
     * CargoCompany1
     *
     * @var string
     */
    public $CargoCompany1;    
    /**
     * CargoCompany2
     *
     * @var string
     */
    public $CargoCompany2;    
    /**
     * CargoCompany3
     *
     * @var string
     */
    public $CargoCompany3; 
}