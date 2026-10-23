<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class SecurityScoreViolationEventGetV30FilteringIllegalType
{
    public const BACKLINKGENERAL_SecurityScoreViolationEventGetV30FilteringIllegalType = 'BACKLINKGENERAL';
    public const BACKLINKSERIOUS_SecurityScoreViolationEventGetV30FilteringIllegalType = 'BACKLINKSERIOUS';
    public const CRITICAL_SecurityScoreViolationEventGetV30FilteringIllegalType = 'CRITICAL';
    public const GENERAL_SecurityScoreViolationEventGetV30FilteringIllegalType = 'GENERAL';
    public const MINOR_SecurityScoreViolationEventGetV30FilteringIllegalType = 'MINOR';
    public const ONECLASS_SecurityScoreViolationEventGetV30FilteringIllegalType = 'ONECLASS';
    public const SERIOUS_SecurityScoreViolationEventGetV30FilteringIllegalType = 'SERIOUS';
    public const TWOTHREECLASS_SecurityScoreViolationEventGetV30FilteringIllegalType = 'TWOTHREECLASS';

    public const ALLOWED_VALUES = [
        self::BACKLINKGENERAL_SecurityScoreViolationEventGetV30FilteringIllegalType,
        self::BACKLINKSERIOUS_SecurityScoreViolationEventGetV30FilteringIllegalType,
        self::CRITICAL_SecurityScoreViolationEventGetV30FilteringIllegalType,
        self::GENERAL_SecurityScoreViolationEventGetV30FilteringIllegalType,
        self::MINOR_SecurityScoreViolationEventGetV30FilteringIllegalType,
        self::ONECLASS_SecurityScoreViolationEventGetV30FilteringIllegalType,
        self::SERIOUS_SecurityScoreViolationEventGetV30FilteringIllegalType,
        self::TWOTHREECLASS_SecurityScoreViolationEventGetV30FilteringIllegalType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum SecurityScoreViolationEventGetV30FilteringIllegalType', $value));
        }
        return (string) $value;
    }
}
