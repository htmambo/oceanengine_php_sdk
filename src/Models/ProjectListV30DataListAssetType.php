<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ProjectListV30DataListAssetType
{
    public const AWEME_ProjectListV30DataListAssetType = 'AWEME';
    public const ENTERPRISE_ProjectListV30DataListAssetType = 'ENTERPRISE';
    public const MICRO_APP_ProjectListV30DataListAssetType = 'MICRO_APP';
    public const ORANGE_ProjectListV30DataListAssetType = 'ORANGE';
    public const THIRDPARTY_ProjectListV30DataListAssetType = 'THIRDPARTY';
    public const WECHAT_APPLET_ProjectListV30DataListAssetType = 'WECHAT_APPLET';

    public const ALLOWED_VALUES = [
        self::AWEME_ProjectListV30DataListAssetType,
        self::ENTERPRISE_ProjectListV30DataListAssetType,
        self::MICRO_APP_ProjectListV30DataListAssetType,
        self::ORANGE_ProjectListV30DataListAssetType,
        self::THIRDPARTY_ProjectListV30DataListAssetType,
        self::WECHAT_APPLET_ProjectListV30DataListAssetType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ProjectListV30DataListAssetType', $value));
        }
        return (string) $value;
    }
}
