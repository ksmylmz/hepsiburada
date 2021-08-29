<?php
namespace ksmylmz\hepsiburada\models\basemodels\products;

class Attributes {    
    /**
     * Barcode
     *
     * @var string EAN13 Ürün barkodu
     */
    public $Barcode;     
    /**
     * GarantiSuresi
     *
     * @var integer ay cinsinden
     */
    public $GarantiSuresi;     
    /**
     * Image1
     *
     * @var integer ürün görsel
     */
    public $Image1;     
    /**
     * Image2
     *
     * @var integer ürün görsel
     */
    public $Image2;     
    /**
     * Image3
     *
     * @var integer ürün görsel
     */
    public $Image3;     
    /**
     * Image4
     *
     * @var integer ürün görsel
     */
    public $Image4;     
    /**
     * Image5
     *
     * @var integer ürün görsel
     */
    public $Image5;     
    /**
     * Marka
     *
     * @var string
     */
    public $Marka;     
    /**
     * UrunAciklamasi
     *
     * @var string
     */
    public $UrunAciklamasi;     
    /**
     * UrunAdi
     *
     * @var string
     */
    public $UrunAdi;     
    /**
     * VaryantGroupID
     *
     * @var string
     * Varyant ürünleri birbiri ile gruplayan Id değeridir. Bu değer 
     * ürünlerde aynı gönderilirse HB üzerinde varyantlı bir şekilde gösterilir.
     */
    public $VaryantGroupID;     
    /**
     * ebatlar_variant_property
     *
     * @var mixed
     */
    public $ebatlar_variant_property;     
    /**
     * kg
     *
     * @var mixed
     */
    public $kg;     
    /**
     * merchantSku
     *
     * @var mixed
     */
    public $merchantSku;     
    /**
     * renk_variant_property
     *
     * @var string
     */
    public $renk_variant_property;     
    /**
     * tax_vat_rate
     *
     * @var string ? dökümantasyndna tam anlaşılamadı
     * muhtemelen kdv oranı
     */
    public $tax_vat_rate; 
   
   }
