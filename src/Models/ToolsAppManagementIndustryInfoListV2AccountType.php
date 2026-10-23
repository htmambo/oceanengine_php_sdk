<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsAppManagementIndustryInfoListV2AccountType
{
    public const AD_ToolsAppManagementIndustryInfoListV2AccountType = 'AD';
    public const BP_ToolsAppManagementIndustryInfoListV2AccountType = 'BP';

    public const ALLOWED_VALUES = [
        self::AD_ToolsAppManagementIndustryInfoListV2AccountType,
        self::BP_ToolsAppManagementIndustryInfoListV2AccountType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsAppManagementIndustryInfoListV2AccountType', $value));
        }
        return (string) $value;
    }
}
