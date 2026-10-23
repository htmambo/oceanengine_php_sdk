<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalAwemeAuthListV30DataInvitationsAuthTargetType
{
    public const AWEME_COOPERATOR_LocalAwemeAuthListV30DataInvitationsAuthTargetType = 'AWEME_COOPERATOR';
    public const SELF_LocalAwemeAuthListV30DataInvitationsAuthTargetType = 'SELF';

    public const ALLOWED_VALUES = [
        self::AWEME_COOPERATOR_LocalAwemeAuthListV30DataInvitationsAuthTargetType,
        self::SELF_LocalAwemeAuthListV30DataInvitationsAuthTargetType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalAwemeAuthListV30DataInvitationsAuthTargetType', $value));
        }
        return (string) $value;
    }
}
