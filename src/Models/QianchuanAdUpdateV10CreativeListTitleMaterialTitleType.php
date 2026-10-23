<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAdUpdateV10CreativeListTitleMaterialTitleType
{
    public const AWEME_CAROUSEL_QianchuanAdUpdateV10CreativeListTitleMaterialTitleType = 'AWEME_CAROUSEL';
    public const COMMODITY_CARD_QianchuanAdUpdateV10CreativeListTitleMaterialTitleType = 'COMMODITY_CARD';
    public const CUSTOM_QianchuanAdUpdateV10CreativeListTitleMaterialTitleType = 'CUSTOM';

    public const ALLOWED_VALUES = [
        self::AWEME_CAROUSEL_QianchuanAdUpdateV10CreativeListTitleMaterialTitleType,
        self::COMMODITY_CARD_QianchuanAdUpdateV10CreativeListTitleMaterialTitleType,
        self::CUSTOM_QianchuanAdUpdateV10CreativeListTitleMaterialTitleType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAdUpdateV10CreativeListTitleMaterialTitleType', $value));
        }
        return (string) $value;
    }
}
