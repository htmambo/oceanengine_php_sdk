<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AdvertiserQualificationGetV30DataSubjectCheckType
{
    public const COMPANY_AdvertiserQualificationGetV30DataSubjectCheckType = 'COMPANY';
    public const GOVERNMENT_AdvertiserQualificationGetV30DataSubjectCheckType = 'GOVERNMENT';
    public const HK_MACAO_TAIWAN_AdvertiserQualificationGetV30DataSubjectCheckType = 'HK_MACAO_TAIWAN';
    public const INDIVIDUAL_AdvertiserQualificationGetV30DataSubjectCheckType = 'INDIVIDUAL';
    public const OTHERS_AdvertiserQualificationGetV30DataSubjectCheckType = 'OTHERS';
    public const OVERSEA_AdvertiserQualificationGetV30DataSubjectCheckType = 'OVERSEA';
    public const SELF_EMPLOY_AdvertiserQualificationGetV30DataSubjectCheckType = 'SELF_EMPLOY';

    public const ALLOWED_VALUES = [
        self::COMPANY_AdvertiserQualificationGetV30DataSubjectCheckType,
        self::GOVERNMENT_AdvertiserQualificationGetV30DataSubjectCheckType,
        self::HK_MACAO_TAIWAN_AdvertiserQualificationGetV30DataSubjectCheckType,
        self::INDIVIDUAL_AdvertiserQualificationGetV30DataSubjectCheckType,
        self::OTHERS_AdvertiserQualificationGetV30DataSubjectCheckType,
        self::OVERSEA_AdvertiserQualificationGetV30DataSubjectCheckType,
        self::SELF_EMPLOY_AdvertiserQualificationGetV30DataSubjectCheckType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AdvertiserQualificationGetV30DataSubjectCheckType', $value));
        }
        return (string) $value;
    }
}
