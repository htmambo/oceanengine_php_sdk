<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BrandMaterialUpdateV30MaterialListMaterialComponentCommonExternalMicroAppOpenUrlType
{
    public const DEFAULT_BrandMaterialUpdateV30MaterialListMaterialComponentCommonExternalMicroAppOpenUrlType = 'DEFAULT';
    public const WECHAT_BrandMaterialUpdateV30MaterialListMaterialComponentCommonExternalMicroAppOpenUrlType = 'WECHAT';

    public const ALLOWED_VALUES = [
        self::DEFAULT_BrandMaterialUpdateV30MaterialListMaterialComponentCommonExternalMicroAppOpenUrlType,
        self::WECHAT_BrandMaterialUpdateV30MaterialListMaterialComponentCommonExternalMicroAppOpenUrlType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BrandMaterialUpdateV30MaterialListMaterialComponentCommonExternalMicroAppOpenUrlType', $value));
        }
        return (string) $value;
    }
}
