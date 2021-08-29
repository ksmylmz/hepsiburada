Hepsiburada Servis Modülü
======================


Hepsiburada WEb Servisi ile iletişim katmanı özelliği olan bu 
servis hazırlanırken [Hepsiburada Resmi dökümanyasyon](https://developers.hepsiburada.com/)unndan faydalanılmıştır

request işlemleri için Guzzle Kullanılmıştır. 

## Kurulum 
________


### 1- Paketi projeye dahil etme

psr-4 standartlarına uyan herhangi bir yapı ile birlikte kullanılabilir. 

````
    composer require ksmylmz/hepsiburada

````


### 2- Örnek Kullanım

````php
use ksmylmz\trendyol\Trendyol;
......
$isTeststage = true;
$trendyol  = new Trendyol({username},{password},{merchantid},$isTestStage);
$categoryID = "123456";
$hb->category->getCategoryAttributes($categoryID);
````

### 3-Dönen değeri değerlendirme (Handle)


 `Request işlemlerinin sonucu ne olursa olsun aynı 
 obje ile dönülecektir. Dönüş nesnesinin status parametresine göre 
 request sonucu değerlendirilebilir. `
```php
 if($result->status)
 {

     var_dump($result->response)
 }
 {
     echo $result->statusCode; //Http response code
     echo $result->errorMessage; //String Error Mesage
     echo $result->errorCode ///Servisten dönen spesifik bir hata kodu varsa
  }
````


### 4- Kategorilerine göre işlemler 

#### A-[Listeleme işlemleri](docs/Listing.md)
#### B-[Ürün işlemleri](docs/Product.md)
#### C-[Kategori işlemleri](docs/Category.md)
#### D-[Spariş işlemleri](docs/Order.md)
#### E-[İade işlemleri](docs/Return.md)
#### F-[Muhasebe işlemleri](docs/Finance.md)



