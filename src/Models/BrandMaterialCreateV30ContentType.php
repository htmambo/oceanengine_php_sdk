<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BrandMaterialCreateV30ContentType
{
    public const LANDING_PAGE_BrandMaterialCreateV30ContentType = 'LANDING_PAGE';
    public const NATIVE_BrandMaterialCreateV30ContentType = 'NATIVE';

    public const ALLOWED_VALUES = [
        self::LANDING_PAGE_BrandMaterialCreateV30ContentType,
        self::NATIVE_BrandMaterialCreateV30ContentType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BrandMaterialCreateV30ContentType', $value));
        }
        return (string) $value;
    }
}
