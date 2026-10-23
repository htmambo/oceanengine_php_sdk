<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StarVasGetBoostGroupListV2DataBoostGroupInfosTaskInfosAuditStatus
{
    public const AUDITING_StarVasGetBoostGroupListV2DataBoostGroupInfosTaskInfosAuditStatus = 'AUDITING';
    public const AUDIT_FAILED_StarVasGetBoostGroupListV2DataBoostGroupInfosTaskInfosAuditStatus = 'AUDIT_FAILED';
    public const AUDIT_PASS_StarVasGetBoostGroupListV2DataBoostGroupInfosTaskInfosAuditStatus = 'AUDIT_PASS';

    public const ALLOWED_VALUES = [
        self::AUDITING_StarVasGetBoostGroupListV2DataBoostGroupInfosTaskInfosAuditStatus,
        self::AUDIT_FAILED_StarVasGetBoostGroupListV2DataBoostGroupInfosTaskInfosAuditStatus,
        self::AUDIT_PASS_StarVasGetBoostGroupListV2DataBoostGroupInfosTaskInfosAuditStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StarVasGetBoostGroupListV2DataBoostGroupInfosTaskInfosAuditStatus', $value));
        }
        return (string) $value;
    }
}
