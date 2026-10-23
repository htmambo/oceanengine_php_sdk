<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AdvertiserVerifyInfoGetV30DataRecordsCheckType
{
    public const COMPANY_AdvertiserVerifyInfoGetV30DataRecordsCheckType = 'COMPANY';
    public const GOVERNMENT_AdvertiserVerifyInfoGetV30DataRecordsCheckType = 'GOVERNMENT';
    public const HK_MACAO_TAIWAN_AdvertiserVerifyInfoGetV30DataRecordsCheckType = 'HK_MACAO_TAIWAN';
    public const INDIVIDUAL_AdvertiserVerifyInfoGetV30DataRecordsCheckType = 'INDIVIDUAL';
    public const OTHERS_AdvertiserVerifyInfoGetV30DataRecordsCheckType = 'OTHERS';
    public const OVERSEA_AdvertiserVerifyInfoGetV30DataRecordsCheckType = 'OVERSEA';
    public const SELF_EMPLOY_AdvertiserVerifyInfoGetV30DataRecordsCheckType = 'SELF_EMPLOY';

    public const ALLOWED_VALUES = [
        self::COMPANY_AdvertiserVerifyInfoGetV30DataRecordsCheckType,
        self::GOVERNMENT_AdvertiserVerifyInfoGetV30DataRecordsCheckType,
        self::HK_MACAO_TAIWAN_AdvertiserVerifyInfoGetV30DataRecordsCheckType,
        self::INDIVIDUAL_AdvertiserVerifyInfoGetV30DataRecordsCheckType,
        self::OTHERS_AdvertiserVerifyInfoGetV30DataRecordsCheckType,
        self::OVERSEA_AdvertiserVerifyInfoGetV30DataRecordsCheckType,
        self::SELF_EMPLOY_AdvertiserVerifyInfoGetV30DataRecordsCheckType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AdvertiserVerifyInfoGetV30DataRecordsCheckType', $value));
        }
        return (string) $value;
    }
}
