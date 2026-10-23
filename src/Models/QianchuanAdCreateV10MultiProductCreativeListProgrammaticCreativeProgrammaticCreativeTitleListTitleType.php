<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAdCreateV10MultiProductCreativeListProgrammaticCreativeProgrammaticCreativeTitleListTitleType
{
    public const AWEME_CAROUSEL_QianchuanAdCreateV10MultiProductCreativeListProgrammaticCreativeProgrammaticCreativeTitleListTitleType = 'AWEME_CAROUSEL';
    public const COMMODITY_CARD_QianchuanAdCreateV10MultiProductCreativeListProgrammaticCreativeProgrammaticCreativeTitleListTitleType = 'COMMODITY_CARD';
    public const CUSTOM_QianchuanAdCreateV10MultiProductCreativeListProgrammaticCreativeProgrammaticCreativeTitleListTitleType = 'CUSTOM';

    public const ALLOWED_VALUES = [
        self::AWEME_CAROUSEL_QianchuanAdCreateV10MultiProductCreativeListProgrammaticCreativeProgrammaticCreativeTitleListTitleType,
        self::COMMODITY_CARD_QianchuanAdCreateV10MultiProductCreativeListProgrammaticCreativeProgrammaticCreativeTitleListTitleType,
        self::CUSTOM_QianchuanAdCreateV10MultiProductCreativeListProgrammaticCreativeProgrammaticCreativeTitleListTitleType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAdCreateV10MultiProductCreativeListProgrammaticCreativeProgrammaticCreativeTitleListTitleType', $value));
        }
        return (string) $value;
    }
}
