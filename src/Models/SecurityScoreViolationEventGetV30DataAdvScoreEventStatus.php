<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class SecurityScoreViolationEventGetV30DataAdvScoreEventStatus
{
    public const APPEAL_SecurityScoreViolationEventGetV30DataAdvScoreEventStatus = 'APPEAL';
    public const APPEALDISABLED_SecurityScoreViolationEventGetV30DataAdvScoreEventStatus = 'APPEALDISABLED';
    public const FAILAPPEAL_SecurityScoreViolationEventGetV30DataAdvScoreEventStatus = 'FAILAPPEAL';
    public const ONAPPEAL_SecurityScoreViolationEventGetV30DataAdvScoreEventStatus = 'ONAPPEAL';
    public const TIMEOUT_SecurityScoreViolationEventGetV30DataAdvScoreEventStatus = 'TIMEOUT';
    public const VALID_SecurityScoreViolationEventGetV30DataAdvScoreEventStatus = 'VALID';

    public const ALLOWED_VALUES = [
        self::APPEAL_SecurityScoreViolationEventGetV30DataAdvScoreEventStatus,
        self::APPEALDISABLED_SecurityScoreViolationEventGetV30DataAdvScoreEventStatus,
        self::FAILAPPEAL_SecurityScoreViolationEventGetV30DataAdvScoreEventStatus,
        self::ONAPPEAL_SecurityScoreViolationEventGetV30DataAdvScoreEventStatus,
        self::TIMEOUT_SecurityScoreViolationEventGetV30DataAdvScoreEventStatus,
        self::VALID_SecurityScoreViolationEventGetV30DataAdvScoreEventStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum SecurityScoreViolationEventGetV30DataAdvScoreEventStatus', $value));
        }
        return (string) $value;
    }
}
