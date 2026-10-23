<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ProjectListV30DataListAudienceActionScene
{
    public const AD_ProjectListV30DataListAudienceActionScene = 'AD';
    public const APP_ProjectListV30DataListAudienceActionScene = 'APP';
    public const E_COMMERCE_ProjectListV30DataListAudienceActionScene = 'E-COMMERCE';
    public const NEWS_ProjectListV30DataListAudienceActionScene = 'NEWS';
    public const SEARCH_ProjectListV30DataListAudienceActionScene = 'SEARCH';

    public const ALLOWED_VALUES = [
        self::AD_ProjectListV30DataListAudienceActionScene,
        self::APP_ProjectListV30DataListAudienceActionScene,
        self::E_COMMERCE_ProjectListV30DataListAudienceActionScene,
        self::NEWS_ProjectListV30DataListAudienceActionScene,
        self::SEARCH_ProjectListV30DataListAudienceActionScene,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ProjectListV30DataListAudienceActionScene', $value));
        }
        return (string) $value;
    }
}
