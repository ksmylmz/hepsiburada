<?php
namespace ksmylmz\hepsiburada\config;

abstract class Endpoints
{
    public const test_base_url = "hepsiburada.com/api/";
    public const prod_base_url = "hepsiburada.com/api/";
    /**
     * token
     */
    public const token="authenticate";

    /**
     * subdomains
     */
    public const catalog="mpop-sit";
    public const listing="listing-external-sit";
    public const order="oms-external-sit";
    public const claim="oms-external-sit";
    public const merchant="oms-stub-external-sit";
    public const finance="mpfinance-external";

  
    /**
     * Kategori işlemleri
     */
    public const allCategories="categories/get-all-categories";
    public const getCategoriAttrributes="categories/@categoriID/attributes";
    public const getAttributeValues="categories/@categoriID/attributes/@attributeSlug";


    /***
     * Ürün işlemleri
    */
    public const createProduct = "products/import";
    public const trackProduct = "products/status/@trackingID";
    public const checkIsProductImported = "products/status/@merchantID";
    public const getTrackingIDS = "products/trackingId-history";
    public const getProductStatuses = "check-product-status";
    public const getProductInfoViaStatusID = "products/products-by-merchant-and-status";

    /**
     * Listeleme işlemleri
     */
    public const getListings = "listings/merchantid/@merchantid​";
    public const updateListings = "listings/merchantid/@merchantid/inventory-uploads​";
    public const checkUpdateListings = "listings/merchantid/@merchantid/inventory-uploads/id/​@inventoryuploadid";
    public const deleteListing = "listings/merchantid/@merchantid/sku/@hbsku/merchantsku/@merchantsku";
    public const makeActiveListing = "listings/merchantid/@merchantid/sku/@hbsku/activate​";
    public const makeDeactiveListing = "listings/merchantid/@merchantid/sku/@hbsku/deactivate";
    public const getBuyBoxlist = "buybox-orders/merchantid/@merchantId";

    /**
     * Sipariş işlemleri
     */
    public const createOrder = "orders/merchantid/@merchantid";
    public const getOrder = "orders/merchantid/@merchantid";

    public const orderChangableCargoCompany = "delivery/changeablecargocompanies/merchantid/@merchantId/orderlineid/@orderlineid";
    public const changeOrderCargoCompany = "lineitems/merchantid/@merchantId/packageablewith/lineitemid/@orderlineitemid";

    public const packageChangableCargoCompany ="packages/merchantid/@merchantId/packagenumber/@packagenumber/changablecargocompanies";
    public const changePackageCargoCompany ="packages/merchantid/@merchantId/packagenumber/@packagenumber/changecargocompany";

    public const getPackgableWith ="lineitems/merchantid/@merchantId/packageablewith/lineitemid/@lineitemid";

    public const packageItems ="packages/merchantid/@merchantid";
    public const unPackageItems ="packages/merchantid/@merchantid/packagenumber/@packagenumber/unpack";
    public const unpackedList ="packages/merchantid/@merchantid/status/unpacked";
    public const packageList ="packages/merchantid/@merchantid";
    
    public const getPackageCargoInfo ="packages/merchantid/packagenumber/@packagenumber";

    public const getOrderDetail ="orders/merchantid/@merchantid/ordernumber/@ordernumber";
    public const getCampings ="orders/merchantid/@merchantId/ordernumber/@orderNumber/campaigns";
    public const sendInvoiceUrl ="packages/merchantid/@merchantId/packagenumber/@packageNumber/invoice";
    public const getHepsiburadaCargoLabel ="packages/merchantid/@merchantId/packagenumber/@packageNumber/label";
    public const cancelOrderItem ="lineitems/merchantid/@merchantId/id/@lineitemid/cancelbymerchant";
    public const sendDeliveredStatus ="packages/merchantid/@merchantId/packagenumber/@packageNumber/deliver";

    /**
     * Talep işlemleri
     */
    public const awaitingActions  = "claims/awaitingaction";
    public const acceptClaim  = "claims/number/@number/accept";
    public const rejectClaim  = "claims/number/@number/reject";
    public const getPackageList  = "claims/packages";
    public const getAllClaimDetail  = "claims/merchantid/@merchantid";
    public const getClaimDetail  = "claims/merchantid/@merchantid/status/@status";
    /**
     * Muhasebe işlemleri
     */
    public const getInvoice  = "invoices/merchantid/@merchantid";

    
}
