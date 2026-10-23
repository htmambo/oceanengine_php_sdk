<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsEbpAssetAuthV30DataFailedRecordsAuthTargetAuthTargetType
{
    public const ACCOUNT_ToolsEbpAssetAuthV30DataFailedRecordsAuthTargetAuthTargetType = 'Account';
    public const COMPANY_ALL_ACCOUNT_ToolsEbpAssetAuthV30DataFailedRecordsAuthTargetAuthTargetType = 'CompanyAllAccount';
    public const COMPANY_APPKEY_ACCOUNT_ToolsEbpAssetAuthV30DataFailedRecordsAuthTargetAuthTargetType = 'CompanyAppkeyAccount';
    public const GROUP_ALL_ACCOUNT_ToolsEbpAssetAuthV30DataFailedRecordsAuthTargetAuthTargetType = 'GroupAllAccount';
    public const GROUP_APPKEY_ACCOUNT_ToolsEbpAssetAuthV30DataFailedRecordsAuthTargetAuthTargetType = 'GroupAppkeyAccount';
    public const GROUP_DIRECT_ACCOUNT_ToolsEbpAssetAuthV30DataFailedRecordsAuthTargetAuthTargetType = 'GroupDirectAccount';
    public const GROUP_OVERALL_ACCOUNT_ToolsEbpAssetAuthV30DataFailedRecordsAuthTargetAuthTargetType = 'GroupOverallAccount';

    public const ALLOWED_VALUES = [
        self::ACCOUNT_ToolsEbpAssetAuthV30DataFailedRecordsAuthTargetAuthTargetType,
        self::COMPANY_ALL_ACCOUNT_ToolsEbpAssetAuthV30DataFailedRecordsAuthTargetAuthTargetType,
        self::COMPANY_APPKEY_ACCOUNT_ToolsEbpAssetAuthV30DataFailedRecordsAuthTargetAuthTargetType,
        self::GROUP_ALL_ACCOUNT_ToolsEbpAssetAuthV30DataFailedRecordsAuthTargetAuthTargetType,
        self::GROUP_APPKEY_ACCOUNT_ToolsEbpAssetAuthV30DataFailedRecordsAuthTargetAuthTargetType,
        self::GROUP_DIRECT_ACCOUNT_ToolsEbpAssetAuthV30DataFailedRecordsAuthTargetAuthTargetType,
        self::GROUP_OVERALL_ACCOUNT_ToolsEbpAssetAuthV30DataFailedRecordsAuthTargetAuthTargetType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsEbpAssetAuthV30DataFailedRecordsAuthTargetAuthTargetType', $value));
        }
        return (string) $value;
    }
}
