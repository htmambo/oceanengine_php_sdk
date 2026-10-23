<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class SecurityCreateAppealV30QuestionType
{
    public const OTHER_SecurityCreateAppealV30QuestionType = 'OTHER';
    public const RULE_NON_RECOGNITION_SecurityCreateAppealV30QuestionType = 'RULE_NON_RECOGNITION';
    public const UNCLEAR_REJECT_CODE_SecurityCreateAppealV30QuestionType = 'UNCLEAR_REJECT_CODE';

    public const ALLOWED_VALUES = [
        self::OTHER_SecurityCreateAppealV30QuestionType,
        self::RULE_NON_RECOGNITION_SecurityCreateAppealV30QuestionType,
        self::UNCLEAR_REJECT_CODE_SecurityCreateAppealV30QuestionType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum SecurityCreateAppealV30QuestionType', $value));
        }
        return (string) $value;
    }
}
