<?php
namespace ksmylmz\hepsiburada\models\basemodels\HepsiburadaTypes;

abstract class ClaimStatus
{
    public const AwaitingAction="AwaitingAction";
    public const InDispute="InDispute";
    public const Accepted="Accepted";
    public const Rejected="Rejected";
    public const Refunded="Refunded";
    public const Cancelled="Cancelled";
}