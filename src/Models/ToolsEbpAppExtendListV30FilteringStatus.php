<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsEbpAppExtendListV30FilteringStatus
{
    public const ALL_ToolsEbpAppExtendListV30FilteringStatus = 'All';
    public const CREATE_FAIL_ToolsEbpAppExtendListV30FilteringStatus = 'CreateFail';
    public const CREATING_ToolsEbpAppExtendListV30FilteringStatus = 'Creating';
    public const OFFLINE_ToolsEbpAppExtendListV30FilteringStatus = 'Offline';
    public const PREPARED_ToolsEbpAppExtendListV30FilteringStatus = 'Prepared';
    public const PUBLISHED_ToolsEbpAppExtendListV30FilteringStatus = 'Published';
    public const UPDATE_FAIL_ToolsEbpAppExtendListV30FilteringStatus = 'UpdateFail';
    public const UPDATING_ToolsEbpAppExtendListV30FilteringStatus = 'Updating';

    public const ALLOWED_VALUES = [
        self::ALL_ToolsEbpAppExtendListV30FilteringStatus,
        self::CREATE_FAIL_ToolsEbpAppExtendListV30FilteringStatus,
        self::CREATING_ToolsEbpAppExtendListV30FilteringStatus,
        self::OFFLINE_ToolsEbpAppExtendListV30FilteringStatus,
        self::PREPARED_ToolsEbpAppExtendListV30FilteringStatus,
        self::PUBLISHED_ToolsEbpAppExtendListV30FilteringStatus,
        self::UPDATE_FAIL_ToolsEbpAppExtendListV30FilteringStatus,
        self::UPDATING_ToolsEbpAppExtendListV30FilteringStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsEbpAppExtendListV30FilteringStatus', $value));
        }
        return (string) $value;
    }
}
