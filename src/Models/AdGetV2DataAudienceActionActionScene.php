<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AdGetV2DataAudienceActionActionScene
{
    public const APP_AdGetV2DataAudienceActionActionScene = 'APP';
    public const SEARCH_AdGetV2DataAudienceActionActionScene = 'SEARCH';
    public const AD_AdGetV2DataAudienceActionActionScene = 'AD';
    public const E_COMMERCE_AdGetV2DataAudienceActionActionScene = 'E-COMMERCE';
    public const NEWS_AdGetV2DataAudienceActionActionScene = 'NEWS';

    public const ALLOWED_VALUES = [
        self::APP_AdGetV2DataAudienceActionActionScene,
        self::SEARCH_AdGetV2DataAudienceActionActionScene,
        self::AD_AdGetV2DataAudienceActionActionScene,
        self::E_COMMERCE_AdGetV2DataAudienceActionActionScene,
        self::NEWS_AdGetV2DataAudienceActionActionScene,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AdGetV2DataAudienceActionActionScene', $value));
        }
        return (string) $value;
    }
}
