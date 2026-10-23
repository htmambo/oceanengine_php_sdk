<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsEbpAssetAuthV30AuthTargetsAuthTargetType
{
    public const ACCOUNT_ToolsEbpAssetAuthV30AuthTargetsAuthTargetType = 'Account';
    public const COMPANY_ALL_ACCOUNT_ToolsEbpAssetAuthV30AuthTargetsAuthTargetType = 'CompanyAllAccount';
    public const COMPANY_APPKEY_ACCOUNT_ToolsEbpAssetAuthV30AuthTargetsAuthTargetType = 'CompanyAppkeyAccount';
    public const GROUP_ALL_ACCOUNT_ToolsEbpAssetAuthV30AuthTargetsAuthTargetType = 'GroupAllAccount';
    public const GROUP_APPKEY_ACCOUNT_ToolsEbpAssetAuthV30AuthTargetsAuthTargetType = 'GroupAppkeyAccount';
    public const GROUP_DIRECT_ACCOUNT_ToolsEbpAssetAuthV30AuthTargetsAuthTargetType = 'GroupDirectAccount';
    public const GROUP_OVERALL_ACCOUNT_ToolsEbpAssetAuthV30AuthTargetsAuthTargetType = 'GroupOverallAccount';

    public const ALLOWED_VALUES = [
        self::ACCOUNT_ToolsEbpAssetAuthV30AuthTargetsAuthTargetType,
        self::COMPANY_ALL_ACCOUNT_ToolsEbpAssetAuthV30AuthTargetsAuthTargetType,
        self::COMPANY_APPKEY_ACCOUNT_ToolsEbpAssetAuthV30AuthTargetsAuthTargetType,
        self::GROUP_ALL_ACCOUNT_ToolsEbpAssetAuthV30AuthTargetsAuthTargetType,
        self::GROUP_APPKEY_ACCOUNT_ToolsEbpAssetAuthV30AuthTargetsAuthTargetType,
        self::GROUP_DIRECT_ACCOUNT_ToolsEbpAssetAuthV30AuthTargetsAuthTargetType,
        self::GROUP_OVERALL_ACCOUNT_ToolsEbpAssetAuthV30AuthTargetsAuthTargetType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsEbpAssetAuthV30AuthTargetsAuthTargetType', $value));
        }
        return (string) $value;
    }
}
