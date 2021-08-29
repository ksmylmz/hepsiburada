<?php
namespace ksmylmz\hepsiburada\models\requestmodels\order;
class SendDeliveryStatusRequestModel 
{    
    /**
     * receivedDate
     *
     * @var Datetime format :  2020-05-10T11:30:30.230Z
     */
    public $receivedDate;    
    /**
     * receivedBy
     *
     * @var string
     */
    public $receivedBy;    
    /**
     * digitalCodes
     *
     * @var array of digital code list
     */
    public $digitalCodes;
}