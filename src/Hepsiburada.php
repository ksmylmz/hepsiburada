<?php
namespace ksmylmz\hepsiburada;


use ksmylmz\hepsiburada\service\OrderService;
use ksmylmz\hepsiburada\service\ListingService;
use ksmylmz\hepsiburada\service\ProductService;
use ksmylmz\hepsiburada\service\CategoryService;
use ksmylmz\hepsiburada\service\ReturnService;
use ksmylmz\hepsiburada\service\FinanceService;
use ksmylmz\hepsiburada\config\Credentials;

class Hepsiburada 
{
    public $category;
    public $product;
    public $listing;
    public $order;
    public $return;
    public $finance;
    public $username;
    public $password;
    public $merchantId;
    public $isTestStage;
    public  function __construct($username,$password,$merchantI,$isTestStage=true)
    {        
        $credentials = new Credentials();
        $credentials->username=$username;
        $credentials->password=$password;
        $credentials->merchantId=$merchantI;
        $this->category = new CategoryService($isTestStage,$credentials);
        $this->product = new ProductService($isTestStage,$credentials);
        $this->order = new OrderService($isTestStage,$credentials);
        $this->listing = new ListingService($isTestStage,$credentials);
        $this->return = new ReturnService($isTestStage,$credentials);
        $this->finance = new FinanceService($isTestStage,$credentials);
    }
    

}