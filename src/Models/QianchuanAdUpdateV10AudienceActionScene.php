<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAdUpdateV10AudienceActionScene
{
    public const APP_QianchuanAdUpdateV10AudienceActionScene = 'APP';
    public const E_COMMERCE_QianchuanAdUpdateV10AudienceActionScene = 'E-COMMERCE';
    public const NEWS_QianchuanAdUpdateV10AudienceActionScene = 'NEWS';
    public const SEARCH_QianchuanAdUpdateV10AudienceActionScene = 'SEARCH';

    public const ALLOWED_VALUES = [
        self::APP_QianchuanAdUpdateV10AudienceActionScene,
        self::E_COMMERCE_QianchuanAdUpdateV10AudienceActionScene,
        self::NEWS_QianchuanAdUpdateV10AudienceActionScene,
        self::SEARCH_QianchuanAdUpdateV10AudienceActionScene,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAdUpdateV10AudienceActionScene', $value));
        }
        return (string) $value;
    }
}
