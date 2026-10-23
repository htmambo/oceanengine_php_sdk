<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BrandMaterialUpdateV30CreativeDisplayMode
{
    public const CTR_BrandMaterialUpdateV30CreativeDisplayMode = 'CTR';
    public const RANDOM_BrandMaterialUpdateV30CreativeDisplayMode = 'RANDOM';

    public const ALLOWED_VALUES = [
        self::CTR_BrandMaterialUpdateV30CreativeDisplayMode,
        self::RANDOM_BrandMaterialUpdateV30CreativeDisplayMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BrandMaterialUpdateV30CreativeDisplayMode', $value));
        }
        return (string) $value;
    }
}
