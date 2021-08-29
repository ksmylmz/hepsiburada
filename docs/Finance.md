# Muhasebe işlemleri 
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

### 2- Faturaları listele
```php
$getParams = new GetInvoiceRequestModel();
$getParams->offset=10;
$getParams->limit=10;
$getParams->beginDate=date("Y-m-d H:i", strtotime("-5 day"));
$getParams->endDate=date("Y-m-d H:i");
$getParams->transactiontypes=implode(",",[InvoiveTransactionType::Return,InvoiveTransactionType::Commission]);
$getParams->allowance=InvoiceAllowance::Open;
// InvoiceAllowance::Open henüz ödemesi tamamlanmamış faturalar
$getParams->allowance=InvoiceAllowance::Cleared;
//InvoiceAllowance::Cleared sadece ödemesi tamamlanmış faturalar
$hb->finance->getInvoice($getParams);

```
<br/>
<br/>