<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BusinessPlatformCompanyInfoGetV30DataCompanyInfoStatus
{
    public const EXPIRED_BusinessPlatformCompanyInfoGetV30DataCompanyInfoStatus = 'EXPIRED';
    public const FAILED_BusinessPlatformCompanyInfoGetV30DataCompanyInfoStatus = 'FAILED';
    public const NOT_STARTED_BusinessPlatformCompanyInfoGetV30DataCompanyInfoStatus = 'NOT_STARTED';
    public const PROCESSING_BusinessPlatformCompanyInfoGetV30DataCompanyInfoStatus = 'PROCESSING';
    public const SUCCESS_BusinessPlatformCompanyInfoGetV30DataCompanyInfoStatus = 'SUCCESS';
    public const WAITING_BusinessPlatformCompanyInfoGetV30DataCompanyInfoStatus = 'WAITING';

    public const ALLOWED_VALUES = [
        self::EXPIRED_BusinessPlatformCompanyInfoGetV30DataCompanyInfoStatus,
        self::FAILED_BusinessPlatformCompanyInfoGetV30DataCompanyInfoStatus,
        self::NOT_STARTED_BusinessPlatformCompanyInfoGetV30DataCompanyInfoStatus,
        self::PROCESSING_BusinessPlatformCompanyInfoGetV30DataCompanyInfoStatus,
        self::SUCCESS_BusinessPlatformCompanyInfoGetV30DataCompanyInfoStatus,
        self::WAITING_BusinessPlatformCompanyInfoGetV30DataCompanyInfoStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BusinessPlatformCompanyInfoGetV30DataCompanyInfoStatus', $value));
        }
        return (string) $value;
    }
}
