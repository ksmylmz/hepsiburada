<?php
namespace ksmylmz\hepsiburada\models\requestmodels\finance;

use ksmylmz\hepsiburada\models\requestmodels\BaseGetRequestModel;

class  GetInvoiceRequestModel extends BaseGetRequestModel
{    
    /**
     * transactiontypes
     *
     * @var string combined with ksmylmz\hepsiburada\models\basemodels\HepsiburadaTypes\InvoiveTransactionType 
     * seperated with , For eg. transactiontypes=Commission,Retur
     */
    public $transactiontypes;    
    /**
     * allowance
     *
     * @var string  ksmylmz\hepsiburada\models\basemodels\HepsiburadaTypes\InvoiceAllowance;
     */
    public $allowance;
}
