<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class DouplusOrderListV30FilterStatus
{
    public const AUDITING_DouplusOrderListV30FilterStatus = 'AUDITING';
    public const AUDIT_PAUSE_DouplusOrderListV30FilterStatus = 'AUDIT_PAUSE';
    public const DELIVERIED_DouplusOrderListV30FilterStatus = 'DELIVERIED';
    public const DELIVERING_DouplusOrderListV30FilterStatus = 'DELIVERING';
    public const OFFLINE_AUDIT_DouplusOrderListV30FilterStatus = 'OFFLINE_AUDIT';
    public const TIME_NO_REACH_DouplusOrderListV30FilterStatus = 'TIME_NO_REACH';
    public const UNDELIVERIED_DouplusOrderListV30FilterStatus = 'UNDELIVERIED';
    public const UNPAID_DouplusOrderListV30FilterStatus = 'UNPAID';
    public const WAIT_TO_START_DouplusOrderListV30FilterStatus = 'WAIT_TO_START';

    public const ALLOWED_VALUES = [
        self::AUDITING_DouplusOrderListV30FilterStatus,
        self::AUDIT_PAUSE_DouplusOrderListV30FilterStatus,
        self::DELIVERIED_DouplusOrderListV30FilterStatus,
        self::DELIVERING_DouplusOrderListV30FilterStatus,
        self::OFFLINE_AUDIT_DouplusOrderListV30FilterStatus,
        self::TIME_NO_REACH_DouplusOrderListV30FilterStatus,
        self::UNDELIVERIED_DouplusOrderListV30FilterStatus,
        self::UNPAID_DouplusOrderListV30FilterStatus,
        self::WAIT_TO_START_DouplusOrderListV30FilterStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum DouplusOrderListV30FilterStatus', $value));
        }
        return (string) $value;
    }
}
