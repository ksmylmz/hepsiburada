# Sipariş işlemleri 
_________________


### 1- Init Object for Usage

````php
use ksmylmz\trendyol\Trendyol;
......
$isTeststage = true;
$trendyol  = new Trendyol({username},{password},{merchantid},$isTestStage);
````
<br/>
<br/>

### 2- Talep kabul etme

```php
$claimNumber="1234567";
$hb->return->acceptClaim($claimNumber)
```
### 3- Talep reddetme

```php
$claimNumber="1234567";
$rejectRequest = new ClaimRejectionRequestmodel();
$rejectRequest->reason = ClaimRejectionReasons::ItHasBeenSentWithOtherProducts;
$rejectRequest->merchantStatement = "description of rejection";
$hb->return->rejectClaim($claimNumber,$rejectRequest);
```
### 4- Tüm Talepleri Listele

```php
$getParams = new BaseGetRequestModel();
$getParams->offset=10;
$getParams->limit=10;
$getParams->beginDate=date("Y-m-d H:i", strtotime("-5 day"));
$getParams->endDate=date("Y-m-d H:i");
$hb->return->getAllClaimDetails($getParams);
```
### 5- Tüm Durumlaruna göre talepleri listele
```php
$getParams = new BaseGetRequestModel();
$getParams->offset=10;
$getParams->limit=10;
$getParams->beginDate=date("Y-m-d H:i", strtotime("-5 day"));
$getParams->endDate=date("Y-m-d H:i");
$hb->return->getClaimDetailsWithStatus($getParams,ClaimStatus::AwaitingAction);
```
### 6- Aksiyon bekleyen talep bildirimi
```php
$request =new AwaitClaimRequestModel();
$request->claimNumber= "677048022";
$request->type= "Return";
$request->quantity= 2;
$request->status= "AwaitingAction";
$request->customerId= "8bb791a5-ff06-4c03-8255-68752714dcae";
$request->customerName= "Ahmet Aslan";
$request->orderNumber= "2634220750";
$request->explanation= "Ürünü beğenmedim";
$request->claimDate= "2020-08-26T0=4=21.684Z";
$request->orderDate= "2020-08-26T0=4=29Z";

$line = new Line();
$line->lineItemId= "5f4621de-3bc9-2100-01a3-9ad506060606";
$line->productName= "Tunçmatik Enerji Koruma Prizi Powersurge 2'li Beyaz 525 JOULE (TSK5080)";
$line->productImageUrlFormat= "https://productimages.hepsiburada.net/s/1/{size}/9541384503346.jpg";
$line->listingId= "1bd29f19-7387-4c1d-af80-e802f96cf17c";
$line->merchantId= "1a514334-5b66-45f9-9f47-7223ed8ca1db";
$line->hbSku= "BS600270";
$line->merchantSku= "BS600270";
$line->price= new Price(50,"TRY");
$line->totalPrice= new Price(100,"TRY");

$request->line = $line;
$request->reports = [
    new  Reports(
        "https://images.hepsiburada.net/mp/claim-test/2020/9/17/c91a9b9c-f84f-4d9f-bfd6-d4c8ecbb65e3.jpeg",
        "Customer"
    ),
];

$delivery = new Delivery();
$delivery->code = "6276183047475";
$delivery->status = "Delivered";
$delivery->direction = "CustomerToMerchant";
$delivery->createdDate = "2020-08-26T08:49:21.755Z";

$request->delivery = $delivery;
$hb->return->AwaittingActions($request);
```

