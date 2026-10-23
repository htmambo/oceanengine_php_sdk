<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class OpenMaterialAuditProSubmitV30BusinessType
{
    public const AD_OpenMaterialAuditProSubmitV30BusinessType = 'AD';
    public const QIANCHUAN_OpenMaterialAuditProSubmitV30BusinessType = 'QIANCHUAN';
    public const LOCALLIFE_OpenMaterialAuditProSubmitV30BusinessType = 'LOCALLIFE';

    public const ALLOWED_VALUES = [
        self::AD_OpenMaterialAuditProSubmitV30BusinessType,
        self::QIANCHUAN_OpenMaterialAuditProSubmitV30BusinessType,
        self::LOCALLIFE_OpenMaterialAuditProSubmitV30BusinessType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum OpenMaterialAuditProSubmitV30BusinessType', $value));
        }
        return (string) $value;
    }
}
