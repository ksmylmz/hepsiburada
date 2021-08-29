<?php
namespace ksmylmz\hepsiburada\service;

use GuzzleHttp\Client;
use ksmylmz\hepsiburada\config\Endpoints;
use ksmylmz\hepsiburada\config\Credentials;
use GuzzleHttp\Exception\RequestException;
use ksmylmz\hepsiburada\models\basemodels\HepsiburadaBaseResponseModel;
use Exception;

class HepsiburadaBaseService
{

    protected $client;
    protected $base_url;
    protected $token=false;
    protected $token_prefix="Hepsiburada_token";
    protected $options;
    protected $credentials;
    

    public function __construct($isTestStage=true, Credentials $credentials)
    {
        $this->credentials  =$credentials;
        $this->base_url =$isTestStage ?  Endpoints::test_base_url : Endpoints::prod_base_url; 
        ///TODO: bu kısımı account test bilgileri geldiğidiğinde açacağız
        //$this->initTokken();
        $options = $this->getOptions();
        $this->client  = new Client($options);
    }
    
    
    
    /**
     * getUrl
     *
     * @param  string $subdomain
     * @param  string $endpoint
     * @param  string $param4replace
     * @return string generated enpoint
     */
    public function getUrl($subdomain,$endpoint,$queryString=null)
    {
        $url =  "https://{$subdomain}.{$this->base_url}{$endpoint}";
        return $queryString!=null ? $url."?".$queryString : $url;
    }
    
    /**
     * replaceParameters
     *
     * @param  array $param4replace
     * @param  string $url
     * @return string
     */
    public function  replaceParameters($param4replace,$url)
    {
        foreach ($param4replace as $key => $value)
        {
            $url = str_replace($key,$value,$url);
        }
        return $url;
    }
    public function initTokken()
    {
        $this->token = false;
        //$app->cache->get("{$this->token_prefix}_auth_token");
        //bu noktada cache kullanmak faydalı olabilir
        if(!$this->token) $this->setToken();

    }
    public function setToken()
    {
        try {
            $options =  $this->getOptions();
            $body = [
                "username" => $this->credentials->username,
                "password" => $this->credentials->username,
                "authenticationType" => "INTEGRATOR"
            ];
            $url = $this->getUrl(Endpoints::catalog, Endpoints::token);
            $_client = new Client($options);
            $_response = $_client->request("POST", $url, $body);
            $_response_body =Json::decode($_response->getBody());
            if($_response->getStatusCode()!=200) throw $_response->getStatusCode();
            $this->token = $_response_body["id_token"];
            ///Hepsiburada servisi için max token süresi 30 dk(garanti olsun diye 25)
           // $app->cache->set("{$this->token_prefix}_auth_token",25*60);
        } catch (RequestException $th) {
            $msg = $th->getMessage();
            throw new Exception("Token Alma denemesi başarısız : {$msg}");
        }
    }

    protected function getOptions()
    {
        $options= [
            "headers"=>[
                "Content-Type" => "application/json",
                "Accept" => "application/json"
            ]
        ];
        if($this->token!==false) 
        {
            $options['headers']["Authorization"]="Bearer {$this->token}";
        }
        return $options;
    }

    public function request($method, $uri = '', array $body = [])
    {
        $response = new HepsiburadaBaseResponseModel();
        try {         
            $_response = $this->client->request($method, $uri, $body);
            $response->status=true;
            $response->statusCode=$_response->getStatusCode();
            $response->response=Json::decode($_response->getBody());
        } catch (RequestException $e) 
        {
            $response->status=false;
            $response->statusCode=$e->getCode();
            $response->errorMessage=$e->getMessage();

        }
        return $response;
    }
    public function xmlBasedRequest($method, $uri = '', array $body = [])
    {
        $response = new HepsiburadaBaseResponseModel();
        try {        
            $options = $this->getOptions();
            $options["headers"]["Content-Type"]="application/xml";//text/xml
            $options["headers"]["Accept"]="application/xml";//text/xml
            $_client = new Client($options);
            $_response = $_client->request($method, $uri, $body);
            $response->status=true;
            $response->statusCode=$_response->getStatusCode();
            $response->response=Json::decode($_response->getBody());
        } catch (RequestException $e) 
        {
            $response->status=false;
            $response->statusCode=$e->getCode();
            $response->errorMessage=$e->getMessage();

        }
        return $response;
    }
    
    /**
     * generateQueryString
     *
     * @param   $unknownmodel
     * @param  boolean $modelvalidation
     * @return void
     */
    protected function generateQueryString($unknownmodel)
    {
        if(!$unknownmodel->validate())
        {
            throw new \Exception($unknownmodel->errors);  
        } 
        $querystringParameters=[];
        foreach ($unknownmodel as $key => $value) 
        {
            if($value!=null)
            {
                 $querystringParameters[$key]=$value;
            } 
        }
        return  http_build_query($querystringParameters);
    }



}