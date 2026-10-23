<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanToolsAwemeAuthV10AuthType
{
    public const SELF_QianchuanToolsAwemeAuthV10AuthType = 'SELF';
    public const AWEME_COOPERATOR_QianchuanToolsAwemeAuthV10AuthType = 'AWEME_COOPERATOR';
    public const ROOM_QianchuanToolsAwemeAuthV10AuthType = 'ROOM';

    public const ALLOWED_VALUES = [
        self::SELF_QianchuanToolsAwemeAuthV10AuthType,
        self::AWEME_COOPERATOR_QianchuanToolsAwemeAuthV10AuthType,
        self::ROOM_QianchuanToolsAwemeAuthV10AuthType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanToolsAwemeAuthV10AuthType', $value));
        }
        return (string) $value;
    }
}
