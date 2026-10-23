<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class SecurityScoreDisposalInfoGetV30FilteringDisposalAction
{
    public const ACCOUNTCLEAR_SecurityScoreDisposalInfoGetV30FilteringDisposalAction = 'ACCOUNTCLEAR';
    public const CLEAR_SecurityScoreDisposalInfoGetV30FilteringDisposalAction = 'CLEAR';

    public const ALLOWED_VALUES = [
        self::ACCOUNTCLEAR_SecurityScoreDisposalInfoGetV30FilteringDisposalAction,
        self::CLEAR_SecurityScoreDisposalInfoGetV30FilteringDisposalAction,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum SecurityScoreDisposalInfoGetV30FilteringDisposalAction', $value));
        }
        return (string) $value;
    }
}
