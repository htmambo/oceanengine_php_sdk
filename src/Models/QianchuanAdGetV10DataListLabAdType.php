<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAdGetV10DataListLabAdType
{
    public const LAB_AD_QianchuanAdGetV10DataListLabAdType = 'LAB_AD';
    public const NOT_LAB_AD_QianchuanAdGetV10DataListLabAdType = 'NOT_LAB_AD';

    public const ALLOWED_VALUES = [
        self::LAB_AD_QianchuanAdGetV10DataListLabAdType,
        self::NOT_LAB_AD_QianchuanAdGetV10DataListLabAdType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAdGetV10DataListLabAdType', $value));
        }
        return (string) $value;
    }
}
