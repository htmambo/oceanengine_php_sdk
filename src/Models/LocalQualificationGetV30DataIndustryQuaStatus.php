<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalQualificationGetV30DataIndustryQuaStatus
{
    public const STATUS_CONFIRM_LocalQualificationGetV30DataIndustryQuaStatus = 'STATUS_CONFIRM';
    public const STATUS_CONFIRM_FAIL_LocalQualificationGetV30DataIndustryQuaStatus = 'STATUS_CONFIRM_FAIL';
    public const STATUS_NOT_SUBMIT_LocalQualificationGetV30DataIndustryQuaStatus = 'STATUS_NOT_SUBMIT';
    public const STATUS_PENDING_CONFIRM_LocalQualificationGetV30DataIndustryQuaStatus = 'STATUS_PENDING_CONFIRM';
    public const STATUS_WAIT_CONFIRM_LocalQualificationGetV30DataIndustryQuaStatus = 'STATUS_WAIT_CONFIRM';

    public const ALLOWED_VALUES = [
        self::STATUS_CONFIRM_LocalQualificationGetV30DataIndustryQuaStatus,
        self::STATUS_CONFIRM_FAIL_LocalQualificationGetV30DataIndustryQuaStatus,
        self::STATUS_NOT_SUBMIT_LocalQualificationGetV30DataIndustryQuaStatus,
        self::STATUS_PENDING_CONFIRM_LocalQualificationGetV30DataIndustryQuaStatus,
        self::STATUS_WAIT_CONFIRM_LocalQualificationGetV30DataIndustryQuaStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalQualificationGetV30DataIndustryQuaStatus', $value));
        }
        return (string) $value;
    }
}
