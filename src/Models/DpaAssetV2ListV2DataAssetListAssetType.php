<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class DpaAssetV2ListV2DataAssetListAssetType
{
    public const AUTO_DpaAssetV2ListV2DataAssetListAssetType = 'AUTO';

    public const ALLOWED_VALUES = [
        self::AUTO_DpaAssetV2ListV2DataAssetListAssetType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum DpaAssetV2ListV2DataAssetListAssetType', $value));
        }
        return (string) $value;
    }
}
