Hepsiburada Servis Modülü
======================


Hepsiburada WEb Servisi ile iletişim katmanı özelliği olan bu 
servis hazırlanırken [Hepsiburada Resmi dökümanyasyon](https://developers.hepsiburada.com/)unndan faydalanılmıştır

Modül Yii2 frameworkü için component olarka hazırlanmışır. 
request işlemleri için Guzzle Kullanılmıştır. 

## Kurulum 
________


### 1- Component olarka ekleme 
````php
    'components' => [
        ......
        'hepsiburada' => [
            'class' => 'ksmylmz\hepsiburada\Hepsiburada',
            'username' => "{$username}", //HB tarafından sağlanan username
            'password' => "{$password}", //HB tarafından sağlanan pasword
            'merchantId' => "{$merchantId}", //HB tarafından verilen satıcı numarası
            'isTestStage' => true, //prod için false
        ]
        ......
    ],
````


### 2- Örnek Kullanım

````
 $hb  = Yii::$app->hepsiburada;
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



