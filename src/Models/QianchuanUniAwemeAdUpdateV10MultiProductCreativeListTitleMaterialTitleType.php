<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanUniAwemeAdUpdateV10MultiProductCreativeListTitleMaterialTitleType
{
    public const COMMODITY_CARD_QianchuanUniAwemeAdUpdateV10MultiProductCreativeListTitleMaterialTitleType = 'COMMODITY_CARD';
    public const CUSTOM_QianchuanUniAwemeAdUpdateV10MultiProductCreativeListTitleMaterialTitleType = 'CUSTOM';

    public const ALLOWED_VALUES = [
        self::COMMODITY_CARD_QianchuanUniAwemeAdUpdateV10MultiProductCreativeListTitleMaterialTitleType,
        self::CUSTOM_QianchuanUniAwemeAdUpdateV10MultiProductCreativeListTitleMaterialTitleType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanUniAwemeAdUpdateV10MultiProductCreativeListTitleMaterialTitleType', $value));
        }
        return (string) $value;
    }
}
