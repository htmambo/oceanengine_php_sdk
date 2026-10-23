<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class DouplusOrderListV30DataOrderListOrderTaskStatus
{
    public const AUDITING_DouplusOrderListV30DataOrderListOrderTaskStatus = 'AUDITING';
    public const AUDIT_PAUSE_DouplusOrderListV30DataOrderListOrderTaskStatus = 'AUDIT_PAUSE';
    public const DELIVERIED_DouplusOrderListV30DataOrderListOrderTaskStatus = 'DELIVERIED';
    public const DELIVERING_DouplusOrderListV30DataOrderListOrderTaskStatus = 'DELIVERING';
    public const OFFLINE_AUDIT_DouplusOrderListV30DataOrderListOrderTaskStatus = 'OFFLINE_AUDIT';
    public const TIME_NO_REACH_DouplusOrderListV30DataOrderListOrderTaskStatus = 'TIME_NO_REACH';
    public const UNDELIVERIED_DouplusOrderListV30DataOrderListOrderTaskStatus = 'UNDELIVERIED';
    public const UNPAID_DouplusOrderListV30DataOrderListOrderTaskStatus = 'UNPAID';
    public const WAIT_TO_START_DouplusOrderListV30DataOrderListOrderTaskStatus = 'WAIT_TO_START';

    public const ALLOWED_VALUES = [
        self::AUDITING_DouplusOrderListV30DataOrderListOrderTaskStatus,
        self::AUDIT_PAUSE_DouplusOrderListV30DataOrderListOrderTaskStatus,
        self::DELIVERIED_DouplusOrderListV30DataOrderListOrderTaskStatus,
        self::DELIVERING_DouplusOrderListV30DataOrderListOrderTaskStatus,
        self::OFFLINE_AUDIT_DouplusOrderListV30DataOrderListOrderTaskStatus,
        self::TIME_NO_REACH_DouplusOrderListV30DataOrderListOrderTaskStatus,
        self::UNDELIVERIED_DouplusOrderListV30DataOrderListOrderTaskStatus,
        self::UNPAID_DouplusOrderListV30DataOrderListOrderTaskStatus,
        self::WAIT_TO_START_DouplusOrderListV30DataOrderListOrderTaskStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum DouplusOrderListV30DataOrderListOrderTaskStatus', $value));
        }
        return (string) $value;
    }
}
