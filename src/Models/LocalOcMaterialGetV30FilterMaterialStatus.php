<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalOcMaterialGetV30FilterMaterialStatus
{
    public const EXCLUDE_DELETE_LocalOcMaterialGetV30FilterMaterialStatus = 'EXCLUDE_DELETE';
    public const NO_LIMIT_LocalOcMaterialGetV30FilterMaterialStatus = 'NO_LIMIT';
    public const OFFLINE_AUDIT_LocalOcMaterialGetV30FilterMaterialStatus = 'OFFLINE_AUDIT';

    public const ALLOWED_VALUES = [
        self::EXCLUDE_DELETE_LocalOcMaterialGetV30FilterMaterialStatus,
        self::NO_LIMIT_LocalOcMaterialGetV30FilterMaterialStatus,
        self::OFFLINE_AUDIT_LocalOcMaterialGetV30FilterMaterialStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalOcMaterialGetV30FilterMaterialStatus', $value));
        }
        return (string) $value;
    }
}
