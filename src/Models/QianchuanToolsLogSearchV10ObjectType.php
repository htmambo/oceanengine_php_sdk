<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanToolsLogSearchV10ObjectType
{
    public const AD_QianchuanToolsLogSearchV10ObjectType = 'AD';
    public const ACCOUNT_QianchuanToolsLogSearchV10ObjectType = 'ACCOUNT';

    public const ALLOWED_VALUES = [
        self::AD_QianchuanToolsLogSearchV10ObjectType,
        self::ACCOUNT_QianchuanToolsLogSearchV10ObjectType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanToolsLogSearchV10ObjectType', $value));
        }
        return (string) $value;
    }
}
