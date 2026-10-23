<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAdCreateV10LabAdType
{
    public const NOT_LAB_AD_QianchuanAdCreateV10LabAdType = 'NOT_LAB_AD';
    public const LAB_AD_QianchuanAdCreateV10LabAdType = 'LAB_AD';

    public const ALLOWED_VALUES = [
        self::NOT_LAB_AD_QianchuanAdCreateV10LabAdType,
        self::LAB_AD_QianchuanAdCreateV10LabAdType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAdCreateV10LabAdType', $value));
        }
        return (string) $value;
    }
}
