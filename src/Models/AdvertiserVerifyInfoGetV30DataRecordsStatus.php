<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AdvertiserVerifyInfoGetV30DataRecordsStatus
{
    public const EXPIRE_AdvertiserVerifyInfoGetV30DataRecordsStatus = 'EXPIRE';
    public const FAIL_AdvertiserVerifyInfoGetV30DataRecordsStatus = 'FAIL';
    public const SUCCESS_AdvertiserVerifyInfoGetV30DataRecordsStatus = 'SUCCESS';
    public const UNDER_REVIEWING_AdvertiserVerifyInfoGetV30DataRecordsStatus = 'UNDER_REVIEWING';
    public const WAITING_AdvertiserVerifyInfoGetV30DataRecordsStatus = 'WAITING';

    public const ALLOWED_VALUES = [
        self::EXPIRE_AdvertiserVerifyInfoGetV30DataRecordsStatus,
        self::FAIL_AdvertiserVerifyInfoGetV30DataRecordsStatus,
        self::SUCCESS_AdvertiserVerifyInfoGetV30DataRecordsStatus,
        self::UNDER_REVIEWING_AdvertiserVerifyInfoGetV30DataRecordsStatus,
        self::WAITING_AdvertiserVerifyInfoGetV30DataRecordsStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AdvertiserVerifyInfoGetV30DataRecordsStatus', $value));
        }
        return (string) $value;
    }
}
