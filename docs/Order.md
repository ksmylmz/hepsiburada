# Sipariş işlemleri 
_________________


### 1- Init Object for Usage

````php
$hb  = Yii::$app->hepsiburada;
````
<br/>
<br/>

### 2- Sipariş Bilgilerini Çekme

```php
$getParams = new BaseGetRequestModel();
$getParams->offset=3;
$getParams->limit=10;
$getParams->beginDate=date("Y-m-d H:i", strtotime("-5 day"));
$getParams->endDate=date("Y-m-d H:i");
$hb->order->getOrderList($getParams);
```

### 3- Sipariş için değişiklik yapılabilecek kargo firmalarını listeleme

```php
$orderlineid="123456789";
$hb->order->getOrderChangeableCargoCompanies($orderlineid);
```

### 4- Sipariş kargo firmasını değiştirme

```php
$cargoCompanyShortCode ="PK";
$hb->order->changeOrderCargoCompany($orderlineid,$cargoCompanyShortCode);
```
### 5- Paket için değişiklik yapılabilecek kargo firmalarını listele
```php
$packageNumber="123456789";
$hb->order->getPackageChangeableCargoList($packageNumber);
```

### 6- Paket Kargo firması değiştirme

```php
$packageNumber="123456789";
$cargoCompanyShortCode ="PK";
$hb->order->changePackageCargoCompany($packageNumber,$cargoCompanyShortCode);
```
### 7- Aynı pakete  konabillecek  ürünleri listele

```php
    $lineitemid="123456789";
    $hb->order->getPackageableWith($lineitemid);
```

### 8-Kalemleri paketleme
```php
$packageRequest  = new PackageItemsRequestModel();
$packageRequest->parcelQuantity=2;
$packageRequest->deci=10;
$packageRequest->lineItemRequests = [
    new PackageLine("471e7231-f9b5-460b-9a56-983ef737b3e0","1"),
    new PackageLine("b0a5eec2-acb7-4162-8e60-a28d56e5a314","1"),
];
$hb->order->packageItems($packageRequest);
```

### 9- Paket Bozma

```php
$packageNumber="123456";
$hb->order->unpackageItems($packageNumber);
```

### 10- Bozulmuş paketleri listeleme

```php
$getParams = new BaseGetRequestModel();
$getParams->offset=10;
$getParams->limit=10;
$getParams->beginDate=date("Y-m-d H:i", strtotime("-5 day"));
$getParams->endDate=date("Y-m-d H:i");

$hb->order->packageList($getParams);
```
### 11- Paket bilgilerini listeleme

```php
$orderNumber="123456";
$hb->order->getOrderDetail($orderNumber);
```
### 12- Paket kargo bilgilerini getirme

```php
$packageNumber="123456";
$hb->order->getPackageCargoCompany($packageNumber);
```
### 13-Sipariş bilgilerini getirme

```php
$orderNumber="123456";
$hb->order->getOrderDetail($orderNumber);
```

### 14-Sipariş Kampanya bilgilerini getirme

```php
$orderNumber="123456";
$hb->order->getCamping($orderNumber);
```

### 15 Fatura link gönderme

```php
$packageNumber="123456";
$invoiceLink = "https://hepsiburadaearsivfaturagonderimi.pdf";
$hb->order->sendInvoice($packageNumber,$invoiceLink);
```
### 16 Hepsiburada Kargo etiketi olışturma

```php
$packageNumber="123456";
$hb->order->getHepsiburadaCargoLabel($packageNumber,HepsiburadaLabelType::Base64zpl);
```

### 17 Kalem iptal bilgisi gönderme

> `her bir iptal işlemi para cezasına tabidir.`

```php
$packageNumber="123456";
$hb->order->cancelOrderItem($packageNumber,CancelReason::OUT_OF_STOCK);
```

### 18 Teslim edildi bilgisi gönder


```php
$packageNumber="123456";
$request = new SendDeliveryStatusRequestModel();
$request->receivedDate ="2020-05-10T11:30:30.230Z";
$request->receivedBy="John Doe";
$request->digitalCodes=["xyz123", "t468", "8513", "zyxdfg"];
$hb->order->sendDeliveredStatus($packageNumber,$request);
```



