<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ReportAdvertiserGetV2DataListGender
{
    public const GENDER_FEMALE_ReportAdvertiserGetV2DataListGender = 'GENDER_FEMALE';
    public const GENDER_MALE_ReportAdvertiserGetV2DataListGender = 'GENDER_MALE';
    public const GENDER_UNLIMITED_ReportAdvertiserGetV2DataListGender = 'GENDER_UNLIMITED';
    public const NONE_ReportAdvertiserGetV2DataListGender = 'NONE';

    public const ALLOWED_VALUES = [
        self::GENDER_FEMALE_ReportAdvertiserGetV2DataListGender,
        self::GENDER_MALE_ReportAdvertiserGetV2DataListGender,
        self::GENDER_UNLIMITED_ReportAdvertiserGetV2DataListGender,
        self::NONE_ReportAdvertiserGetV2DataListGender,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ReportAdvertiserGetV2DataListGender', $value));
        }
        return (string) $value;
    }
}
