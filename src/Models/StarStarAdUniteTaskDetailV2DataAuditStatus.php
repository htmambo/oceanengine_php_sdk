<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StarStarAdUniteTaskDetailV2DataAuditStatus
{
    public const CONFIRM_StarStarAdUniteTaskDetailV2DataAuditStatus = 'CONFIRM';
    public const CONFIRM_FAIL_StarStarAdUniteTaskDetailV2DataAuditStatus = 'CONFIRM_FAIL';
    public const PENDING_CONFIRM_StarStarAdUniteTaskDetailV2DataAuditStatus = 'PENDING_CONFIRM';

    public const ALLOWED_VALUES = [
        self::CONFIRM_StarStarAdUniteTaskDetailV2DataAuditStatus,
        self::CONFIRM_FAIL_StarStarAdUniteTaskDetailV2DataAuditStatus,
        self::PENDING_CONFIRM_StarStarAdUniteTaskDetailV2DataAuditStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StarStarAdUniteTaskDetailV2DataAuditStatus', $value));
        }
        return (string) $value;
    }
}
