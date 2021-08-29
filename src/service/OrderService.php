<?php
namespace ksmylmz\hepsiburada\service;

use yii\base\Model;
use yii\helpers\Json;
use ksmylmz\hepsiburada\config\Endpoints;
use ksmylmz\hepsiburada\config\Credentials;
use ksmylmz\hepsiburada\models\requestmodels\BaseGetRequestModel;
use ksmylmz\hepsiburada\models\requestmodels\order\PackageItemsRequestModel;
use ksmylmz\hepsiburada\models\requestmodels\order\SendDeliveryStatusRequestModel;

class OrderService extends HepsiburadaBaseService
{       
    /**
     * getOrderList
     *
     * @param  BaseGetRequestModel $requestParams
     * @return HepsiburadaBaseResponseModel
     */
    public function getOrderList(BaseGetRequestModel $requestParams)
    {
        $queryString = $this->generateQueryString($requestParams);
        $url= $this->getUrl(Endpoints::order,Endpoints::getOrder,$queryString);
        $url = $this->replaceParameters(["@merchantid"=>$this->credentials->merchantId],$url);
        return $this->request("GET",$url);
    }
    
    /**
     * getOrderChangeableCargoCompanies
     *
     * @param  string $orderlineid
     * @return HepsiburadaBaseResponseModel
     */
    public function getOrderChangeableCargoCompanies($orderlineid)
    {
        $url= $this->getUrl(Endpoints::order,Endpoints::orderChangableCargoCompany);
        $url = $this->replaceParameters(["@merchantId"=>$this->credentials->merchantId,"@orderlineid"=>$orderlineid],$url);
        return $this->request("GET",$url);
    }    
    /**
     * changeOrderCargoCompany
     *
     * @param  string $orderlineid
     * @param  string $cargoCompanyShortCode
     * @return HepsiburadaBaseResponseModel
     */
    public function changeOrderCargoCompany($orderlineid,$cargoCompanyShortCode)
    {
        $url= $this->getUrl(Endpoints::order,Endpoints::changeOrderCargoCompany);
        $url = $this->replaceParameters(["@merchantId"=>$this->credentials->merchantId,"@orderlineitemid"=>$orderlineid],$url);
        $payload = ["body"=>json_encode(["CargoCompanyShortName"=>$cargoCompanyShortCode])];
        return $this->request("PUT",$url,$payload);
    }
    
    /**
     * getPackageChangeableCargoList
     *
     * @param  string $packagenumber
     * @return HepsiburadaBaseResponseModel
     */
    public function getPackageChangeableCargoList($packagenumber)
    {
        $url= $this->getUrl(Endpoints::order,Endpoints::packageChangableCargoCompany);
        $url = $this->replaceParameters(["@merchantId"=>$this->credentials->merchantId,"@packagenumber"=>$packagenumber],$url);
        return $this->request("GET",$url);
    }    
    /**
     * changePackageCargoCompany
     *
     * @param  string $packagenumber
     * @param  string $cargoCompanyShortCode
     * @return HepsiburadaBaseResponseModel
     */
    public function changePackageCargoCompany($packagenumber,$cargoCompanyShortCode)
    {
        $url= $this->getUrl(Endpoints::order,Endpoints::changePackageCargoCompany);
        $url = $this->replaceParameters(["@merchantId"=>$this->credentials->merchantId,"@packagenumber"=>$packagenumber],$url);
        $payload = ["body"=>json_encode(["CargoCompanyShortName"=>$cargoCompanyShortCode])];
        return $this->request("PUT",$url,$payload);
    }    
    /**
     * getPackageableWith
     *
     * @param  string $lineitemid
     * @return HepsiburadaBaseResponseModel
     */
    public function getPackageableWith($lineitemid)
    {
        $url= $this->getUrl(Endpoints::order,Endpoints::getPackgableWith);
        $url = $this->replaceParameters(["@merchantId"=>$this->credentials->merchantId,"@lineitemid"=>$lineitemid],$url);
        return $this->request("GET",$url);
    }
    
    /**
     * packageItems
     *
     * @param  PackageItemsRequestModel $packageItems
     * @return HepsiburadaBaseResponseModel
     */
    public function packageItems(PackageItemsRequestModel $packageItems)
    {
        $url = $this->getUrl(Endpoints::order,Endpoints::packageItems);
        $url= $this->replaceParameters(["@merchantId"=>$this->credentials->merchantId],$url);
        $payload = ["body"=>json_encode($packageItems)];
        return $this->request("POST",$url,$payload);
    }    
    /**
     * unpackageItems
     *
     * @param  string $packageNumber
     * @return HepsiburadaBaseResponseModel
     */
    public function unpackageItems($packageNumber)
    {
        $url = $this->getUrl(Endpoints::order,Endpoints::unPackageItems);
        $url= $this->replaceParameters(["@merchantid"=>$this->credentials->merchantId,"@packagenumber"=>$packageNumber],$url);
        return $this->request("POST",$url);
    }
    
    /**
     * getUnpackagedList
     *
     * @param  BaseGetRequestModel $requestParams
     * @return HepsiburadaBaseResponseModel
     */
    public function getUnpackagedList(BaseGetRequestModel $requestParams)
    {
        $queryString = $this->generateQueryString($requestParams);
        $url= $this->getUrl(Endpoints::order,Endpoints::unpackedList,$queryString);
        $url = $this->replaceParameters(["@merchantid"=>$this->credentials->merchantId],$url);
        return $this->request("GET",$url);
    }    
    /**
     * packageList
     *
     * @param  BaseGetRequestModel $requestParams
     * @return HepsiburadaBaseResponseModel
     */
    public function packageList(BaseGetRequestModel $requestParams)
    {
        $queryString = $this->generateQueryString($requestParams);
        $url= $this->getUrl(Endpoints::order,Endpoints::packageList,$queryString);
        $url = $this->replaceParameters(["@merchantid"=>$this->credentials->merchantId],$url);
        return $this->request("GET",$url);
    }
    
    /**
     * getPackageCargoCompany
     *
     * @param  string $packageNumber
     * @return HepsiburadaBaseResponseModel
     */
    public function getPackageCargoCompany($packageNumber)
    {
        $url = $this->getUrl(Endpoints::order,Endpoints::getPackageCargoInfo);
        $url= $this->replaceParameters(["@merchantid"=>$this->credentials->merchantId,"@packagenumber"=>$packageNumber],$url);
        return $this->request("GET",$url);
    }

    
    /**
     * getOrderDetail
     *
     * @param  string $orderNumber
     * @return HepsiburadaBaseResponseModel
     */
    public function getOrderDetail($orderNumber)
    {
        $url = $this->getUrl(Endpoints::order,Endpoints::getOrderDetail);
        $url= $this->replaceParameters(["@merchantid"=>$this->credentials->merchantId,"@ordernumber"=>$orderNumber],$url);
        return $this->request("GET",$url);
    }    
    /**
     * getCamping
     *
     * @param  string $orderNumber
     * @return HepsiburadaBaseResponseModel
     */
    public function getCamping($orderNumber)
    {
        $url = $this->getUrl(Endpoints::order,Endpoints::getCampings);
        $url= $this->replaceParameters(["@merchantId"=>$this->credentials->merchantId,"@orderNumber"=>$orderNumber],$url);
        return $this->request("GET",$url);
    }
    
    /**
     * sendInvoice
     *
     * @param  string $packageNumber
     * @param  string $invoiceLink
     * @return HepsiburadaBaseResponseModel
     */
    public function sendInvoice($packageNumber,$invoiceLink)
    {
        $url=$this->getUrl(Endpoints::order,Endpoints::sendInvoiceUrl);
        $url=$this->replaceParameters(["@merchantId"=>$this->credentials->merchantId,"@packageNumber"=>$packageNumber],$url);
        $payload=["body"=>json_encode(["invoiceLink"=>$invoiceLink])];
        $this->request("PUT",$url,$payload);
    }    
    /**
     * getHepsiburadaCargoLabel
     *
     * @param  string $packageNumber
     * @param  string $labelType ksmylmz\hepsiburada\models\basemodels\HepsiburadaTypes
     * @return HepsiburadaBaseResponseModel
     */
    public function getHepsiburadaCargoLabel($packageNumber,$labelType)
    {
        $queryString = http_build_query(["format"=>$labelType]);
        $url=$this->getUrl(Endpoints::order,Endpoints::getHepsiburadaCargoLabel,$queryString);
        $url=$this->replaceParameters(["@merchantId"=>$this->credentials->merchantId,"@packageNumber"=>$packageNumber],$url);
        $this->request("GET",$url);
    }    
    /**
     * cancelOrderItem
     *
     * @param  string $orderlineid
     * @param  string $cancelReason
     * @return HepsiburadaBaseResponseModel
     */    
    /**
     * cancelOrderItem
     *
     * @param  string $orderlineid
     * @param  string $cancelReason
     * @return HepsiburadaBaseResponseModel
     */
    public function cancelOrderItem($orderlineid,$cancelReason)
    {
        $url=$this->getUrl(Endpoints::order,Endpoints::cancelOrderItem);
        $url=$this->replaceParameters(["@merchantId"=>$this->credentials->merchantId,"@lineitemid"=>$orderlineid],$url);
        $payload = ["body"=>json_encode(["reasonId"=>$cancelReason])];
        $this->request("POST",$url,$payload);
    }    
    /**
     * sendDeliveredStatus
     *
     * @param  string $packageNumber
     * @param  string $deliveredRequest
     * @return HepsiburadaBaseResponseModel
     */
    public function sendDeliveredStatus($packageNumber,SendDeliveryStatusRequestModel $deliveredRequest)
    {
        $url=$this->getUrl(Endpoints::order,Endpoints::sendDeliveredStatus);
        $url=$this->replaceParameters(["@merchantId"=>$this->credentials->merchantId,"@packageNumber"=>$packageNumber],$url);
        $payload = ["body"=>json_encode($deliveredRequest)];
        $this->request("POST",$url,$payload);
    }
}

