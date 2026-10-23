<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsEstimateAudienceV2DeviceType
{
    public const PAD_ToolsEstimateAudienceV2DeviceType = 'PAD';
    public const MOBILE_ToolsEstimateAudienceV2DeviceType = 'MOBILE';

    public const ALLOWED_VALUES = [
        self::PAD_ToolsEstimateAudienceV2DeviceType,
        self::MOBILE_ToolsEstimateAudienceV2DeviceType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsEstimateAudienceV2DeviceType', $value));
        }
        return (string) $value;
    }
}
