<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsEbpAssetAuthListV30DataAuthorizationsAuthTargetAuthTargetType
{
    public const ACCOUNT_ToolsEbpAssetAuthListV30DataAuthorizationsAuthTargetAuthTargetType = 'Account';
    public const COMPANY_ALL_ACCOUNT_ToolsEbpAssetAuthListV30DataAuthorizationsAuthTargetAuthTargetType = 'CompanyAllAccount';
    public const COMPANY_APPKEY_ACCOUNT_ToolsEbpAssetAuthListV30DataAuthorizationsAuthTargetAuthTargetType = 'CompanyAppkeyAccount';
    public const GROUP_ALL_ACCOUNT_ToolsEbpAssetAuthListV30DataAuthorizationsAuthTargetAuthTargetType = 'GroupAllAccount';
    public const GROUP_APPKEY_ACCOUNT_ToolsEbpAssetAuthListV30DataAuthorizationsAuthTargetAuthTargetType = 'GroupAppkeyAccount';
    public const GROUP_DIRECT_ACCOUNT_ToolsEbpAssetAuthListV30DataAuthorizationsAuthTargetAuthTargetType = 'GroupDirectAccount';
    public const GROUP_OVERALL_ACCOUNT_ToolsEbpAssetAuthListV30DataAuthorizationsAuthTargetAuthTargetType = 'GroupOverallAccount';

    public const ALLOWED_VALUES = [
        self::ACCOUNT_ToolsEbpAssetAuthListV30DataAuthorizationsAuthTargetAuthTargetType,
        self::COMPANY_ALL_ACCOUNT_ToolsEbpAssetAuthListV30DataAuthorizationsAuthTargetAuthTargetType,
        self::COMPANY_APPKEY_ACCOUNT_ToolsEbpAssetAuthListV30DataAuthorizationsAuthTargetAuthTargetType,
        self::GROUP_ALL_ACCOUNT_ToolsEbpAssetAuthListV30DataAuthorizationsAuthTargetAuthTargetType,
        self::GROUP_APPKEY_ACCOUNT_ToolsEbpAssetAuthListV30DataAuthorizationsAuthTargetAuthTargetType,
        self::GROUP_DIRECT_ACCOUNT_ToolsEbpAssetAuthListV30DataAuthorizationsAuthTargetAuthTargetType,
        self::GROUP_OVERALL_ACCOUNT_ToolsEbpAssetAuthListV30DataAuthorizationsAuthTargetAuthTargetType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsEbpAssetAuthListV30DataAuthorizationsAuthTargetAuthTargetType', $value));
        }
        return (string) $value;
    }
}
