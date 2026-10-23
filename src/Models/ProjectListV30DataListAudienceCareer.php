<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ProjectListV30DataListAudienceCareer
{
    public const CIVIL_SERVANTS_ProjectListV30DataListAudienceCareer = 'CIVIL_SERVANTS';
    public const COLLEGE_STUDENT_ProjectListV30DataListAudienceCareer = 'COLLEGE_STUDENT';
    public const FINANCIAL_ProjectListV30DataListAudienceCareer = 'FINANCIAL';
    public const IT_ProjectListV30DataListAudienceCareer = 'IT';
    public const MEDICAL_STAFF_ProjectListV30DataListAudienceCareer = 'MEDICAL_STAFF';
    public const TEACHER_ProjectListV30DataListAudienceCareer = 'TEACHER';

    public const ALLOWED_VALUES = [
        self::CIVIL_SERVANTS_ProjectListV30DataListAudienceCareer,
        self::COLLEGE_STUDENT_ProjectListV30DataListAudienceCareer,
        self::FINANCIAL_ProjectListV30DataListAudienceCareer,
        self::IT_ProjectListV30DataListAudienceCareer,
        self::MEDICAL_STAFF_ProjectListV30DataListAudienceCareer,
        self::TEACHER_ProjectListV30DataListAudienceCareer,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ProjectListV30DataListAudienceCareer', $value));
        }
        return (string) $value;
    }
}
