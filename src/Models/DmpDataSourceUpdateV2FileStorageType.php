<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class DmpDataSourceUpdateV2FileStorageType
{
    public const Enum_0_DmpDataSourceUpdateV2FileStorageType = 0;

    public const ALLOWED_VALUES = [
        self::Enum_0_DmpDataSourceUpdateV2FileStorageType,
    ];

    public static function isValid(int|string $value): bool
    {
        return in_array((string) $value, array_map('strval', static::ALLOWED_VALUES), true);
    }

    public static function fromValue(int|string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum DmpDataSourceUpdateV2FileStorageType', $value));
        }
        return (string) $value;
    }
}
