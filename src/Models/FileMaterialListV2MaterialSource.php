<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class FileMaterialListV2MaterialSource
{
    public const AD_FileMaterialListV2MaterialSource = 'AD';
    public const QIANCHUAN_FileMaterialListV2MaterialSource = 'QIANCHUAN';

    public const ALLOWED_VALUES = [
        self::AD_FileMaterialListV2MaterialSource,
        self::QIANCHUAN_FileMaterialListV2MaterialSource,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum FileMaterialListV2MaterialSource', $value));
        }
        return (string) $value;
    }
}
