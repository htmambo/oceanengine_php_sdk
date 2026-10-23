<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsBidSuggestV2Career
{
    public const MEDICAL_STAFF_ToolsBidSuggestV2Career = 'MEDICAL_STAFF';
    public const CIVIL_SERVANTS_ToolsBidSuggestV2Career = 'CIVIL_SERVANTS';
    public const COLLEGE_STUDENT_ToolsBidSuggestV2Career = 'COLLEGE_STUDENT';
    public const FINANCIAL_ToolsBidSuggestV2Career = 'FINANCIAL';
    public const TEACHER_ToolsBidSuggestV2Career = 'TEACHER';
    public const IT_ToolsBidSuggestV2Career = 'IT';

    public const ALLOWED_VALUES = [
        self::MEDICAL_STAFF_ToolsBidSuggestV2Career,
        self::CIVIL_SERVANTS_ToolsBidSuggestV2Career,
        self::COLLEGE_STUDENT_ToolsBidSuggestV2Career,
        self::FINANCIAL_ToolsBidSuggestV2Career,
        self::TEACHER_ToolsBidSuggestV2Career,
        self::IT_ToolsBidSuggestV2Career,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsBidSuggestV2Career', $value));
        }
        return (string) $value;
    }
}
