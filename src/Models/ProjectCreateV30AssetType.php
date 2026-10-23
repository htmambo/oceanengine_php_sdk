<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ProjectCreateV30AssetType
{
    public const AWEME_ProjectCreateV30AssetType = 'AWEME';
    public const ENTERPRISE_ProjectCreateV30AssetType = 'ENTERPRISE';
    public const MICRO_APP_ProjectCreateV30AssetType = 'MICRO_APP';
    public const ORANGE_ProjectCreateV30AssetType = 'ORANGE';
    public const THIRDPARTY_ProjectCreateV30AssetType = 'THIRDPARTY';
    public const WECHAT_APPLET_ProjectCreateV30AssetType = 'WECHAT_APPLET';

    public const ALLOWED_VALUES = [
        self::AWEME_ProjectCreateV30AssetType,
        self::ENTERPRISE_ProjectCreateV30AssetType,
        self::MICRO_APP_ProjectCreateV30AssetType,
        self::ORANGE_ProjectCreateV30AssetType,
        self::THIRDPARTY_ProjectCreateV30AssetType,
        self::WECHAT_APPLET_ProjectCreateV30AssetType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ProjectCreateV30AssetType', $value));
        }
        return (string) $value;
    }
}
