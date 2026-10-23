<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class NativeAnchorQrcodePreviewGetV30AnchorType
{
    public const APP_GAME_NativeAnchorQrcodePreviewGetV30AnchorType = 'APP_GAME';
    public const APP_INTERNET_SERVICE_NativeAnchorQrcodePreviewGetV30AnchorType = 'APP_INTERNET_SERVICE';
    public const APP_SHOP_NativeAnchorQrcodePreviewGetV30AnchorType = 'APP_SHOP';
    public const INSURANCE_NativeAnchorQrcodePreviewGetV30AnchorType = 'INSURANCE';
    public const MICRO_APP_NativeAnchorQrcodePreviewGetV30AnchorType = 'MICRO_APP';
    public const MICRO_GAME_NativeAnchorQrcodePreviewGetV30AnchorType = 'MICRO_GAME';
    public const ONLINE_SUBSCRIBE_NativeAnchorQrcodePreviewGetV30AnchorType = 'ONLINE_SUBSCRIBE';
    public const PRIVATE_CHAT_NativeAnchorQrcodePreviewGetV30AnchorType = 'PRIVATE_CHAT';
    public const SHOPPING_CART_NativeAnchorQrcodePreviewGetV30AnchorType = 'SHOPPING_CART';

    public const ALLOWED_VALUES = [
        self::APP_GAME_NativeAnchorQrcodePreviewGetV30AnchorType,
        self::APP_INTERNET_SERVICE_NativeAnchorQrcodePreviewGetV30AnchorType,
        self::APP_SHOP_NativeAnchorQrcodePreviewGetV30AnchorType,
        self::INSURANCE_NativeAnchorQrcodePreviewGetV30AnchorType,
        self::MICRO_APP_NativeAnchorQrcodePreviewGetV30AnchorType,
        self::MICRO_GAME_NativeAnchorQrcodePreviewGetV30AnchorType,
        self::ONLINE_SUBSCRIBE_NativeAnchorQrcodePreviewGetV30AnchorType,
        self::PRIVATE_CHAT_NativeAnchorQrcodePreviewGetV30AnchorType,
        self::SHOPPING_CART_NativeAnchorQrcodePreviewGetV30AnchorType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum NativeAnchorQrcodePreviewGetV30AnchorType', $value));
        }
        return (string) $value;
    }
}
