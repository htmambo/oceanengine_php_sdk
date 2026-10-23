<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ProjectCreateV30DeliverySettingPricing
{
    public const PRICING_CPC_ProjectCreateV30DeliverySettingPricing = 'PRICING_CPC';
    public const PRICING_CPM_ProjectCreateV30DeliverySettingPricing = 'PRICING_CPM';
    public const PRICING_OCPC_ProjectCreateV30DeliverySettingPricing = 'PRICING_OCPC';
    public const PRICING_OCPM_ProjectCreateV30DeliverySettingPricing = 'PRICING_OCPM';

    public const ALLOWED_VALUES = [
        self::PRICING_CPC_ProjectCreateV30DeliverySettingPricing,
        self::PRICING_CPM_ProjectCreateV30DeliverySettingPricing,
        self::PRICING_OCPC_ProjectCreateV30DeliverySettingPricing,
        self::PRICING_OCPM_ProjectCreateV30DeliverySettingPricing,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ProjectCreateV30DeliverySettingPricing', $value));
        }
        return (string) $value;
    }
}
