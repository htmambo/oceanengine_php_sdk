<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StdProjectListV30FilteringNativeType
{
    public const AWEME_StdProjectListV30FilteringNativeType = 'AWEME';
    public const ACCOUNT_StdProjectListV30FilteringNativeType = 'ACCOUNT';

    public const ALLOWED_VALUES = [
        self::AWEME_StdProjectListV30FilteringNativeType,
        self::ACCOUNT_StdProjectListV30FilteringNativeType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StdProjectListV30FilteringNativeType', $value));
        }
        return (string) $value;
    }
}
