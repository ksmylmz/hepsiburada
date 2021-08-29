<?php

namespace ksmylmz\hepsiburada\config;

use yii\base\Model;

class Credentials extends Model
{    
    /**
     * username
     *
     * @var string
     */
    public $username;    
    /**
     * password
     *
     * @var string
     */
    public $password;    
    /**
     * merchantId
     *
     * @var string
     */
    public $merchantId;
}
