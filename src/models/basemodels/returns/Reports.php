<?php
namespace ksmylmz\hepsiburada\models\basemodels\returns;

class Reports
{    


    /**
     * imageUrl
     *
     * @var string
     */
    public $imageUrl;    
    /**
     * reportedBy
     *
     * @var string
     */
    public $reportedBy; 
        
    /**
     * __construct
     *
     * @param  string $imageUrl
     * @param  string $reportedBy
     * @return void
     */
    public function __construct($imageUrl, $reportedBy)
    {
        $this->imageUrl = $imageUrl;
        $this->reportedBy = $reportedBy;
    }

}
