<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class DpaAssetsDetailReadV2DataListSource
{
    public const MANUAL_DpaAssetsDetailReadV2DataListSource = 'MANUAL';
    public const AUTO_DpaAssetsDetailReadV2DataListSource = 'AUTO';

    public const ALLOWED_VALUES = [
        self::MANUAL_DpaAssetsDetailReadV2DataListSource,
        self::AUTO_DpaAssetsDetailReadV2DataListSource,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum DpaAssetsDetailReadV2DataListSource', $value));
        }
        return (string) $value;
    }
}
