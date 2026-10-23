<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CreateStatementV2Platform
{
    public const AD_CreateStatementV2Platform = 'AD';
    public const NATIVELIFE_CreateStatementV2Platform = 'NATIVELIFE';
    public const QIANCHUAN_CreateStatementV2Platform = 'QIANCHUAN';

    public const ALLOWED_VALUES = [
        self::AD_CreateStatementV2Platform,
        self::NATIVELIFE_CreateStatementV2Platform,
        self::QIANCHUAN_CreateStatementV2Platform,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CreateStatementV2Platform', $value));
        }
        return (string) $value;
    }
}
