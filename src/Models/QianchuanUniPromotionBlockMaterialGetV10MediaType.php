<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanUniPromotionBlockMaterialGetV10MediaType
{
    public const VIDEO_QianchuanUniPromotionBlockMaterialGetV10MediaType = 'VIDEO';
    public const CAROUSEL_QianchuanUniPromotionBlockMaterialGetV10MediaType = 'CAROUSEL';

    public const ALLOWED_VALUES = [
        self::VIDEO_QianchuanUniPromotionBlockMaterialGetV10MediaType,
        self::CAROUSEL_QianchuanUniPromotionBlockMaterialGetV10MediaType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanUniPromotionBlockMaterialGetV10MediaType', $value));
        }
        return (string) $value;
    }
}
