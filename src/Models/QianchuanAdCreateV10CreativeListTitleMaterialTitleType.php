<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAdCreateV10CreativeListTitleMaterialTitleType
{
    public const AWEME_CAROUSEL_QianchuanAdCreateV10CreativeListTitleMaterialTitleType = 'AWEME_CAROUSEL';
    public const COMMODITY_CARD_QianchuanAdCreateV10CreativeListTitleMaterialTitleType = 'COMMODITY_CARD';
    public const CUSTOM_QianchuanAdCreateV10CreativeListTitleMaterialTitleType = 'CUSTOM';

    public const ALLOWED_VALUES = [
        self::AWEME_CAROUSEL_QianchuanAdCreateV10CreativeListTitleMaterialTitleType,
        self::COMMODITY_CARD_QianchuanAdCreateV10CreativeListTitleMaterialTitleType,
        self::CUSTOM_QianchuanAdCreateV10CreativeListTitleMaterialTitleType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAdCreateV10CreativeListTitleMaterialTitleType', $value));
        }
        return (string) $value;
    }
}
