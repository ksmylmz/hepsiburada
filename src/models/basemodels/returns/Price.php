<?php

namespace ksmylmz\hepsiburada\models\basemodels\returns;

class Price
{    
    /**
     * currency
     *
     * @var string 3 Digit ISO Currency code
     */
    public $currency;    
    /**
     * amount
     *
     * @var double
     */
    public $amount;
    
    /**
     * __construct
     *
     * @param  double $amount
     * @param  string $currency
     * @return void
     */
    public function __construct($amount, $currency)
    {
        $this->amount = $amount;
        $this->currency = $currency;
    }


}
