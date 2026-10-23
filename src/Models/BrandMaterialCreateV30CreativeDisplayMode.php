<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BrandMaterialCreateV30CreativeDisplayMode
{
    public const CTR_BrandMaterialCreateV30CreativeDisplayMode = 'CTR';
    public const RANDOM_BrandMaterialCreateV30CreativeDisplayMode = 'RANDOM';

    public const ALLOWED_VALUES = [
        self::CTR_BrandMaterialCreateV30CreativeDisplayMode,
        self::RANDOM_BrandMaterialCreateV30CreativeDisplayMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BrandMaterialCreateV30CreativeDisplayMode', $value));
        }
        return (string) $value;
    }
}
