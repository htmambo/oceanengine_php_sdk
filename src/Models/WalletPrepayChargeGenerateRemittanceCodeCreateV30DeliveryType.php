<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class WalletPrepayChargeGenerateRemittanceCodeCreateV30DeliveryType
{
    public const BIDDING_WalletPrepayChargeGenerateRemittanceCodeCreateV30DeliveryType = 'BIDDING';
    public const BRAND_WalletPrepayChargeGenerateRemittanceCodeCreateV30DeliveryType = 'BRAND';
    public const GENERAL_WalletPrepayChargeGenerateRemittanceCodeCreateV30DeliveryType = 'GENERAL';

    public const ALLOWED_VALUES = [
        self::BIDDING_WalletPrepayChargeGenerateRemittanceCodeCreateV30DeliveryType,
        self::BRAND_WalletPrepayChargeGenerateRemittanceCodeCreateV30DeliveryType,
        self::GENERAL_WalletPrepayChargeGenerateRemittanceCodeCreateV30DeliveryType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum WalletPrepayChargeGenerateRemittanceCodeCreateV30DeliveryType', $value));
        }
        return (string) $value;
    }
}
