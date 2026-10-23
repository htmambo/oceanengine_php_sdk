<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BrandMaterialCreateV30MaterialListMaterialComponentCommonExternalMicroAppOpenUrlType
{
    public const DEFAULT_BrandMaterialCreateV30MaterialListMaterialComponentCommonExternalMicroAppOpenUrlType = 'DEFAULT';
    public const WECHAT_BrandMaterialCreateV30MaterialListMaterialComponentCommonExternalMicroAppOpenUrlType = 'WECHAT';

    public const ALLOWED_VALUES = [
        self::DEFAULT_BrandMaterialCreateV30MaterialListMaterialComponentCommonExternalMicroAppOpenUrlType,
        self::WECHAT_BrandMaterialCreateV30MaterialListMaterialComponentCommonExternalMicroAppOpenUrlType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BrandMaterialCreateV30MaterialListMaterialComponentCommonExternalMicroAppOpenUrlType', $value));
        }
        return (string) $value;
    }
}
