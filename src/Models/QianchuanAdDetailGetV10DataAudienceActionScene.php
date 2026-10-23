<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAdDetailGetV10DataAudienceActionScene
{
    public const APP_QianchuanAdDetailGetV10DataAudienceActionScene = 'APP';
    public const E_COMMERCE_QianchuanAdDetailGetV10DataAudienceActionScene = 'E-COMMERCE';
    public const NEWS_QianchuanAdDetailGetV10DataAudienceActionScene = 'NEWS';
    public const SEARCH_QianchuanAdDetailGetV10DataAudienceActionScene = 'SEARCH';

    public const ALLOWED_VALUES = [
        self::APP_QianchuanAdDetailGetV10DataAudienceActionScene,
        self::E_COMMERCE_QianchuanAdDetailGetV10DataAudienceActionScene,
        self::NEWS_QianchuanAdDetailGetV10DataAudienceActionScene,
        self::SEARCH_QianchuanAdDetailGetV10DataAudienceActionScene,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAdDetailGetV10DataAudienceActionScene', $value));
        }
        return (string) $value;
    }
}
