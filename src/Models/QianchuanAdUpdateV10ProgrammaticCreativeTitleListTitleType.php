<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAdUpdateV10ProgrammaticCreativeTitleListTitleType
{
    public const AWEME_CAROUSEL_QianchuanAdUpdateV10ProgrammaticCreativeTitleListTitleType = 'AWEME_CAROUSEL';
    public const COMMODITY_CARD_QianchuanAdUpdateV10ProgrammaticCreativeTitleListTitleType = 'COMMODITY_CARD';
    public const CUSTOM_QianchuanAdUpdateV10ProgrammaticCreativeTitleListTitleType = 'CUSTOM';

    public const ALLOWED_VALUES = [
        self::AWEME_CAROUSEL_QianchuanAdUpdateV10ProgrammaticCreativeTitleListTitleType,
        self::COMMODITY_CARD_QianchuanAdUpdateV10ProgrammaticCreativeTitleListTitleType,
        self::CUSTOM_QianchuanAdUpdateV10ProgrammaticCreativeTitleListTitleType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAdUpdateV10ProgrammaticCreativeTitleListTitleType', $value));
        }
        return (string) $value;
    }
}
