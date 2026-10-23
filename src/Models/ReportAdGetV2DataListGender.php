<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ReportAdGetV2DataListGender
{
    public const GENDER_FEMALE_ReportAdGetV2DataListGender = 'GENDER_FEMALE';
    public const GENDER_MALE_ReportAdGetV2DataListGender = 'GENDER_MALE';
    public const GENDER_UNLIMITED_ReportAdGetV2DataListGender = 'GENDER_UNLIMITED';
    public const NONE_ReportAdGetV2DataListGender = 'NONE';

    public const ALLOWED_VALUES = [
        self::GENDER_FEMALE_ReportAdGetV2DataListGender,
        self::GENDER_MALE_ReportAdGetV2DataListGender,
        self::GENDER_UNLIMITED_ReportAdGetV2DataListGender,
        self::NONE_ReportAdGetV2DataListGender,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ReportAdGetV2DataListGender', $value));
        }
        return (string) $value;
    }
}
