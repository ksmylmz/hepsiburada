<?php
namespace ksmylmz\hepsiburada\models\basemodels\HepsiburadaTypes;

abstract class InvoiceAllowance
{
    public const  Open="Open";//Allowance filtresi Open olarak seçilirse henüz ödemesi tamamlanmamış faturalar listelenir.
    public const  Cleared="Cleared"; //Allowance filtresi Cleared olarak seçilirse sadece ödemesi tamamlanmış faturalar listelenir.
}