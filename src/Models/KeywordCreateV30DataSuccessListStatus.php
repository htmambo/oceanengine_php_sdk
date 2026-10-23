<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class KeywordCreateV30DataSuccessListStatus
{
    public const AUDITING_KeywordCreateV30DataSuccessListStatus = 'AUDITING';
    public const AUDIT_ACCEPTED_KeywordCreateV30DataSuccessListStatus = 'AUDIT_ACCEPTED';
    public const AUDIT_REJECTED_KeywordCreateV30DataSuccessListStatus = 'AUDIT_REJECTED';
    public const DELETED_KeywordCreateV30DataSuccessListStatus = 'DELETED';

    public const ALLOWED_VALUES = [
        self::AUDITING_KeywordCreateV30DataSuccessListStatus,
        self::AUDIT_ACCEPTED_KeywordCreateV30DataSuccessListStatus,
        self::AUDIT_REJECTED_KeywordCreateV30DataSuccessListStatus,
        self::DELETED_KeywordCreateV30DataSuccessListStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum KeywordCreateV30DataSuccessListStatus', $value));
        }
        return (string) $value;
    }
}
