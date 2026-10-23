<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class DpaAssetV2DetailReadV2DataAssetListSource
{
    public const AUTO_DpaAssetV2DetailReadV2DataAssetListSource = 'AUTO';
    public const MANUAL_DpaAssetV2DetailReadV2DataAssetListSource = 'MANUAL';

    public const ALLOWED_VALUES = [
        self::AUTO_DpaAssetV2DetailReadV2DataAssetListSource,
        self::MANUAL_DpaAssetV2DetailReadV2DataAssetListSource,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum DpaAssetV2DetailReadV2DataAssetListSource', $value));
        }
        return (string) $value;
    }
}
