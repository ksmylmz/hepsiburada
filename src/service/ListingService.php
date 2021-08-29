<?php
namespace ksmylmz\hepsiburada\service;

use SimpleXMLElement;
use ksmylmz\hepsiburada\config\Endpoints;
use ksmylmz\hepsiburada\models\requestmodels\BaseGetRequestModel;

class ListingService extends HepsiburadaBaseService
{           
   /**
    * getList
    *
    * @param  BaseGetRequestModel $basegetparams
    * @return HepsiburadaBaseResponseModel
    */
   public function getList(BaseGetRequestModel $basegetparams)
   {
       $queryString = $this->generateQueryString($basegetparams);
       $url = $this->getUrl(Endpoints::listing,Endpoints::getListings,$queryString);
       $url = $this->replaceParameters(["@merchantid​"=>$this->credentials->merchantId],$url);
       return $this->request("GET",$url);
   }   
   /**
    * updateListing
    *
    * @param  array $listOfListings  array of  UpdateListingRequestModel
    * @return HepsiburadaBaseResponseModel
    */
   public function updateListing($listOfListings)
   {
 
       $xml = new SimpleXMLElement("<listings></listings>");
       $xml->addAttribute("xmlns:xsi","http://www.w3.org/2001/XMLSchema-instance");
       $xml->addAttribute("xmlns:xsd","http://www.w3.org/2001/XMLSchema");
       $listings=[];
       foreach ($listOfListings as $key => $value) 
       {
             $listings[$key] = $xml->addChild('listing');
             foreach ($value as $subkey => $subvalue) 
             {
                $listings[$key]->addChild($subkey,$subvalue);
             }
       }
       $XMLString = $xml->asXML();
       $payload = ["body"=>$XMLString];
       $url = $this->getUrl(Endpoints::listing,Endpoints::updateListings);
       $url = $this->replaceParameters(["@merchantid​"=>$this->credentials->merchantId],$url);
       return $this->xmlBasedRequest("POST",$url,$payload);
   }
   
   /**
    * checkUpdateAttempt
    *
    * @param  string $updateAttemptId
    * @return HepsiburadaBaseResponseModel
    */
   public function checkUpdateAttempt($updateAttemptId)
   {
        $url = $this->getUrl(Endpoints::listing,Endpoints::checkUpdateListings);
        $url = $this->replaceParameters(["@merchantid"=>$this->credentials->merchantId,"@inventoryuploadid"=>$updateAttemptId],$url);
        return $this->request("GET",$updateAttemptId);
   }   
   /**
    * deleteListing
    *
    * @param  string $hepsiburadasku
    * @param  string $merchantsku
    * @return HepsiburadaBaseResponseModel
    */
   public function deleteListing($hepsiburadasku,$merchantsku)
   {
        $url = $this->getUrl(Endpoints::listing,Endpoints::deleteListing);
        $url = $this->replaceParameters(
            [
                "@merchantid​"=>$this->credentials->merchantId,
                "@hbsku"=>$hepsiburadasku,
                "@merchantsku"=>$merchantsku
            ]
            ,$url);
        return $this->request("DELETE",$url);
   }   
   /**
    * activeListing
    *
    * @param  string $hepsiburadasku
    * @return HepsiburadaBaseResponseModel
    */
   public function activeListing($hepsiburadasku)
   {
        $url = $this->getUrl(Endpoints::listing,Endpoints::makeActiveListing);
        $url = $this->replaceParameters(
            [
                "@merchantid"=>$this->credentials->merchantId,
                "@hbsku"=>$hepsiburadasku,
            ]
            ,$url);

        return $this->request("POST",$url);

   }   
   /**
    * deactiveListing
    *
    * @param  string $hepsiburadasku
    * @return HepsiburadaBaseResponseModel
    */
   public function deactiveListing($hepsiburadasku)
   {
        $url = $this->getUrl(Endpoints::listing,Endpoints::makeDeactiveListing);
        $url = $this->replaceParameters(
            [
                "@merchantid"=>$this->credentials->merchantId,
                "@hbsku"=>$hepsiburadasku,
            ]
            ,$url);
        return $this->request("POST",$url);
   }   
   /**
    * getBuyBox
    *
    * @param  string $hepsiburadasku
    * @return getBuyBox
    */
   public function getBuyBox($hepsiburadasku)
   {
        $queryString = http_build_query(["skuList"=>$hepsiburadasku]);
        $url = $this->getUrl(Endpoints::listing,Endpoints::getBuyBoxlist,$queryString);
        $url = $this->replaceParameters(["@merchantId"=>$this->credentials->merchantId],$url);        
        return $this->request("GET",$url);
   }




}