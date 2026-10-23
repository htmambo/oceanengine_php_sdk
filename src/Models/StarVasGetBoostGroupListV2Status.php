<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StarVasGetBoostGroupListV2Status
{
    public const AUDITING_StarVasGetBoostGroupListV2Status = 'AUDITING';
    public const CANCEL_StarVasGetBoostGroupListV2Status = 'CANCEL';
    public const CLOSE_StarVasGetBoostGroupListV2Status = 'CLOSE';
    public const DOING_StarVasGetBoostGroupListV2Status = 'DOING';
    public const FAIL_CREATE_StarVasGetBoostGroupListV2Status = 'FAIL_CREATE';
    public const FINISH_StarVasGetBoostGroupListV2Status = 'FINISH';
    public const PREPARE_StarVasGetBoostGroupListV2Status = 'PREPARE';
    public const REJECT_AUDIT_StarVasGetBoostGroupListV2Status = 'REJECT_AUDIT';
    public const SETTLE_StarVasGetBoostGroupListV2Status = 'SETTLE';
    public const WAIT_CANCEL_StarVasGetBoostGroupListV2Status = 'WAIT_CANCEL';

    public const ALLOWED_VALUES = [
        self::AUDITING_StarVasGetBoostGroupListV2Status,
        self::CANCEL_StarVasGetBoostGroupListV2Status,
        self::CLOSE_StarVasGetBoostGroupListV2Status,
        self::DOING_StarVasGetBoostGroupListV2Status,
        self::FAIL_CREATE_StarVasGetBoostGroupListV2Status,
        self::FINISH_StarVasGetBoostGroupListV2Status,
        self::PREPARE_StarVasGetBoostGroupListV2Status,
        self::REJECT_AUDIT_StarVasGetBoostGroupListV2Status,
        self::SETTLE_StarVasGetBoostGroupListV2Status,
        self::WAIT_CANCEL_StarVasGetBoostGroupListV2Status,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StarVasGetBoostGroupListV2Status', $value));
        }
        return (string) $value;
    }
}
