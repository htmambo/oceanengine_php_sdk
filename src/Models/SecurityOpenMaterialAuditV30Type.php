<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class SecurityOpenMaterialAuditV30Type
{
    public const VIDEO_SecurityOpenMaterialAuditV30Type = 'VIDEO';

    public const ALLOWED_VALUES = [
        self::VIDEO_SecurityOpenMaterialAuditV30Type,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum SecurityOpenMaterialAuditV30Type', $value));
        }
        return (string) $value;
    }
}
