<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ProjectCreateV30DeliverySettingBidType
{
    public const CUSTOM_ProjectCreateV30DeliverySettingBidType = 'CUSTOM';
    public const NO_BID_ProjectCreateV30DeliverySettingBidType = 'NO_BID';
    public const OPTIMAL_COST_ProjectCreateV30DeliverySettingBidType = 'OPTIMAL_COST';
    public const UPPER_CONTROL_ProjectCreateV30DeliverySettingBidType = 'UPPER_CONTROL';

    public const ALLOWED_VALUES = [
        self::CUSTOM_ProjectCreateV30DeliverySettingBidType,
        self::NO_BID_ProjectCreateV30DeliverySettingBidType,
        self::OPTIMAL_COST_ProjectCreateV30DeliverySettingBidType,
        self::UPPER_CONTROL_ProjectCreateV30DeliverySettingBidType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ProjectCreateV30DeliverySettingBidType', $value));
        }
        return (string) $value;
    }
}
