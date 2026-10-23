<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class SecurityScoreDisposalInfoGetV30DataDisposalInfoListDisposalAction
{
    public const ACCOUNTCLEAR_SecurityScoreDisposalInfoGetV30DataDisposalInfoListDisposalAction = 'ACCOUNTCLEAR';
    public const CLEAR_SecurityScoreDisposalInfoGetV30DataDisposalInfoListDisposalAction = 'CLEAR';

    public const ALLOWED_VALUES = [
        self::ACCOUNTCLEAR_SecurityScoreDisposalInfoGetV30DataDisposalInfoListDisposalAction,
        self::CLEAR_SecurityScoreDisposalInfoGetV30DataDisposalInfoListDisposalAction,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum SecurityScoreDisposalInfoGetV30DataDisposalInfoListDisposalAction', $value));
        }
        return (string) $value;
    }
}
