<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanCarouselGetV10DataCarouselsSource
{
    public const E_COMMERCE_QianchuanCarouselGetV10DataCarouselsSource = 'E_COMMERCE';
    public const JI_CHUANG_QianchuanCarouselGetV10DataCarouselsSource = 'JI_CHUANG';

    public const ALLOWED_VALUES = [
        self::E_COMMERCE_QianchuanCarouselGetV10DataCarouselsSource,
        self::JI_CHUANG_QianchuanCarouselGetV10DataCarouselsSource,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanCarouselGetV10DataCarouselsSource', $value));
        }
        return (string) $value;
    }
}
