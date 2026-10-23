<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAdUpdateV10MultiProductCreativeListProgrammaticCreativeProgrammaticCreativeTitleListTitleType
{
    public const AWEME_CAROUSEL_QianchuanAdUpdateV10MultiProductCreativeListProgrammaticCreativeProgrammaticCreativeTitleListTitleType = 'AWEME_CAROUSEL';
    public const COMMODITY_CARD_QianchuanAdUpdateV10MultiProductCreativeListProgrammaticCreativeProgrammaticCreativeTitleListTitleType = 'COMMODITY_CARD';
    public const CUSTOM_QianchuanAdUpdateV10MultiProductCreativeListProgrammaticCreativeProgrammaticCreativeTitleListTitleType = 'CUSTOM';

    public const ALLOWED_VALUES = [
        self::AWEME_CAROUSEL_QianchuanAdUpdateV10MultiProductCreativeListProgrammaticCreativeProgrammaticCreativeTitleListTitleType,
        self::COMMODITY_CARD_QianchuanAdUpdateV10MultiProductCreativeListProgrammaticCreativeProgrammaticCreativeTitleListTitleType,
        self::CUSTOM_QianchuanAdUpdateV10MultiProductCreativeListProgrammaticCreativeProgrammaticCreativeTitleListTitleType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAdUpdateV10MultiProductCreativeListProgrammaticCreativeProgrammaticCreativeTitleListTitleType', $value));
        }
        return (string) $value;
    }
}
