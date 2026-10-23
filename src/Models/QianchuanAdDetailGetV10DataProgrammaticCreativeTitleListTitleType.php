<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAdDetailGetV10DataProgrammaticCreativeTitleListTitleType
{
    public const AWEME_CAROUSEL_QianchuanAdDetailGetV10DataProgrammaticCreativeTitleListTitleType = 'AWEME_CAROUSEL';
    public const COMMODITY_CARD_QianchuanAdDetailGetV10DataProgrammaticCreativeTitleListTitleType = 'COMMODITY_CARD';
    public const CUSTOM_QianchuanAdDetailGetV10DataProgrammaticCreativeTitleListTitleType = 'CUSTOM';

    public const ALLOWED_VALUES = [
        self::AWEME_CAROUSEL_QianchuanAdDetailGetV10DataProgrammaticCreativeTitleListTitleType,
        self::COMMODITY_CARD_QianchuanAdDetailGetV10DataProgrammaticCreativeTitleListTitleType,
        self::CUSTOM_QianchuanAdDetailGetV10DataProgrammaticCreativeTitleListTitleType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAdDetailGetV10DataProgrammaticCreativeTitleListTitleType', $value));
        }
        return (string) $value;
    }
}
