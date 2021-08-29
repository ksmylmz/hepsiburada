# Listing işlemleri 
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

### 2- Satıcı Listing Bilgilerini Çekme

```php
$getParams = new BaseGetRequestModel();
$getParams->offset=3;
$getParams->limit=10;
$hb->listing->getList($getParams);
```
<br/>
<br/>

### 3- Listing Bilgilerini Güncelleme

```php
$listing = new UpdateListingRequestModel();
$listing->MerchantSku="BUTIK429-368";
$listing->HepsiburadaSku="HBV000004Q1JJ";
$listing->ProductName="Doğuş Halı Messina DM1101";
$listing->Price=288.97;
$listing->AvailableStock=9;
$listing->DispatchTime=3;
$listing->MaximumPurchasableQuantity=0;
$listing->CargoCompany1="x cargo";
$listing->CargoCompany2="y cargo";
$listing->CargoCompany3="z cargo";

$listOfListings[] =$listing;

$listing2  = new UpdateListingRequestModel();
$listing2->MerchantSku="PUDRASEKERI";
$listing2->HepsiburadaSku="HBV000006IY7A";
$listing2->ProductName="Doğuş Halı Messina DM1101";
$listing2->Price=288.97;
$listing2->AvailableStock=9;
$listing2->DispatchTime=3;
$listing2->MaximumPurchasableQuantity=0;
$listing2->CargoCompany1="x cargo";
$listing2->CargoCompany2="y cargo";
$listing2->CargoCompany3="z cargo";

$listOfListings[] =$listing;

$hb->listing->updateListing($listOfListings);
```
<br/>
<br/>

### 3- Güncelleme işleminin gerçekleşip gerçekleşmediğini kontrol etme

```php
$uploadAttemptId="16fd99f5-5bb3-43a5-8658-8cbb8b8ef5b2";
$hb->listing->checkUpdateAttempt($uploadAttemptId);

```

### 4- Listing silme

```php
$hepsiburadaSku="16fd99f5-5bb3-43a5-8658-8cbb8b8ef5b2";
$merchantSku="16fd99f5-5bb3-43a5-8658-8cbb8b8ef5b2";
$hb  = Yii::$app->hepsiburada;
$hb->listing->deleteListing($hepsiburadaSku,$merchantSku);
```

### 5- Listing Aktif/Deaktif etme

```php
$hepsiburadaSku="16fd99f5-5bb3-43a5-8658-8cbb8b8ef5b2";
$hb->listing->activeListing($hepsiburadaSku);
$hb->listing->deactiveListing($hepsiburadaSku);
```