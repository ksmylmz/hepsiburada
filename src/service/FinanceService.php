<?php 
namespace ksmylmz\hepsiburada\service;

use ksmylmz\hepsiburada\config\Credentials;
use ksmylmz\hepsiburada\config\Endpoints;
use ksmylmz\hepsiburada\models\requestmodels\finance\GetInvoiceRequestModel;

class FinanceService extends HepsiburadaBaseService
{     
     /**
      * getInvoice
      *
      * @param  GetInvoiceRequestModel $getInvoiceRequest
      * @return HepsiburadaBaseResponseModel
      */
     public function getInvoice(GetInvoiceRequestModel $getInvoiceRequest)
     {
        $queryString = $this->generateQueryString($getInvoiceRequest);
        $url = $this->getUrl(Endpoints::finance,Endpoints::getInvoice,$queryString);
        $url = $this->replaceParameters(["@merchantid"=>$this->credentials->merchantId],$url);
        return $this->request("GET",$url);
     }   
}
