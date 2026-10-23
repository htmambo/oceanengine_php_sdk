<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class SecurityScoreViolationEventGetV30FilteringStatus
{
    public const APPEAL_SecurityScoreViolationEventGetV30FilteringStatus = 'APPEAL';
    public const FAILAPPEAL_SecurityScoreViolationEventGetV30FilteringStatus = 'FAILAPPEAL';
    public const ONAPPEAL_SecurityScoreViolationEventGetV30FilteringStatus = 'ONAPPEAL';
    public const TIMEOUT_SecurityScoreViolationEventGetV30FilteringStatus = 'TIMEOUT';
    public const VALID_SecurityScoreViolationEventGetV30FilteringStatus = 'VALID';

    public const ALLOWED_VALUES = [
        self::APPEAL_SecurityScoreViolationEventGetV30FilteringStatus,
        self::FAILAPPEAL_SecurityScoreViolationEventGetV30FilteringStatus,
        self::ONAPPEAL_SecurityScoreViolationEventGetV30FilteringStatus,
        self::TIMEOUT_SecurityScoreViolationEventGetV30FilteringStatus,
        self::VALID_SecurityScoreViolationEventGetV30FilteringStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum SecurityScoreViolationEventGetV30FilteringStatus', $value));
        }
        return (string) $value;
    }
}
