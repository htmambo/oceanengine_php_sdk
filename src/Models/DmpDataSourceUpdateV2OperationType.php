<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class DmpDataSourceUpdateV2OperationType
{
    public const Enum_1_DmpDataSourceUpdateV2OperationType = 1;
    public const Enum_2_DmpDataSourceUpdateV2OperationType = 2;
    public const Enum_3_DmpDataSourceUpdateV2OperationType = 3;

    public const ALLOWED_VALUES = [
        self::Enum_1_DmpDataSourceUpdateV2OperationType,
        self::Enum_2_DmpDataSourceUpdateV2OperationType,
        self::Enum_3_DmpDataSourceUpdateV2OperationType,
    ];

    public static function isValid(int|string $value): bool
    {
        return in_array((string) $value, array_map('strval', static::ALLOWED_VALUES), true);
    }

    public static function fromValue(int|string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum DmpDataSourceUpdateV2OperationType', $value));
        }
        return (string) $value;
    }
}
