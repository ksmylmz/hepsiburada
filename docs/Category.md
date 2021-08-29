# Kategori işlemleri 
_________________


### 1- Init Object for Usage

````php
$hb  = Yii::$app->hepsiburada;
````

### 2- Tüm Kategori Bilgilerini getirme 


````php
    $getAllCategoryRequest = new GetAllCategoryRequestmodel();
    $getAllCategoryRequest->leaf = true;
    $getAllCategoryRequest->status = CategoryStatus::active;
    $getAllCategoryRequest->available =true;
    $getAllCategoryRequest->page=0;
    $getAllCategoryRequest->size =500;
    $hb->category->getAllCategories($getAllCategoryRequest);
````

### 3- Kategori Özelliklerini getirme
````php
    $categoryID = "123456";
    $hb->category->getCategoryAttributes($categoryID);
````

### 4-Kategori Özellik değerlerini getirme

```php
$categoryID = "123456";
$hb->category->getCategoryAttributes($categoryID);

```
