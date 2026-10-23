<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalAwemeAuthListV30DataInvitationsStatus
{
    public const AUTHRIZED_LocalAwemeAuthListV30DataInvitationsStatus = 'AUTHRIZED';
    public const AUTHRIZING_LocalAwemeAuthListV30DataInvitationsStatus = 'AUTHRIZING';
    public const INVALID_LocalAwemeAuthListV30DataInvitationsStatus = 'INVALID';

    public const ALLOWED_VALUES = [
        self::AUTHRIZED_LocalAwemeAuthListV30DataInvitationsStatus,
        self::AUTHRIZING_LocalAwemeAuthListV30DataInvitationsStatus,
        self::INVALID_LocalAwemeAuthListV30DataInvitationsStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalAwemeAuthListV30DataInvitationsStatus', $value));
        }
        return (string) $value;
    }
}
