<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalQualificationGetV30DataSubjectCheckType
{
    public const COMPANY_LocalQualificationGetV30DataSubjectCheckType = 'COMPANY';
    public const GOVERNMENT_LocalQualificationGetV30DataSubjectCheckType = 'GOVERNMENT';
    public const HK_MACAO_TAIWAN_LocalQualificationGetV30DataSubjectCheckType = 'HK_MACAO_TAIWAN';
    public const INDIVIDUAL_LocalQualificationGetV30DataSubjectCheckType = 'INDIVIDUAL';
    public const OTHERS_LocalQualificationGetV30DataSubjectCheckType = 'OTHERS';
    public const OVERSEA_LocalQualificationGetV30DataSubjectCheckType = 'OVERSEA';
    public const SELF_EMPLOY_LocalQualificationGetV30DataSubjectCheckType = 'SELF_EMPLOY';

    public const ALLOWED_VALUES = [
        self::COMPANY_LocalQualificationGetV30DataSubjectCheckType,
        self::GOVERNMENT_LocalQualificationGetV30DataSubjectCheckType,
        self::HK_MACAO_TAIWAN_LocalQualificationGetV30DataSubjectCheckType,
        self::INDIVIDUAL_LocalQualificationGetV30DataSubjectCheckType,
        self::OTHERS_LocalQualificationGetV30DataSubjectCheckType,
        self::OVERSEA_LocalQualificationGetV30DataSubjectCheckType,
        self::SELF_EMPLOY_LocalQualificationGetV30DataSubjectCheckType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalQualificationGetV30DataSubjectCheckType', $value));
        }
        return (string) $value;
    }
}
