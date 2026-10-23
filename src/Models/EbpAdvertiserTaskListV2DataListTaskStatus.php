<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class EbpAdvertiserTaskListV2DataListTaskStatus
{
    public const EXECUTING_EbpAdvertiserTaskListV2DataListTaskStatus = 'EXECUTING';
    public const COMPLETED_EbpAdvertiserTaskListV2DataListTaskStatus = 'COMPLETED';
    public const FAILED_EbpAdvertiserTaskListV2DataListTaskStatus = 'FAILED';
    public const EXPIRED_EbpAdvertiserTaskListV2DataListTaskStatus = 'EXPIRED';

    public const ALLOWED_VALUES = [
        self::EXECUTING_EbpAdvertiserTaskListV2DataListTaskStatus,
        self::COMPLETED_EbpAdvertiserTaskListV2DataListTaskStatus,
        self::FAILED_EbpAdvertiserTaskListV2DataListTaskStatus,
        self::EXPIRED_EbpAdvertiserTaskListV2DataListTaskStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum EbpAdvertiserTaskListV2DataListTaskStatus', $value));
        }
        return (string) $value;
    }
}
