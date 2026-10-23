<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class SharedWalletTransactionDetailGetV30DataResultsBizType
{
    public const ADJUST_DECREASE_SharedWalletTransactionDetailGetV30DataResultsBizType = 'ADJUST_DECREASE';
    public const ADJUST_FREEZE_SharedWalletTransactionDetailGetV30DataResultsBizType = 'ADJUST_FREEZE';
    public const ADJUST_INCREASE_SharedWalletTransactionDetailGetV30DataResultsBizType = 'ADJUST_INCREASE';
    public const CREDIT_RECHARGE_SharedWalletTransactionDetailGetV30DataResultsBizType = 'CREDIT_RECHARGE';
    public const CREDIT_REFUND_SharedWalletTransactionDetailGetV30DataResultsBizType = 'CREDIT_REFUND';
    public const INIT_SharedWalletTransactionDetailGetV30DataResultsBizType = 'INIT';
    public const ORDER_PAY_SharedWalletTransactionDetailGetV30DataResultsBizType = 'ORDER_PAY';
    public const ORDER_WITHDRAW_SharedWalletTransactionDetailGetV30DataResultsBizType = 'ORDER_WITHDRAW';
    public const REFUND_FREEZE_SharedWalletTransactionDetailGetV30DataResultsBizType = 'REFUND_FREEZE';
    public const SHARED_CANCEL_RECHARGE_SharedWalletTransactionDetailGetV30DataResultsBizType = 'SHARED_CANCEL_RECHARGE';
    public const SHARED_FROZEN_REFUND_SharedWalletTransactionDetailGetV30DataResultsBizType = 'SHARED_FROZEN_REFUND';
    public const SHARED_RECHARGE_SharedWalletTransactionDetailGetV30DataResultsBizType = 'SHARED_RECHARGE';
    public const TRANSFER_SharedWalletTransactionDetailGetV30DataResultsBizType = 'TRANSFER';
    public const TRANSFER_IN_SharedWalletTransactionDetailGetV30DataResultsBizType = 'TRANSFER_IN';
    public const TRANSFER_OUT_SharedWalletTransactionDetailGetV30DataResultsBizType = 'TRANSFER_OUT';
    public const RISK_CONTROL_FREEZE_SharedWalletTransactionDetailGetV30DataResultsBizType = 'RISK_CONTROL_FREEZE';

    public const ALLOWED_VALUES = [
        self::ADJUST_DECREASE_SharedWalletTransactionDetailGetV30DataResultsBizType,
        self::ADJUST_FREEZE_SharedWalletTransactionDetailGetV30DataResultsBizType,
        self::ADJUST_INCREASE_SharedWalletTransactionDetailGetV30DataResultsBizType,
        self::CREDIT_RECHARGE_SharedWalletTransactionDetailGetV30DataResultsBizType,
        self::CREDIT_REFUND_SharedWalletTransactionDetailGetV30DataResultsBizType,
        self::INIT_SharedWalletTransactionDetailGetV30DataResultsBizType,
        self::ORDER_PAY_SharedWalletTransactionDetailGetV30DataResultsBizType,
        self::ORDER_WITHDRAW_SharedWalletTransactionDetailGetV30DataResultsBizType,
        self::REFUND_FREEZE_SharedWalletTransactionDetailGetV30DataResultsBizType,
        self::SHARED_CANCEL_RECHARGE_SharedWalletTransactionDetailGetV30DataResultsBizType,
        self::SHARED_FROZEN_REFUND_SharedWalletTransactionDetailGetV30DataResultsBizType,
        self::SHARED_RECHARGE_SharedWalletTransactionDetailGetV30DataResultsBizType,
        self::TRANSFER_SharedWalletTransactionDetailGetV30DataResultsBizType,
        self::TRANSFER_IN_SharedWalletTransactionDetailGetV30DataResultsBizType,
        self::TRANSFER_OUT_SharedWalletTransactionDetailGetV30DataResultsBizType,
        self::RISK_CONTROL_FREEZE_SharedWalletTransactionDetailGetV30DataResultsBizType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum SharedWalletTransactionDetailGetV30DataResultsBizType', $value));
        }
        return (string) $value;
    }
}
