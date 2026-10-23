<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanCarouselGetV10DataCarouselsImageMode
{
    public const CAROUSEL_QianchuanCarouselGetV10DataCarouselsImageMode = 'CAROUSEL';

    public const ALLOWED_VALUES = [
        self::CAROUSEL_QianchuanCarouselGetV10DataCarouselsImageMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanCarouselGetV10DataCarouselsImageMode', $value));
        }
        return (string) $value;
    }
}
