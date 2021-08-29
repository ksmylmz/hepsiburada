<?php
namespace ksmylmz\hepsiburada\models\requestmodels;

use yii\base\Model;

class BaseGetRequestModel extends Model
{    
    /**
     * page
     *
     * @var integer bulunulan sayfa 
     */
    public $page;    
    /**
     * size
     *
     * @var integer sayfa başı kayıt
     */
    public $size;    
    /**
     * offset
     *
     * @var integer
     */
    public $offset;    
    /**
     * limit
     *
     * @var integer
     */
    public $limit;    
    /**
     * beginDate
     *
     * @var string yyyy-MM-dd HH:mm
     */
    public $beginDate;    
    /**
     * endDate
     *
     * @var string yyyy-MM-dd HH:mm
     */
    public $endDate;
    
}