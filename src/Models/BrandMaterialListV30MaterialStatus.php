<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BrandMaterialListV30MaterialStatus
{
    public const AUDITING_BrandMaterialListV30MaterialStatus = 'AUDITING';
    public const AUDITPASS_BrandMaterialListV30MaterialStatus = 'AUDITPASS';
    public const AUDIT_FAILED_BrandMaterialListV30MaterialStatus = 'AUDIT_FAILED';
    public const AUDIT_SUCCESS_BrandMaterialListV30MaterialStatus = 'AUDIT_SUCCESS';
    public const DRAFT_BrandMaterialListV30MaterialStatus = 'DRAFT';
    public const IS_DEL_BrandMaterialListV30MaterialStatus = 'IS_DEL';
    public const PAUSE_BrandMaterialListV30MaterialStatus = 'PAUSE';
    public const REAUDITING_BrandMaterialListV30MaterialStatus = 'REAUDITING';
    public const UNKNOWN_BrandMaterialListV30MaterialStatus = 'UNKNOWN';

    public const ALLOWED_VALUES = [
        self::AUDITING_BrandMaterialListV30MaterialStatus,
        self::AUDITPASS_BrandMaterialListV30MaterialStatus,
        self::AUDIT_FAILED_BrandMaterialListV30MaterialStatus,
        self::AUDIT_SUCCESS_BrandMaterialListV30MaterialStatus,
        self::DRAFT_BrandMaterialListV30MaterialStatus,
        self::IS_DEL_BrandMaterialListV30MaterialStatus,
        self::PAUSE_BrandMaterialListV30MaterialStatus,
        self::REAUDITING_BrandMaterialListV30MaterialStatus,
        self::UNKNOWN_BrandMaterialListV30MaterialStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BrandMaterialListV30MaterialStatus', $value));
        }
        return (string) $value;
    }
}
