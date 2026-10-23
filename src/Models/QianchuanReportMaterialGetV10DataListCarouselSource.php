<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanReportMaterialGetV10DataListCarouselSource
{
    public const AWEME_QianchuanReportMaterialGetV10DataListCarouselSource = 'AWEME';
    public const E_COMMERCE_QianchuanReportMaterialGetV10DataListCarouselSource = 'E_COMMERCE';
    public const JI_CHUANG_QianchuanReportMaterialGetV10DataListCarouselSource = 'JI_CHUANG';

    public const ALLOWED_VALUES = [
        self::AWEME_QianchuanReportMaterialGetV10DataListCarouselSource,
        self::E_COMMERCE_QianchuanReportMaterialGetV10DataListCarouselSource,
        self::JI_CHUANG_QianchuanReportMaterialGetV10DataListCarouselSource,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanReportMaterialGetV10DataListCarouselSource', $value));
        }
        return (string) $value;
    }
}
