<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StdProjectUpdateV30AudienceActionScene
{
    public const AD_StdProjectUpdateV30AudienceActionScene = 'AD';
    public const APP_StdProjectUpdateV30AudienceActionScene = 'APP';
    public const E_COMMERCE_StdProjectUpdateV30AudienceActionScene = 'E-COMMERCE';
    public const NEWS_StdProjectUpdateV30AudienceActionScene = 'NEWS';
    public const SEARCH_StdProjectUpdateV30AudienceActionScene = 'SEARCH';

    public const ALLOWED_VALUES = [
        self::AD_StdProjectUpdateV30AudienceActionScene,
        self::APP_StdProjectUpdateV30AudienceActionScene,
        self::E_COMMERCE_StdProjectUpdateV30AudienceActionScene,
        self::NEWS_StdProjectUpdateV30AudienceActionScene,
        self::SEARCH_StdProjectUpdateV30AudienceActionScene,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StdProjectUpdateV30AudienceActionScene', $value));
        }
        return (string) $value;
    }
}
