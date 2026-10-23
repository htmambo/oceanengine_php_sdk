<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class OpenMaterialAuditProGetV30DataStatus
{
    public const SUCCESS_OpenMaterialAuditProGetV30DataStatus = 'SUCCESS';
    public const FAILED_OpenMaterialAuditProGetV30DataStatus = 'FAILED';
    public const PENDINGSTART_OpenMaterialAuditProGetV30DataStatus = 'PENDINGSTART';
    public const RUNNING_OpenMaterialAuditProGetV30DataStatus = 'RUNNING';
    public const TERMINATED_OpenMaterialAuditProGetV30DataStatus = 'TERMINATED';

    public const ALLOWED_VALUES = [
        self::SUCCESS_OpenMaterialAuditProGetV30DataStatus,
        self::FAILED_OpenMaterialAuditProGetV30DataStatus,
        self::PENDINGSTART_OpenMaterialAuditProGetV30DataStatus,
        self::RUNNING_OpenMaterialAuditProGetV30DataStatus,
        self::TERMINATED_OpenMaterialAuditProGetV30DataStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum OpenMaterialAuditProGetV30DataStatus', $value));
        }
        return (string) $value;
    }
}
