<?php
namespace ksmylmz\hepsiburada\models\basemodels\HepsiburadaTypes;

abstract class ProductStatus
{
    public const WAITING="WAITING";
    public const MISSING_INFO="MISSING_INFO";
    public const MATCHED="MATCHED";
    public const PRE_MATCHED="PRE_MATCHED";
    public const REJECTED="REJECTED";
    public const MATCHED_WITH_STAGED="MATCHED_WITH_STAGED";
    public const CREATED="CREATED";
}