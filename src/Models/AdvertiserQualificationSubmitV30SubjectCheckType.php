<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AdvertiserQualificationSubmitV30SubjectCheckType
{
    public const COMPANY_AdvertiserQualificationSubmitV30SubjectCheckType = 'COMPANY';
    public const GOVERNMENT_AdvertiserQualificationSubmitV30SubjectCheckType = 'GOVERNMENT';
    public const HK_MACAO_TAIWAN_AdvertiserQualificationSubmitV30SubjectCheckType = 'HK_MACAO_TAIWAN';
    public const INDIVIDUAL_AdvertiserQualificationSubmitV30SubjectCheckType = 'INDIVIDUAL';
    public const OTHERS_AdvertiserQualificationSubmitV30SubjectCheckType = 'OTHERS';
    public const OVERSEA_AdvertiserQualificationSubmitV30SubjectCheckType = 'OVERSEA';
    public const SELF_EMPLOY_AdvertiserQualificationSubmitV30SubjectCheckType = 'SELF_EMPLOY';

    public const ALLOWED_VALUES = [
        self::COMPANY_AdvertiserQualificationSubmitV30SubjectCheckType,
        self::GOVERNMENT_AdvertiserQualificationSubmitV30SubjectCheckType,
        self::HK_MACAO_TAIWAN_AdvertiserQualificationSubmitV30SubjectCheckType,
        self::INDIVIDUAL_AdvertiserQualificationSubmitV30SubjectCheckType,
        self::OTHERS_AdvertiserQualificationSubmitV30SubjectCheckType,
        self::OVERSEA_AdvertiserQualificationSubmitV30SubjectCheckType,
        self::SELF_EMPLOY_AdvertiserQualificationSubmitV30SubjectCheckType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AdvertiserQualificationSubmitV30SubjectCheckType', $value));
        }
        return (string) $value;
    }
}
