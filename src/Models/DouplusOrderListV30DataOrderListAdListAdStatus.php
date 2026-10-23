<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class DouplusOrderListV30DataOrderListAdListAdStatus
{
    public const AUDITING_DouplusOrderListV30DataOrderListAdListAdStatus = 'AUDITING';
    public const AUDIT_PAUSE_DouplusOrderListV30DataOrderListAdListAdStatus = 'AUDIT_PAUSE';
    public const DELIVERIED_DouplusOrderListV30DataOrderListAdListAdStatus = 'DELIVERIED';
    public const DELIVERING_DouplusOrderListV30DataOrderListAdListAdStatus = 'DELIVERING';
    public const OFFLINE_AUDIT_DouplusOrderListV30DataOrderListAdListAdStatus = 'OFFLINE_AUDIT';
    public const TIME_NO_REACH_DouplusOrderListV30DataOrderListAdListAdStatus = 'TIME_NO_REACH';
    public const UNDELIVERIED_DouplusOrderListV30DataOrderListAdListAdStatus = 'UNDELIVERIED';
    public const UNPAID_DouplusOrderListV30DataOrderListAdListAdStatus = 'UNPAID';
    public const WAIT_TO_START_DouplusOrderListV30DataOrderListAdListAdStatus = 'WAIT_TO_START';

    public const ALLOWED_VALUES = [
        self::AUDITING_DouplusOrderListV30DataOrderListAdListAdStatus,
        self::AUDIT_PAUSE_DouplusOrderListV30DataOrderListAdListAdStatus,
        self::DELIVERIED_DouplusOrderListV30DataOrderListAdListAdStatus,
        self::DELIVERING_DouplusOrderListV30DataOrderListAdListAdStatus,
        self::OFFLINE_AUDIT_DouplusOrderListV30DataOrderListAdListAdStatus,
        self::TIME_NO_REACH_DouplusOrderListV30DataOrderListAdListAdStatus,
        self::UNDELIVERIED_DouplusOrderListV30DataOrderListAdListAdStatus,
        self::UNPAID_DouplusOrderListV30DataOrderListAdListAdStatus,
        self::WAIT_TO_START_DouplusOrderListV30DataOrderListAdListAdStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum DouplusOrderListV30DataOrderListAdListAdStatus', $value));
        }
        return (string) $value;
    }
}
