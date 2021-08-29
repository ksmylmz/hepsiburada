# Muhasebe işlemleri 
_________________


### 1- Init Object for Usage

````php
use ksmylmz\hepsiburada\Hepsiburada;
......
$isTeststage = true;
$hb  = new Hepsiburada({username},{password},{merchantid},$isTestStage);
````
<br/>
<br/>


### 2- Ürün Oluşturma 
> tek seferde birden fazla ürün gönderilebilir. her bir ürün için
> listeye bir HepsiburadaProductModel türünden bir obje ekleyebilirsiniz.

```php
$productList = [];
$product1 = new HepsiburadaProductModel();
$product1->categoryId = 18021982;
$product1->merchant = Credentials::merchantId;
$product1attributes = new Attributes();
$product1attributes->Barcode= "1234567891234";
$product1attributes->GarantiSuresi= 24;
$product1attributes->Image1= "https://productimages.hepsiburada.net/s/27/552/10194862145586.jpg";
$product1attributes->Image2= "https://productimages.hepsiburada.net/s/27/552/10194862145586.jpg";
$product1attributes->Image3= "https://productimages.hepsiburada.net/s/27/552/10194862145586.jpg";
$product1attributes->Image4= "https://productimages.hepsiburada.net/s/27/552/10194862145586.jpg";
$product1attributes->Image5= "https://productimages.hepsiburada.net/s/27/552/10194862145586.jpg";
$product1attributes->Marka= "Nike";
$product1attributes->UrunAciklamasi="Duis enim duis magna ex veniam elit id Lorem cillum minim nisi id aliquip. Laboris magna id est et deserunt adipisicing tempor eu ea officia ipsum deserunt. Irure occaecat sit aliquip elit ipsum sint dolore quis est amet aute pariatur cupidatat fugiat. Cillum pariatur pariatur occaecat sint. Aliqua qui in exercitation nulla aliquip id ipsum aliquip ad ut exce";
$product1attributes->UrunAdi= "Roth Tyler";
$product1attributes->VaryantGroupID= "Hepsiburada0";
$product1attributes->ebatlar_variant_property= "Büyük Ebat";
$product1attributes->kg= "1";
$product1attributes->merchantSku= "SAMPLE-SKU-INT-0";
$product1attributes->renk_variant_property= "Siyah";
$product1attributes->tax_vat_rate= "5";

$product1->attributes  =$product1attributes;

$productList[]=$product1;

$hb->product->createProduct($productList);
```

### 3- Ürün bilgisinin gönderilip gönderilmediğini kontrol etme

```php
$baseGet = new BaseGetRequestModel();
$baseGet->page=0;
$baseGet->size=100;
$hb->product->checkProductsAreCreated($baseGet);
```

### 4- Ürün Durumunu Sorgulama

```php
    $requestStatusList = [
        new ProdoductStatusesRequestModel(
            "00d0e72c-9b77-43e8-a795-4e51c6abe1a9",
            [
            "TEST21"  ,"SONTEST"
            ]
            ),
        new ProdoductStatusesRequestModel(
            "ac2a8cdd-5608-433e-8922-14c8a3db9de3",
            [
                "CAN-SKU-1"
            ]
        )
    ];
    $hb->product->checkProductStatus($requestStatusList);

```
### 5- Statü bazlı ürün bilgisi gönderme

```php
    $request = new GetProductInfoViaStatusRequestModel();
    $request->merchantId=Credentials::merchantId;
    $request->taskStatus=false;
    $request->productStatus=ProductStatus::WAITING;
    $hb->product->getProductInfoViaStatus($request);
```
