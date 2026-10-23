<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BrandMaterialListV30DataMaterialsMaterialStatus
{
    public const AUDITING_BrandMaterialListV30DataMaterialsMaterialStatus = 'AUDITING';
    public const AUDITPASS_BrandMaterialListV30DataMaterialsMaterialStatus = 'AUDITPASS';
    public const AUDIT_FAILED_BrandMaterialListV30DataMaterialsMaterialStatus = 'AUDIT_FAILED';
    public const DRAFT_BrandMaterialListV30DataMaterialsMaterialStatus = 'DRAFT';
    public const IS_DEL_BrandMaterialListV30DataMaterialsMaterialStatus = 'IS_DEL';
    public const PAUSE_BrandMaterialListV30DataMaterialsMaterialStatus = 'PAUSE';
    public const REAUDITING_BrandMaterialListV30DataMaterialsMaterialStatus = 'REAUDITING';
    public const UNKNOWN_BrandMaterialListV30DataMaterialsMaterialStatus = 'UNKNOWN';

    public const ALLOWED_VALUES = [
        self::AUDITING_BrandMaterialListV30DataMaterialsMaterialStatus,
        self::AUDITPASS_BrandMaterialListV30DataMaterialsMaterialStatus,
        self::AUDIT_FAILED_BrandMaterialListV30DataMaterialsMaterialStatus,
        self::DRAFT_BrandMaterialListV30DataMaterialsMaterialStatus,
        self::IS_DEL_BrandMaterialListV30DataMaterialsMaterialStatus,
        self::PAUSE_BrandMaterialListV30DataMaterialsMaterialStatus,
        self::REAUDITING_BrandMaterialListV30DataMaterialsMaterialStatus,
        self::UNKNOWN_BrandMaterialListV30DataMaterialsMaterialStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BrandMaterialListV30DataMaterialsMaterialStatus', $value));
        }
        return (string) $value;
    }
}
