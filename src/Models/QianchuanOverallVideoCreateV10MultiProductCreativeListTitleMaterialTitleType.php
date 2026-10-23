<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanOverallVideoCreateV10MultiProductCreativeListTitleMaterialTitleType
{
    public const COMMODITY_CARD_QianchuanOverallVideoCreateV10MultiProductCreativeListTitleMaterialTitleType = 'COMMODITY_CARD';
    public const CUSTOM_QianchuanOverallVideoCreateV10MultiProductCreativeListTitleMaterialTitleType = 'CUSTOM';

    public const ALLOWED_VALUES = [
        self::COMMODITY_CARD_QianchuanOverallVideoCreateV10MultiProductCreativeListTitleMaterialTitleType,
        self::CUSTOM_QianchuanOverallVideoCreateV10MultiProductCreativeListTitleMaterialTitleType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanOverallVideoCreateV10MultiProductCreativeListTitleMaterialTitleType', $value));
        }
        return (string) $value;
    }
}
