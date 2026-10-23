<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsEbpAppExtendListV30DataExtendPackageListStatus
{
    public const ALL_ToolsEbpAppExtendListV30DataExtendPackageListStatus = 'All';
    public const CREATE_FAIL_ToolsEbpAppExtendListV30DataExtendPackageListStatus = 'CreateFail';
    public const CREATING_ToolsEbpAppExtendListV30DataExtendPackageListStatus = 'Creating';
    public const OFFLINE_ToolsEbpAppExtendListV30DataExtendPackageListStatus = 'Offline';
    public const PREPARED_ToolsEbpAppExtendListV30DataExtendPackageListStatus = 'Prepared';
    public const PUBLISHED_ToolsEbpAppExtendListV30DataExtendPackageListStatus = 'Published';
    public const UPDATE_FAIL_ToolsEbpAppExtendListV30DataExtendPackageListStatus = 'UpdateFail';
    public const UPDATING_ToolsEbpAppExtendListV30DataExtendPackageListStatus = 'Updating';

    public const ALLOWED_VALUES = [
        self::ALL_ToolsEbpAppExtendListV30DataExtendPackageListStatus,
        self::CREATE_FAIL_ToolsEbpAppExtendListV30DataExtendPackageListStatus,
        self::CREATING_ToolsEbpAppExtendListV30DataExtendPackageListStatus,
        self::OFFLINE_ToolsEbpAppExtendListV30DataExtendPackageListStatus,
        self::PREPARED_ToolsEbpAppExtendListV30DataExtendPackageListStatus,
        self::PUBLISHED_ToolsEbpAppExtendListV30DataExtendPackageListStatus,
        self::UPDATE_FAIL_ToolsEbpAppExtendListV30DataExtendPackageListStatus,
        self::UPDATING_ToolsEbpAppExtendListV30DataExtendPackageListStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsEbpAppExtendListV30DataExtendPackageListStatus', $value));
        }
        return (string) $value;
    }
}
