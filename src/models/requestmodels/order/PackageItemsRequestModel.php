<?php
namespace ksmylmz\hepsiburada\models\requestmodels\order;

class PackageItemsRequestModel
{      
      /**
       * parcelQuantity
       *
       * @var integer
       */
      public $parcelQuantity;      
      /**
       * deci
       *
       * @var integer
       */
      public $deci;      
      /**
       * lineItemRequests
       *
       * @var array of  ksmylmz\hepsiburada\models\requestmodels\order\PackageLine
       */
      public $lineItemRequests;  
}