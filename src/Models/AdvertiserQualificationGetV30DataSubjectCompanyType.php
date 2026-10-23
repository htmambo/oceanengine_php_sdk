<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AdvertiserQualificationGetV30DataSubjectCompanyType
{
    public const COMPANY_AdvertiserQualificationGetV30DataSubjectCompanyType = 'COMPANY';
    public const INDIVIDUAL_AdvertiserQualificationGetV30DataSubjectCompanyType = 'INDIVIDUAL';

    public const ALLOWED_VALUES = [
        self::COMPANY_AdvertiserQualificationGetV30DataSubjectCompanyType,
        self::INDIVIDUAL_AdvertiserQualificationGetV30DataSubjectCompanyType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AdvertiserQualificationGetV30DataSubjectCompanyType', $value));
        }
        return (string) $value;
    }
}
