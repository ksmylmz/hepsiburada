<?php
namespace ksmylmz\hepsiburada\models\basemodels\HepsiburadaTypes;

abstract class ClaimRejectionReasons
{
    public const BoxIsEmpty = 0;
    public const WrongProduct = 1;
    public const ProductIsDamaged = 2;
    public const NoSuchAccessory = 3;
    public const ItHasBeenSentWithOtherProducts = 4;
    public const ThereIsNoCargoReport = 5;
    public const CustomerReturnedWrongItem = 6;
    public const CustomerPackageIsNotInTheConditionISent = 7;
    public const ProductHasBeenUsed = 8;
    public const ProductIsNotInSellableCondition = 9;
    public const MissingInvoice = 10;
    public const SomePartsOrSomeAccessoriesOrSomePapersAreMissing = 11;
}