<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class NativeAnchorUpdateV30AnchorInfoNetServiceAnchorNetServiceType
{
    public const GENERAL_NativeAnchorUpdateV30AnchorInfoNetServiceAnchorNetServiceType = 'GENERAL';
    public const MICRO_APP_NativeAnchorUpdateV30AnchorInfoNetServiceAnchorNetServiceType = 'MICRO_APP';
    public const QUICK_APP_NativeAnchorUpdateV30AnchorInfoNetServiceAnchorNetServiceType = 'QUICK_APP';
    public const WECHAT_PACKAGE_NativeAnchorUpdateV30AnchorInfoNetServiceAnchorNetServiceType = 'WECHAT_PACKAGE';
    public const WECOM_PACKAGE_NativeAnchorUpdateV30AnchorInfoNetServiceAnchorNetServiceType = 'WECOM_PACKAGE';
    public const WECHAT_EXTERNAL_URL_NativeAnchorUpdateV30AnchorInfoNetServiceAnchorNetServiceType = 'WECHAT_EXTERNAL_URL';

    public const ALLOWED_VALUES = [
        self::GENERAL_NativeAnchorUpdateV30AnchorInfoNetServiceAnchorNetServiceType,
        self::MICRO_APP_NativeAnchorUpdateV30AnchorInfoNetServiceAnchorNetServiceType,
        self::QUICK_APP_NativeAnchorUpdateV30AnchorInfoNetServiceAnchorNetServiceType,
        self::WECHAT_PACKAGE_NativeAnchorUpdateV30AnchorInfoNetServiceAnchorNetServiceType,
        self::WECOM_PACKAGE_NativeAnchorUpdateV30AnchorInfoNetServiceAnchorNetServiceType,
        self::WECHAT_EXTERNAL_URL_NativeAnchorUpdateV30AnchorInfoNetServiceAnchorNetServiceType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum NativeAnchorUpdateV30AnchorInfoNetServiceAnchorNetServiceType', $value));
        }
        return (string) $value;
    }
}
