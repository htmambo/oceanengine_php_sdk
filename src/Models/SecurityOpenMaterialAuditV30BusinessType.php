<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class SecurityOpenMaterialAuditV30BusinessType
{
    public const AD_SecurityOpenMaterialAuditV30BusinessType = 'AD';
    public const QIAN_CHUAN_SecurityOpenMaterialAuditV30BusinessType = 'QIAN_CHUAN';
    public const LOCAL_LIFE_SecurityOpenMaterialAuditV30BusinessType = 'LOCAL_LIFE';

    public const ALLOWED_VALUES = [
        self::AD_SecurityOpenMaterialAuditV30BusinessType,
        self::QIAN_CHUAN_SecurityOpenMaterialAuditV30BusinessType,
        self::LOCAL_LIFE_SecurityOpenMaterialAuditV30BusinessType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum SecurityOpenMaterialAuditV30BusinessType', $value));
        }
        return (string) $value;
    }
}
