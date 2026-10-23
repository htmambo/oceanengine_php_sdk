<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class OcProjectToolsAudienceCreateV30DeliverySettingSettingType
{
    public const ABSOLUTE_OcProjectToolsAudienceCreateV30DeliverySettingSettingType = 'ABSOLUTE';
    public const RATIO_OcProjectToolsAudienceCreateV30DeliverySettingSettingType = 'RATIO';

    public const ALLOWED_VALUES = [
        self::ABSOLUTE_OcProjectToolsAudienceCreateV30DeliverySettingSettingType,
        self::RATIO_OcProjectToolsAudienceCreateV30DeliverySettingSettingType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum OcProjectToolsAudienceCreateV30DeliverySettingSettingType', $value));
        }
        return (string) $value;
    }
}
