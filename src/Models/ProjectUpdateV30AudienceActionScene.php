<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ProjectUpdateV30AudienceActionScene
{
    public const AD_ProjectUpdateV30AudienceActionScene = 'AD';
    public const APP_ProjectUpdateV30AudienceActionScene = 'APP';
    public const E_COMMERCE_ProjectUpdateV30AudienceActionScene = 'E-COMMERCE';
    public const NEWS_ProjectUpdateV30AudienceActionScene = 'NEWS';
    public const SEARCH_ProjectUpdateV30AudienceActionScene = 'SEARCH';

    public const ALLOWED_VALUES = [
        self::AD_ProjectUpdateV30AudienceActionScene,
        self::APP_ProjectUpdateV30AudienceActionScene,
        self::E_COMMERCE_ProjectUpdateV30AudienceActionScene,
        self::NEWS_ProjectUpdateV30AudienceActionScene,
        self::SEARCH_ProjectUpdateV30AudienceActionScene,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ProjectUpdateV30AudienceActionScene', $value));
        }
        return (string) $value;
    }
}
