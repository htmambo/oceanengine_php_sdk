<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class SecurityScoreViolationEventGetV30DataAdvScoreEventIllegalType
{
    public const BACKLINKGENERAL_SecurityScoreViolationEventGetV30DataAdvScoreEventIllegalType = 'BACKLINKGENERAL';
    public const BACKLINKSERIOUS_SecurityScoreViolationEventGetV30DataAdvScoreEventIllegalType = 'BACKLINKSERIOUS';
    public const CRITICAL_SecurityScoreViolationEventGetV30DataAdvScoreEventIllegalType = 'CRITICAL';
    public const GENERAL_SecurityScoreViolationEventGetV30DataAdvScoreEventIllegalType = 'GENERAL';
    public const MINOR_SecurityScoreViolationEventGetV30DataAdvScoreEventIllegalType = 'MINOR';
    public const ONECLASS_SecurityScoreViolationEventGetV30DataAdvScoreEventIllegalType = 'ONECLASS';
    public const SERIOUS_SecurityScoreViolationEventGetV30DataAdvScoreEventIllegalType = 'SERIOUS';
    public const TWOTHREECLASS_SecurityScoreViolationEventGetV30DataAdvScoreEventIllegalType = 'TWOTHREECLASS';

    public const ALLOWED_VALUES = [
        self::BACKLINKGENERAL_SecurityScoreViolationEventGetV30DataAdvScoreEventIllegalType,
        self::BACKLINKSERIOUS_SecurityScoreViolationEventGetV30DataAdvScoreEventIllegalType,
        self::CRITICAL_SecurityScoreViolationEventGetV30DataAdvScoreEventIllegalType,
        self::GENERAL_SecurityScoreViolationEventGetV30DataAdvScoreEventIllegalType,
        self::MINOR_SecurityScoreViolationEventGetV30DataAdvScoreEventIllegalType,
        self::ONECLASS_SecurityScoreViolationEventGetV30DataAdvScoreEventIllegalType,
        self::SERIOUS_SecurityScoreViolationEventGetV30DataAdvScoreEventIllegalType,
        self::TWOTHREECLASS_SecurityScoreViolationEventGetV30DataAdvScoreEventIllegalType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum SecurityScoreViolationEventGetV30DataAdvScoreEventIllegalType', $value));
        }
        return (string) $value;
    }
}
