<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StarVasGetBoostGroupListV2DataBoostGroupInfosStatus
{
    public const AUDITING_StarVasGetBoostGroupListV2DataBoostGroupInfosStatus = 'AUDITING';
    public const CANCEL_StarVasGetBoostGroupListV2DataBoostGroupInfosStatus = 'CANCEL';
    public const CLOSE_StarVasGetBoostGroupListV2DataBoostGroupInfosStatus = 'CLOSE';
    public const DOING_StarVasGetBoostGroupListV2DataBoostGroupInfosStatus = 'DOING';
    public const FAIL_CREATE_StarVasGetBoostGroupListV2DataBoostGroupInfosStatus = 'FAIL_CREATE';
    public const FINISH_StarVasGetBoostGroupListV2DataBoostGroupInfosStatus = 'FINISH';
    public const PREPARE_StarVasGetBoostGroupListV2DataBoostGroupInfosStatus = 'PREPARE';
    public const REJECT_AUDIT_StarVasGetBoostGroupListV2DataBoostGroupInfosStatus = 'REJECT_AUDIT';
    public const SETTLE_StarVasGetBoostGroupListV2DataBoostGroupInfosStatus = 'SETTLE';
    public const WAIT_CANCEL_StarVasGetBoostGroupListV2DataBoostGroupInfosStatus = 'WAIT_CANCEL';

    public const ALLOWED_VALUES = [
        self::AUDITING_StarVasGetBoostGroupListV2DataBoostGroupInfosStatus,
        self::CANCEL_StarVasGetBoostGroupListV2DataBoostGroupInfosStatus,
        self::CLOSE_StarVasGetBoostGroupListV2DataBoostGroupInfosStatus,
        self::DOING_StarVasGetBoostGroupListV2DataBoostGroupInfosStatus,
        self::FAIL_CREATE_StarVasGetBoostGroupListV2DataBoostGroupInfosStatus,
        self::FINISH_StarVasGetBoostGroupListV2DataBoostGroupInfosStatus,
        self::PREPARE_StarVasGetBoostGroupListV2DataBoostGroupInfosStatus,
        self::REJECT_AUDIT_StarVasGetBoostGroupListV2DataBoostGroupInfosStatus,
        self::SETTLE_StarVasGetBoostGroupListV2DataBoostGroupInfosStatus,
        self::WAIT_CANCEL_StarVasGetBoostGroupListV2DataBoostGroupInfosStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StarVasGetBoostGroupListV2DataBoostGroupInfosStatus', $value));
        }
        return (string) $value;
    }
}
