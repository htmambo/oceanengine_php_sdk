<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsAppManagementAndroidBasicPackageUpdateV2GameIpType
{
    public const ANIMATION_ToolsAppManagementAndroidBasicPackageUpdateV2GameIpType = 'Animation';
    public const ARTISTIC_ToolsAppManagementAndroidBasicPackageUpdateV2GameIpType = 'Artistic';
    public const FILM_ToolsAppManagementAndroidBasicPackageUpdateV2GameIpType = 'Film';
    public const LITERARY_ToolsAppManagementAndroidBasicPackageUpdateV2GameIpType = 'Literary';
    public const NONE_ToolsAppManagementAndroidBasicPackageUpdateV2GameIpType = 'None';
    public const OTHERS_ToolsAppManagementAndroidBasicPackageUpdateV2GameIpType = 'Others';

    public const ALLOWED_VALUES = [
        self::ANIMATION_ToolsAppManagementAndroidBasicPackageUpdateV2GameIpType,
        self::ARTISTIC_ToolsAppManagementAndroidBasicPackageUpdateV2GameIpType,
        self::FILM_ToolsAppManagementAndroidBasicPackageUpdateV2GameIpType,
        self::LITERARY_ToolsAppManagementAndroidBasicPackageUpdateV2GameIpType,
        self::NONE_ToolsAppManagementAndroidBasicPackageUpdateV2GameIpType,
        self::OTHERS_ToolsAppManagementAndroidBasicPackageUpdateV2GameIpType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsAppManagementAndroidBasicPackageUpdateV2GameIpType', $value));
        }
        return (string) $value;
    }
}
