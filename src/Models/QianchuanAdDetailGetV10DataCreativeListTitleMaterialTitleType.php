<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAdDetailGetV10DataCreativeListTitleMaterialTitleType
{
    public const AWEME_CAROUSEL_QianchuanAdDetailGetV10DataCreativeListTitleMaterialTitleType = 'AWEME_CAROUSEL';
    public const COMMODITY_CARD_QianchuanAdDetailGetV10DataCreativeListTitleMaterialTitleType = 'COMMODITY_CARD';
    public const CUSTOM_QianchuanAdDetailGetV10DataCreativeListTitleMaterialTitleType = 'CUSTOM';

    public const ALLOWED_VALUES = [
        self::AWEME_CAROUSEL_QianchuanAdDetailGetV10DataCreativeListTitleMaterialTitleType,
        self::COMMODITY_CARD_QianchuanAdDetailGetV10DataCreativeListTitleMaterialTitleType,
        self::CUSTOM_QianchuanAdDetailGetV10DataCreativeListTitleMaterialTitleType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAdDetailGetV10DataCreativeListTitleMaterialTitleType', $value));
        }
        return (string) $value;
    }
}
