<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalAwemeAuthListV30DataInvitationsAwemeType
{
    public const SINGLE_ACCOUNT_LocalAwemeAuthListV30DataInvitationsAwemeType = 'SINGLE_ACCOUNT';
    public const BIZ_ACCOUNT_LocalAwemeAuthListV30DataInvitationsAwemeType = 'BIZ_ACCOUNT';

    public const ALLOWED_VALUES = [
        self::SINGLE_ACCOUNT_LocalAwemeAuthListV30DataInvitationsAwemeType,
        self::BIZ_ACCOUNT_LocalAwemeAuthListV30DataInvitationsAwemeType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalAwemeAuthListV30DataInvitationsAwemeType', $value));
        }
        return (string) $value;
    }
}
