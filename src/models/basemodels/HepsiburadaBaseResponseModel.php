<?php
namespace ksmylmz\hepsiburada\models\basemodels;

class HepsiburadaBaseResponseModel
{
  /**
     * status
     *
     * @var bool requesting başarılı olup olmadığı bilgisi
     */
    public $status;    
    /**
     * statusCode
     *
     * @var int htto response status code
     */
    public $statusCode;    
    /**
     * errorCode
     *
     * @var string servisten http haricinde dönen spesifik 
     * bir hata kodu varsa bu alana set edilecektir
     */
    public $errorCode;    
    /**
     * errorMessage
     *
     * @var string hata mesajı
     */
    public $errorMessage;    
    /**
     * response
     *
     * @var object success durumda dönen response body
     */
    public $response;
}