<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class DpaAssetsDetailReadV2DataListAssetType
{
    public const AUTO_DpaAssetsDetailReadV2DataListAssetType = 'AUTO';

    public const ALLOWED_VALUES = [
        self::AUTO_DpaAssetsDetailReadV2DataListAssetType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum DpaAssetsDetailReadV2DataListAssetType', $value));
        }
        return (string) $value;
    }
}
