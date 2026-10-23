<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalProjectCreateV30LocalAssetType
{
    public const LOCAL_ASSET_TYPE_AWEME_PAGE_LocalProjectCreateV30LocalAssetType = 'LOCAL_ASSET_TYPE_AWEME_PAGE';
    public const LOCAL_ASSET_TYPE_MARKET_PAGE_LocalProjectCreateV30LocalAssetType = 'LOCAL_ASSET_TYPE_MARKET_PAGE';
    public const LOCAL_ASSET_TYPE_PRODUCT_PAGE_LocalProjectCreateV30LocalAssetType = 'LOCAL_ASSET_TYPE_PRODUCT_PAGE';
    public const LOCAL_ASSET_TYPE_SHOP_PAGE_LocalProjectCreateV30LocalAssetType = 'LOCAL_ASSET_TYPE_SHOP_PAGE';

    public const ALLOWED_VALUES = [
        self::LOCAL_ASSET_TYPE_AWEME_PAGE_LocalProjectCreateV30LocalAssetType,
        self::LOCAL_ASSET_TYPE_MARKET_PAGE_LocalProjectCreateV30LocalAssetType,
        self::LOCAL_ASSET_TYPE_PRODUCT_PAGE_LocalProjectCreateV30LocalAssetType,
        self::LOCAL_ASSET_TYPE_SHOP_PAGE_LocalProjectCreateV30LocalAssetType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalProjectCreateV30LocalAssetType', $value));
        }
        return (string) $value;
    }
}
