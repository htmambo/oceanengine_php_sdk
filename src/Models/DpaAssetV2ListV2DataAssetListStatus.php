<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class DpaAssetV2ListV2DataAssetListStatus
{
    public const DISABLE_DpaAssetV2ListV2DataAssetListStatus = 'DISABLE';
    public const ENABLE_DpaAssetV2ListV2DataAssetListStatus = 'ENABLE';

    public const ALLOWED_VALUES = [
        self::DISABLE_DpaAssetV2ListV2DataAssetListStatus,
        self::ENABLE_DpaAssetV2ListV2DataAssetListStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum DpaAssetV2ListV2DataAssetListStatus', $value));
        }
        return (string) $value;
    }
}
