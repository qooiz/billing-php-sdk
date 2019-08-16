<?php

namespace Qooiz\BillingSDK\Constants;

/**
 * Class InvoicesListConstants
 *
 * @package Qooiz\BillingSDK\Constants
 */
class InvoicesListConstants
{
    public const DEFAULT_LIMIT = 10;
    public const MAX_LIMIT = 100;
    public const INVOICES_LIST_SECTION_NAME = 'invoices_list';
    public const PAGES_SECTION_NAME = 'pages';
    public const F_SORT_FIELD           = 'sortField';
    public const F_SORT_DIRECTION       = 'sortDir';
    public const F_DATE_FROM            = 'dateFrom';
    public const F_DATE_TO              = 'dateTo';
    public const F_PURPOSE_INVOICE_TYPE = 'purposeInvoicesTypeSelect';
    public const F_PAGE = 'page';
    public const TARGET_CURRENCY_CODE = 'target_currency_code';
    public const SOURCE_CURRENCY_CODE = 'source_currency_code';
    public const IS_PROCESSED = 'is_processed';
    public const F_DATE = 'date';
    public const F_CURRENCY_CODE = 'currency_code';
    public const F_INVOICE_TYPE = 'invoiceType';
    public const F_OPERATION_TYPE = 'operation_type';

    public const TYPE_FUTURE_TRANSFER = 'future_transfer';
    public const TYPE_CANCELLED = 'cancel';
    public const TYPE_TRANSFER = 'transfer';
    public const SORT_DIRECTION_ASC = 'asc';
    public const TYPE_COMPLETE = 'complete';
    public const STATUS_ID = 'id';
    public const STATUS_LABEL = 'label';

    /**
     * @return array|\Illuminate\Contracts\Translation\Translator|null|string
     */
    public static function getInvoiceTypeCancelledWithTranslations()
    {
        return trans('billing.invoice-type-cancel');
    }
}
