<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanReportMaterialGetV10FilteringCarouselSource
{
    public const AWEME_QianchuanReportMaterialGetV10FilteringCarouselSource = 'AWEME';
    public const E_COMMERCE_QianchuanReportMaterialGetV10FilteringCarouselSource = 'E_COMMERCE';
    public const JI_CHUANG_QianchuanReportMaterialGetV10FilteringCarouselSource = 'JI_CHUANG';

    public const ALLOWED_VALUES = [
        self::AWEME_QianchuanReportMaterialGetV10FilteringCarouselSource,
        self::E_COMMERCE_QianchuanReportMaterialGetV10FilteringCarouselSource,
        self::JI_CHUANG_QianchuanReportMaterialGetV10FilteringCarouselSource,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanReportMaterialGetV10FilteringCarouselSource', $value));
        }
        return (string) $value;
    }
}
