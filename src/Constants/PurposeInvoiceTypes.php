<?php

namespace Qooiz\BillingSDK\Constants;

/**
 * Class PurposeInvoiceTypes
 *
 * @package AppBundle\Constants
 */
final class PurposeInvoiceTypes
{
    public const REFILL                       = 'refill';
    public const CHARGE_OFF                   = 'charge_off';
    public const REFILL_ACCRUE                = 'refill_accrue';
    public const REFILL_PRIZE                 = 'refill_prize';
    public const REFILL_DELIVERY              = 'refill_delivery';
    public const PAYMENT                      = 'payment';
    public const PAYMENT_DELIVERY             = 'payment_delivery';
    public const PAYMENT_DELIVERY_BY_CUSTOMER = 'payment_delivery_by_customer';
    public const COMMISSION                   = 'commission';
    public const COMMISSION_HIGH_RATE_BONUSES = 'commission_high_rate_bonuses';
    public const COMMISSION_HIGH_RATE_PARTNER_REWARD = 'commission_high_rate_partner_reward';
    public const COMMISSION_DELIVERY          = 'commission_delivery';
    public const CONVERT                      = 'convert';
    public const BONUS_AWARD                  = 'bonus_award';
    public const PAYMENT_CANCEL               = 'payment_cancel';
    public const PAYMENT_COMPLETE             = 'payment_complete';
    public const ORDER_CANCEL                 = 'order_cancel';
    public const ORDER_DONE                   = 'order_done';
    public const ORDER_COMPLETE               = 'order_complete';
    public const SUSPEND                      = 'suspend';
    public const REFUND                       = 'refund';
    public const UNSUSPEND                    = 'unsuspend';
    public const BONUS_HIGH_RATE_AWARD        = 'bonus_high_rate_award';
    public const DOMAIN_NAME_REQUEST          = 'domain_name_request';

    public const F_VALUE = 'value';
    public const F_LABEL = 'label';
    public const WITHDRAWAL  = 'withdrawal';

    public const ALL_TYPES = [
        self::REFILL,
        self::CHARGE_OFF,
        self::REFILL_ACCRUE,
        self::REFILL_PRIZE,
        self::REFILL_DELIVERY,
        self::PAYMENT,
        self::PAYMENT_DELIVERY,
        self::COMMISSION,
        self::COMMISSION_HIGH_RATE_BONUSES,
        self::COMMISSION_HIGH_RATE_PARTNER_REWARD,
        self::COMMISSION_DELIVERY,
        self::CONVERT,
        self::BONUS_AWARD,
        self::PAYMENT_CANCEL,
        self::PAYMENT_COMPLETE,
        self::PAYMENT_DELIVERY_BY_CUSTOMER,
        self::ORDER_CANCEL,
        self::ORDER_COMPLETE,
        self::SUSPEND,
        self::REFUND,
        self::UNSUSPEND,
        self::ORDER_DONE,
        self::BONUS_HIGH_RATE_AWARD,
        self::DOMAIN_NAME_REQUEST,
        self::WITHDRAWAL,
    ];

    /**
     * @return array
     */
    public static function getTranslatesForPurposeInvoiceTypesCurrent() : array
    {
        return [
            [self::F_VALUE => self::PAYMENT, self::F_LABEL => trans('billing.purpose-invoice-types.payment'),],
            [self::F_VALUE => self::PAYMENT_DELIVERY_BY_CUSTOMER, self::F_LABEL => trans('billing.purpose-invoice-types.payment-delivery-by-customer'),],
            [self::F_VALUE => self::COMMISSION, self::F_LABEL => trans('billing.purpose-invoice-types.commission'),],
            [self::F_VALUE => self::COMMISSION_HIGH_RATE_BONUSES, self::F_LABEL => trans('billing.purpose-invoice-types.commission-high-rate-bonuses'),],
            [self::F_VALUE => self::COMMISSION_HIGH_RATE_PARTNER_REWARD, self::F_LABEL => trans('billing.purpose-invoice-types.commission-high-rate-partner-reward'),],
            [self::F_VALUE => self::COMMISSION_DELIVERY, self::F_LABEL => trans('billing.purpose-invoice-types.commission-delivery'),],
            [self::F_VALUE => self::PAYMENT_DELIVERY, self::F_LABEL => trans('billing.purpose-invoice-types.payment-delivery'),],
            [self::F_VALUE => self::REFILL, self::F_LABEL => trans('billing.purpose-invoice-types.refill'),],
            [self::F_VALUE => self::CHARGE_OFF, self::F_LABEL => trans('billing.purpose-invoice-types.charge-off'),],
            [
                self::F_VALUE => self::DOMAIN_NAME_REQUEST,
                self::F_LABEL => trans('billing.purpose-invoice-types.domain-name-request'),
            ],
            [self::F_VALUE => self::WITHDRAWAL, self::F_LABEL => trans('billing.purpose-invoice-types.withdrawal'),],
        ];
    }
    /**
     * @return array
     */
    public static function getTranslatesForPurposeInvoiceTypesAwaiting() : array
    {
        return [
            [self::F_VALUE => self::PAYMENT, self::F_LABEL => trans('billing.purpose-invoice-types.payment'),],
            [
                self::F_VALUE => self::PAYMENT_DELIVERY_BY_CUSTOMER,
                self::F_LABEL => trans('billing.purpose-invoice-types.payment-delivery-by-customer'),
            ],
            [self::F_VALUE => self::REFILL, self::F_LABEL => trans('billing.purpose-invoice-types.refill'),],
            [self::F_VALUE => self::WITHDRAWAL, self::F_LABEL => trans('billing.purpose-invoice-types.withdrawal'),],
        ];
    }
    /**
     * @return array
     */
    public static function getTranslatesForPurposeInvoiceTypesWriteOff() : array
    {
        return [
            [self::F_VALUE => self::COMMISSION, self::F_LABEL => trans('billing.purpose-invoice-types.commission'),],
            [self::F_VALUE => self::COMMISSION_DELIVERY, self::F_LABEL => trans('billing.purpose-invoice-types.commission-delivery'),],
            [self::F_VALUE => self::COMMISSION_HIGH_RATE_BONUSES, self::F_LABEL => trans('billing.purpose-invoice-types.commission-high-rate-bonuses'),],
            [self::F_VALUE => self::COMMISSION_HIGH_RATE_PARTNER_REWARD, self::F_LABEL => trans('billing.purpose-invoice-types.commission-high-rate-partner-reward'),],
            [self::F_VALUE => self::REFUND, self::F_LABEL => trans('billing.purpose-invoice-types.refund'),],
            [self::F_VALUE => self::REFILL_DELIVERY, self::F_LABEL => trans('billing.purpose-invoice-types.refill-delivery'),],
            [self::F_VALUE => self::CHARGE_OFF, self::F_LABEL => trans('billing.purpose-invoice-types.charge-off'),],
            [
                self::F_VALUE => self::PAYMENT_DELIVERY,
                self::F_LABEL => trans('billing.purpose-invoice-types.payment-delivery'),
            ],
            [
                self::F_VALUE => self::DOMAIN_NAME_REQUEST,
                self::F_LABEL => trans('billing.purpose-invoice-types.domain-name-request'),
            ],
            [self::F_VALUE => self::WITHDRAWAL, self::F_LABEL => trans('billing.purpose-invoice-types.withdrawal'),],
        ];
    }
}
