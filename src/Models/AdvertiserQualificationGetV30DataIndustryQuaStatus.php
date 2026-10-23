<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AdvertiserQualificationGetV30DataIndustryQuaStatus
{
    public const STATUS_CONFIRM_AdvertiserQualificationGetV30DataIndustryQuaStatus = 'STATUS_CONFIRM';
    public const STATUS_CONFIRM_FAIL_AdvertiserQualificationGetV30DataIndustryQuaStatus = 'STATUS_CONFIRM_FAIL';
    public const STATUS_NOT_SUBMIT_AdvertiserQualificationGetV30DataIndustryQuaStatus = 'STATUS_NOT_SUBMIT';
    public const STATUS_PENDING_CONFIRM_AdvertiserQualificationGetV30DataIndustryQuaStatus = 'STATUS_PENDING_CONFIRM';
    public const STATUS_WAIT_CONFIRM_AdvertiserQualificationGetV30DataIndustryQuaStatus = 'STATUS_WAIT_CONFIRM';

    public const ALLOWED_VALUES = [
        self::STATUS_CONFIRM_AdvertiserQualificationGetV30DataIndustryQuaStatus,
        self::STATUS_CONFIRM_FAIL_AdvertiserQualificationGetV30DataIndustryQuaStatus,
        self::STATUS_NOT_SUBMIT_AdvertiserQualificationGetV30DataIndustryQuaStatus,
        self::STATUS_PENDING_CONFIRM_AdvertiserQualificationGetV30DataIndustryQuaStatus,
        self::STATUS_WAIT_CONFIRM_AdvertiserQualificationGetV30DataIndustryQuaStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AdvertiserQualificationGetV30DataIndustryQuaStatus', $value));
        }
        return (string) $value;
    }
}
