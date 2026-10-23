<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class NativeAnchorGetDetailV30DataListNetServiceAnchorNetServiceType
{
    public const GENERAL_NativeAnchorGetDetailV30DataListNetServiceAnchorNetServiceType = 'GENERAL';
    public const MICRO_APP_NativeAnchorGetDetailV30DataListNetServiceAnchorNetServiceType = 'MICRO_APP';
    public const QUICK_APP_NativeAnchorGetDetailV30DataListNetServiceAnchorNetServiceType = 'QUICK_APP';
    public const WECHAT_PACKAGE_NativeAnchorGetDetailV30DataListNetServiceAnchorNetServiceType = 'WECHAT_PACKAGE';
    public const WECOM_PACKAGE_NativeAnchorGetDetailV30DataListNetServiceAnchorNetServiceType = 'WECOM_PACKAGE';
    public const WECHAT_EXTERNAL_URL_NativeAnchorGetDetailV30DataListNetServiceAnchorNetServiceType = 'WECHAT_EXTERNAL_URL';

    public const ALLOWED_VALUES = [
        self::GENERAL_NativeAnchorGetDetailV30DataListNetServiceAnchorNetServiceType,
        self::MICRO_APP_NativeAnchorGetDetailV30DataListNetServiceAnchorNetServiceType,
        self::QUICK_APP_NativeAnchorGetDetailV30DataListNetServiceAnchorNetServiceType,
        self::WECHAT_PACKAGE_NativeAnchorGetDetailV30DataListNetServiceAnchorNetServiceType,
        self::WECOM_PACKAGE_NativeAnchorGetDetailV30DataListNetServiceAnchorNetServiceType,
        self::WECHAT_EXTERNAL_URL_NativeAnchorGetDetailV30DataListNetServiceAnchorNetServiceType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum NativeAnchorGetDetailV30DataListNetServiceAnchorNetServiceType', $value));
        }
        return (string) $value;
    }
}
