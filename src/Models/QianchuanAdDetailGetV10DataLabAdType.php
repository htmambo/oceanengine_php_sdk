<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAdDetailGetV10DataLabAdType
{
    public const LAB_AD_QianchuanAdDetailGetV10DataLabAdType = 'LAB_AD';
    public const NOT_LAB_AD_QianchuanAdDetailGetV10DataLabAdType = 'NOT_LAB_AD';

    public const ALLOWED_VALUES = [
        self::LAB_AD_QianchuanAdDetailGetV10DataLabAdType,
        self::NOT_LAB_AD_QianchuanAdDetailGetV10DataLabAdType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAdDetailGetV10DataLabAdType', $value));
        }
        return (string) $value;
    }
}
