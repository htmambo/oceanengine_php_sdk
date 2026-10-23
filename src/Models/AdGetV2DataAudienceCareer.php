<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AdGetV2DataAudienceCareer
{
    public const MEDICAL_STAFF_AdGetV2DataAudienceCareer = 'MEDICAL_STAFF';
    public const CIVIL_SERVANTS_AdGetV2DataAudienceCareer = 'CIVIL_SERVANTS';
    public const COLLEGE_STUDENT_AdGetV2DataAudienceCareer = 'COLLEGE_STUDENT';
    public const FINANCIAL_AdGetV2DataAudienceCareer = 'FINANCIAL';
    public const TEACHER_AdGetV2DataAudienceCareer = 'TEACHER';
    public const IT_AdGetV2DataAudienceCareer = 'IT';

    public const ALLOWED_VALUES = [
        self::MEDICAL_STAFF_AdGetV2DataAudienceCareer,
        self::CIVIL_SERVANTS_AdGetV2DataAudienceCareer,
        self::COLLEGE_STUDENT_AdGetV2DataAudienceCareer,
        self::FINANCIAL_AdGetV2DataAudienceCareer,
        self::TEACHER_AdGetV2DataAudienceCareer,
        self::IT_AdGetV2DataAudienceCareer,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AdGetV2DataAudienceCareer', $value));
        }
        return (string) $value;
    }
}
