<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class PrepayChargeGenerateRemittanceCodeCreateV30ContractInfoDeliveryType
{
    public const BIDDING_PrepayChargeGenerateRemittanceCodeCreateV30ContractInfoDeliveryType = 'BIDDING';
    public const BRAND_PrepayChargeGenerateRemittanceCodeCreateV30ContractInfoDeliveryType = 'BRAND';
    public const GENERAL_PrepayChargeGenerateRemittanceCodeCreateV30ContractInfoDeliveryType = 'GENERAL';

    public const ALLOWED_VALUES = [
        self::BIDDING_PrepayChargeGenerateRemittanceCodeCreateV30ContractInfoDeliveryType,
        self::BRAND_PrepayChargeGenerateRemittanceCodeCreateV30ContractInfoDeliveryType,
        self::GENERAL_PrepayChargeGenerateRemittanceCodeCreateV30ContractInfoDeliveryType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum PrepayChargeGenerateRemittanceCodeCreateV30ContractInfoDeliveryType', $value));
        }
        return (string) $value;
    }
}
