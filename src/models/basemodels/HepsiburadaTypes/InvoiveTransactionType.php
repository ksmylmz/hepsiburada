<?php
namespace ksmylmz\hepsiburada\models\basemodels\HepsiburadaTypes;

abstract class InvoiveTransactionType
{
    public const Payment="Payment";//	Sipariş Tutarı
    public const Commission="Commission";//	Komisyon Kesintisi
    public const CommissionReturnPriceDifference="CommissionReturnPriceDifference";//	Komisyon İade Tutarı
    public const CustomerSatisfaction="CustomerSatisfaction";//	Hediye Çeki Tutarı
    public const RevenueExpense="RevenueExpense";//	Ciro Gideri
    public const StudioIncome="StudioIncome";//	Stüdyo Gideri
    public const ShipmentCostSharingExpense="ShipmentCostSharingExpense";//	Kargo Katkı Payı Geliri
    public const ShipmentCostSharingIncome="ShipmentCostSharingIncome";//	Kargo Katkı Payı Gideri
    public const MarketingIncome="MarketingIncome";//	Pazarlama Gideri
    public const MarketingExpense="MarketingExpense";//	Pazarlama Geliri
    public const PriceDifferenceIncome="PriceDifferenceIncome";//	Fiyat Farkı Gideri
    public const PriceDifferenceExpense="PriceDifferenceExpense";//	Fiyat Farkı Geliri
    public const LateInterestIncome="LateInterestIncome";//	Vade Farkı Gideri
    public const Return="Return";//	Toplam İade Tutarı
    public const CampaignDiscount="CampaignDiscount";//	Kampanya Geliri
    public const CargoCompensationIncome="CargoCompensationIncome";//	Kargo Tazmin Gideri
    public const CargoCompensationExpense="CargoCompensationExpense";//	Kargo Tazmin Geliri
    public const CargoCompensationSellerSatisfactionRevenue="CargoCompensationSellerSatisfactionRevenue";//	Kargo Tazmin Satıcı Memnuniyet Geliri
    public const RefusedInvoiceIncome="RefusedInvoiceIncome";//	Red Edilen Fatura Gideri
    public const RefusedInvoiceExpense="RefusedInvoiceExpense";//	Red Edilen Fatura Geliri
    public const GiftChequeRefund="GiftChequeRefund";//	Hediye Çeki İadesi
    public const CommissionInvoiceRefund="CommissionInvoiceRefund";//	Komisyon Fatura İadesi
    public const CargoCostRefund="CargoCostRefund";//	Kargo İade
    public const LineItemTransferIncome="LineItemTransferIncome";//	Sipariş Transfer Geliri
    public const RoadAssistanceExpense="RoadAssistanceExpense";//	Yol Yardım Geliri
    public const RoadAssistanceIncome="RoadAssistanceIncome";//	Yol Yardım Gideri
    public const ProcessingFeeIncome="ProcessingFeeIncome";//	Hizmet Bedeli
    public const ProcessingFeeRefund="ProcessingFeeRefund";//	İşlem Ücret Gelir İadesi
    public const SponsorshipFee="SponsorshipFee";//	Sponsorluk Bedeli
    public const CampaignDiscountRefund="CampaignDiscountRefund";//	Kampanya İndirimleri İadesi
    public const CommissionSettlement="CommissionSettlement";//	Komisyon Mahsuplaşma
    public const OverseasCommissionRefund="OverseasCommissionRefund";//	Yurtdışı Komisyon İadesi
    public const AdSharingIncomeRefund="AdSharingIncomeRefund";//	Reklam Katılım Gideri İadesi
    public const DropShipmentCostSharingIncome="DropShipmentCostSharingIncome";//	Drop Kargo Katkı Payı Gideri
    public const DropShipmentCostSharingExpense="DropShipmentCostSharingExpense";//	Drop Kargo Katkı Payı Geliri    
}