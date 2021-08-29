<?php
namespace ksmylmz\hepsiburada;

use yii\base\Component;
use ksmylmz\hepsiburada\service\OrderService;
use ksmylmz\hepsiburada\service\ListingService;
use ksmylmz\hepsiburada\service\ProductService;
use ksmylmz\hepsiburada\service\CategoryService;
use ksmylmz\hepsiburada\service\ReturnService;
use ksmylmz\hepsiburada\service\FinanceService;
use ksmylmz\hepsiburada\config\Credentials;

class Hepsiburada extends Component
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
    function init()
    {        
        $credentials = new Credentials([
            'username'=>$this->username,
            'password'=>$this->password,
            'merchantId'=>$this->merchantId
        ]);
        $this->category = new CategoryService($this->isTestStage,$credentials);
        $this->product = new ProductService($this->isTestStage,$credentials);
        $this->order = new OrderService($this->isTestStage,$credentials);
        $this->listing = new ListingService($this->isTestStage,$credentials);
        $this->return = new ReturnService($this->isTestStage,$credentials);
        $this->finance = new FinanceService($this->isTestStage,$credentials);
    }
    

}