<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsEstimateAudienceV2Carrier
{
    public const UNICOM_ToolsEstimateAudienceV2Carrier = 'UNICOM';
    public const TELCOM_ToolsEstimateAudienceV2Carrier = 'TELCOM';
    public const MOBILE_ToolsEstimateAudienceV2Carrier = 'MOBILE';

    public const ALLOWED_VALUES = [
        self::UNICOM_ToolsEstimateAudienceV2Carrier,
        self::TELCOM_ToolsEstimateAudienceV2Carrier,
        self::MOBILE_ToolsEstimateAudienceV2Carrier,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsEstimateAudienceV2Carrier', $value));
        }
        return (string) $value;
    }
}
