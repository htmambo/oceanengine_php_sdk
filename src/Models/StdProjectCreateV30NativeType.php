<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StdProjectCreateV30NativeType
{
    public const ACCOUNT_StdProjectCreateV30NativeType = 'ACCOUNT';
    public const AWEME_StdProjectCreateV30NativeType = 'AWEME';

    public const ALLOWED_VALUES = [
        self::ACCOUNT_StdProjectCreateV30NativeType,
        self::AWEME_StdProjectCreateV30NativeType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StdProjectCreateV30NativeType', $value));
        }
        return (string) $value;
    }
}
