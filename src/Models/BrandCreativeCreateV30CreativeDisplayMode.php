<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BrandCreativeCreateV30CreativeDisplayMode
{
    public const CTR_BrandCreativeCreateV30CreativeDisplayMode = 'CTR';
    public const RANDOM_BrandCreativeCreateV30CreativeDisplayMode = 'RANDOM';

    public const ALLOWED_VALUES = [
        self::CTR_BrandCreativeCreateV30CreativeDisplayMode,
        self::RANDOM_BrandCreativeCreateV30CreativeDisplayMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BrandCreativeCreateV30CreativeDisplayMode', $value));
        }
        return (string) $value;
    }
}
