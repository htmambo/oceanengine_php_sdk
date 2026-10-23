<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanToolsEstimateAudienceV10AudienceActionScene
{
    public const APP_QianchuanToolsEstimateAudienceV10AudienceActionScene = 'APP';
    public const E_COMMERCE_QianchuanToolsEstimateAudienceV10AudienceActionScene = 'E-COMMERCE';
    public const NEWS_QianchuanToolsEstimateAudienceV10AudienceActionScene = 'NEWS';
    public const SEARCH_QianchuanToolsEstimateAudienceV10AudienceActionScene = 'SEARCH';

    public const ALLOWED_VALUES = [
        self::APP_QianchuanToolsEstimateAudienceV10AudienceActionScene,
        self::E_COMMERCE_QianchuanToolsEstimateAudienceV10AudienceActionScene,
        self::NEWS_QianchuanToolsEstimateAudienceV10AudienceActionScene,
        self::SEARCH_QianchuanToolsEstimateAudienceV10AudienceActionScene,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanToolsEstimateAudienceV10AudienceActionScene', $value));
        }
        return (string) $value;
    }
}
