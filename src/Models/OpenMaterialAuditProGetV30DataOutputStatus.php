<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class OpenMaterialAuditProGetV30DataOutputStatus
{
    public const AUDITRESULT__PASS_OpenMaterialAuditProGetV30DataOutputStatus = 'AUDITRESULT__PASS';
    public const AUDITRESULT__REJECT_OpenMaterialAuditProGetV30DataOutputStatus = 'AUDITRESULT__REJECT';

    public const ALLOWED_VALUES = [
        self::AUDITRESULT__PASS_OpenMaterialAuditProGetV30DataOutputStatus,
        self::AUDITRESULT__REJECT_OpenMaterialAuditProGetV30DataOutputStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum OpenMaterialAuditProGetV30DataOutputStatus', $value));
        }
        return (string) $value;
    }
}
