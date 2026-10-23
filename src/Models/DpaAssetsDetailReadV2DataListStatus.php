<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class DpaAssetsDetailReadV2DataListStatus
{
    public const ENABLE_DpaAssetsDetailReadV2DataListStatus = 'ENABLE';
    public const DISABLE_DpaAssetsDetailReadV2DataListStatus = 'DISABLE';

    public const ALLOWED_VALUES = [
        self::ENABLE_DpaAssetsDetailReadV2DataListStatus,
        self::DISABLE_DpaAssetsDetailReadV2DataListStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum DpaAssetsDetailReadV2DataListStatus', $value));
        }
        return (string) $value;
    }
}
