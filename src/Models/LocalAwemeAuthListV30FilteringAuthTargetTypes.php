<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalAwemeAuthListV30FilteringAuthTargetTypes
{
    public const AWEME_COOPERATOR_LocalAwemeAuthListV30FilteringAuthTargetTypes = 'AWEME_COOPERATOR';
    public const SELF_LocalAwemeAuthListV30FilteringAuthTargetTypes = 'SELF';

    public const ALLOWED_VALUES = [
        self::AWEME_COOPERATOR_LocalAwemeAuthListV30FilteringAuthTargetTypes,
        self::SELF_LocalAwemeAuthListV30FilteringAuthTargetTypes,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalAwemeAuthListV30FilteringAuthTargetTypes', $value));
        }
        return (string) $value;
    }
}
