<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class KeywordListV30DataListStatus
{
    public const AUDITING_KeywordListV30DataListStatus = 'AUDITING';
    public const AUDIT_ACCEPTED_KeywordListV30DataListStatus = 'AUDIT_ACCEPTED';
    public const AUDIT_REJECTED_KeywordListV30DataListStatus = 'AUDIT_REJECTED';
    public const DELETED_KeywordListV30DataListStatus = 'DELETED';

    public const ALLOWED_VALUES = [
        self::AUDITING_KeywordListV30DataListStatus,
        self::AUDIT_ACCEPTED_KeywordListV30DataListStatus,
        self::AUDIT_REJECTED_KeywordListV30DataListStatus,
        self::DELETED_KeywordListV30DataListStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum KeywordListV30DataListStatus', $value));
        }
        return (string) $value;
    }
}
