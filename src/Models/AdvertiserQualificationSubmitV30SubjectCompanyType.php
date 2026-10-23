<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AdvertiserQualificationSubmitV30SubjectCompanyType
{
    public const COMPANY_AdvertiserQualificationSubmitV30SubjectCompanyType = 'COMPANY';
    public const INDIVIDUAL_AdvertiserQualificationSubmitV30SubjectCompanyType = 'INDIVIDUAL';

    public const ALLOWED_VALUES = [
        self::COMPANY_AdvertiserQualificationSubmitV30SubjectCompanyType,
        self::INDIVIDUAL_AdvertiserQualificationSubmitV30SubjectCompanyType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AdvertiserQualificationSubmitV30SubjectCompanyType', $value));
        }
        return (string) $value;
    }
}
