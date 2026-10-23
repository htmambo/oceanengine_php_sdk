<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StarVasGetBoostItemGroupDetailV2DataTaskInfoStatus
{
    public const AUDITING_StarVasGetBoostItemGroupDetailV2DataTaskInfoStatus = 'AUDITING';
    public const CANCEL_StarVasGetBoostItemGroupDetailV2DataTaskInfoStatus = 'CANCEL';
    public const CLOSE_StarVasGetBoostItemGroupDetailV2DataTaskInfoStatus = 'CLOSE';
    public const DOING_StarVasGetBoostItemGroupDetailV2DataTaskInfoStatus = 'DOING';
    public const FAIL_CREATE_StarVasGetBoostItemGroupDetailV2DataTaskInfoStatus = 'FAIL_CREATE';
    public const FINISH_StarVasGetBoostItemGroupDetailV2DataTaskInfoStatus = 'FINISH';
    public const PREPARE_StarVasGetBoostItemGroupDetailV2DataTaskInfoStatus = 'PREPARE';
    public const REJECT_AUDIT_StarVasGetBoostItemGroupDetailV2DataTaskInfoStatus = 'REJECT_AUDIT';
    public const SETTLE_StarVasGetBoostItemGroupDetailV2DataTaskInfoStatus = 'SETTLE';
    public const WAIT_CANCEL_StarVasGetBoostItemGroupDetailV2DataTaskInfoStatus = 'WAIT_CANCEL';

    public const ALLOWED_VALUES = [
        self::AUDITING_StarVasGetBoostItemGroupDetailV2DataTaskInfoStatus,
        self::CANCEL_StarVasGetBoostItemGroupDetailV2DataTaskInfoStatus,
        self::CLOSE_StarVasGetBoostItemGroupDetailV2DataTaskInfoStatus,
        self::DOING_StarVasGetBoostItemGroupDetailV2DataTaskInfoStatus,
        self::FAIL_CREATE_StarVasGetBoostItemGroupDetailV2DataTaskInfoStatus,
        self::FINISH_StarVasGetBoostItemGroupDetailV2DataTaskInfoStatus,
        self::PREPARE_StarVasGetBoostItemGroupDetailV2DataTaskInfoStatus,
        self::REJECT_AUDIT_StarVasGetBoostItemGroupDetailV2DataTaskInfoStatus,
        self::SETTLE_StarVasGetBoostItemGroupDetailV2DataTaskInfoStatus,
        self::WAIT_CANCEL_StarVasGetBoostItemGroupDetailV2DataTaskInfoStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StarVasGetBoostItemGroupDetailV2DataTaskInfoStatus', $value));
        }
        return (string) $value;
    }
}
