<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalAwemeAuthListV30DataInvitationsAuthSource
{
    public const LAIKE_LocalAwemeAuthListV30DataInvitationsAuthSource = 'LAIKE';
    public const MANUAL_LocalAwemeAuthListV30DataInvitationsAuthSource = 'MANUAL';

    public const ALLOWED_VALUES = [
        self::LAIKE_LocalAwemeAuthListV30DataInvitationsAuthSource,
        self::MANUAL_LocalAwemeAuthListV30DataInvitationsAuthSource,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalAwemeAuthListV30DataInvitationsAuthSource', $value));
        }
        return (string) $value;
    }
}
