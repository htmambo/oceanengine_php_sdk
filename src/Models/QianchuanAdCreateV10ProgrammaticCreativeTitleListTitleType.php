<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAdCreateV10ProgrammaticCreativeTitleListTitleType
{
    public const AWEME_CAROUSEL_QianchuanAdCreateV10ProgrammaticCreativeTitleListTitleType = 'AWEME_CAROUSEL';
    public const COMMODITY_CARD_QianchuanAdCreateV10ProgrammaticCreativeTitleListTitleType = 'COMMODITY_CARD';
    public const CUSTOM_QianchuanAdCreateV10ProgrammaticCreativeTitleListTitleType = 'CUSTOM';

    public const ALLOWED_VALUES = [
        self::AWEME_CAROUSEL_QianchuanAdCreateV10ProgrammaticCreativeTitleListTitleType,
        self::COMMODITY_CARD_QianchuanAdCreateV10ProgrammaticCreativeTitleListTitleType,
        self::CUSTOM_QianchuanAdCreateV10ProgrammaticCreativeTitleListTitleType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAdCreateV10ProgrammaticCreativeTitleListTitleType', $value));
        }
        return (string) $value;
    }
}
