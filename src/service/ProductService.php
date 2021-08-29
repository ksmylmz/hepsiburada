<?php
namespace ksmylmz\hepsiburada\service;

use ksmylmz\hepsiburada\config\Endpoints;
use ksmylmz\hepsiburada\models\requestmodels\product\GetProductInfoViaStatusRequestModel;

class ProductService extends HepsiburadaBaseService
{        
    /**
     * createProduct
     *
     * @param  array $HbProduct array of ksmylmz\hepsiburada\models\basemodels\products\HepsiburadaProductModel
     * @return HepsiburadabaseResponseModel
     */
    public function createProduct($HbProduct)
    {
        $url  = $this->getUrl(Endpoints::catalog,Endpoints::createProduct);
        $payload = ['body'=> \json_encode($HbProduct)];        
        return $this->request("POST",$url,$payload);
        
    }
    
    /**
     * checkProductsAreCreated
     *
     * @param  string $merchantID
     * @param  Model $baseGetRequest
     * @return HepsiburadabaseResponseModel
     */
    public function checkProductsAreCreated($baseGetRequest)
    {
        $queryString = $this->generateQueryString($baseGetRequest);
        $url = $this->getUrl(Endpoints::catalog,Endpoints::checkIsProductImported,$queryString);
        $url = $this->replaceParameters(["@merchantID"=>$this->credentials->merchantId],$url);
        return $this->request("GET",$url);
    }
    
    /**
     * checkProductStatus
     *
     * @param  array $statuList array of ProdoductStatusesRequestModel
     * @return HepsiburadabaseResponseModel
     */
    public function checkProductStatus($statuList)
    {

        $url = $this->getUrl(Endpoints::catalog,Endpoints::getProductStatuses);
        $payload = ['body'=> \json_encode($statuList)];        
        return $this->request("POST",$url,$payload);
    }    
    /**
     * getProductInfoViaStatus
     *
     * @param  GetProductInfoViaStatusRequestModel $statusRequest
     * @return HepsiburadabaseResponseModel
     */
    public function getProductInfoViaStatus(GetProductInfoViaStatusRequestModel $statusRequest)
    {
        $queryString = $this->generateQueryString($statusRequest);
        $url = $this->getUrl(Endpoints::catalog,Endpoints::getProductStatuses,$queryString);
        return $this->request("GET",$url);
    }


}