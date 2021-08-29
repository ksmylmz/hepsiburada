<?php
namespace ksmylmz\hepsiburada\models\requestmodels\product;

use ksmylmz\hepsiburada\models\requestmodels\BaseGetRequestModel;

class GetProductInfoViaStatusRequestModel extends BaseGetRequestModel
{    
    /**
     * merchantId
     *
     * @var strint 
     */
    public $merchantId;    
    /**
     * taskStatus
     *
     * @var boolean
     */
    public $taskStatus;    
    /**
     * productStatus
     *
     * @var string
     */
    public $productStatus;
}   

https://mpop-sit.hepsiburada.com/product/api/products/products-by-merchant-and-status?page=0&size=100&version=1&merchantId=6fc6d90d-ee1d-4372-b3a6-264b1275e9ff&productStatus=WAITING&taskStatus=false