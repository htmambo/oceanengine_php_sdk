<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAdCreateV10AudienceActionScene
{
    public const APP_QianchuanAdCreateV10AudienceActionScene = 'APP';
    public const E_COMMERCE_QianchuanAdCreateV10AudienceActionScene = 'E-COMMERCE';
    public const NEWS_QianchuanAdCreateV10AudienceActionScene = 'NEWS';
    public const SEARCH_QianchuanAdCreateV10AudienceActionScene = 'SEARCH';

    public const ALLOWED_VALUES = [
        self::APP_QianchuanAdCreateV10AudienceActionScene,
        self::E_COMMERCE_QianchuanAdCreateV10AudienceActionScene,
        self::NEWS_QianchuanAdCreateV10AudienceActionScene,
        self::SEARCH_QianchuanAdCreateV10AudienceActionScene,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAdCreateV10AudienceActionScene', $value));
        }
        return (string) $value;
    }
}
