<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAdDetailGetV10DataMultiProductCreativeListProgrammaticCreativeProgrammaticCreativeTitleListTitleType
{
    public const AWEME_CAROUSEL_QianchuanAdDetailGetV10DataMultiProductCreativeListProgrammaticCreativeProgrammaticCreativeTitleListTitleType = 'AWEME_CAROUSEL';
    public const COMMODITY_CARD_QianchuanAdDetailGetV10DataMultiProductCreativeListProgrammaticCreativeProgrammaticCreativeTitleListTitleType = 'COMMODITY_CARD';
    public const CUSTOM_QianchuanAdDetailGetV10DataMultiProductCreativeListProgrammaticCreativeProgrammaticCreativeTitleListTitleType = 'CUSTOM';

    public const ALLOWED_VALUES = [
        self::AWEME_CAROUSEL_QianchuanAdDetailGetV10DataMultiProductCreativeListProgrammaticCreativeProgrammaticCreativeTitleListTitleType,
        self::COMMODITY_CARD_QianchuanAdDetailGetV10DataMultiProductCreativeListProgrammaticCreativeProgrammaticCreativeTitleListTitleType,
        self::CUSTOM_QianchuanAdDetailGetV10DataMultiProductCreativeListProgrammaticCreativeProgrammaticCreativeTitleListTitleType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAdDetailGetV10DataMultiProductCreativeListProgrammaticCreativeProgrammaticCreativeTitleListTitleType', $value));
        }
        return (string) $value;
    }
}
