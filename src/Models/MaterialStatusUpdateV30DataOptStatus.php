<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class MaterialStatusUpdateV30DataOptStatus
{
    public const DISABLE_MaterialStatusUpdateV30DataOptStatus = 'DISABLE';
    public const ENABLE_MaterialStatusUpdateV30DataOptStatus = 'ENABLE';

    public const ALLOWED_VALUES = [
        self::DISABLE_MaterialStatusUpdateV30DataOptStatus,
        self::ENABLE_MaterialStatusUpdateV30DataOptStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum MaterialStatusUpdateV30DataOptStatus', $value));
        }
        return (string) $value;
    }
}
