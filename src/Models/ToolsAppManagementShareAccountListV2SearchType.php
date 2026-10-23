<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsAppManagementShareAccountListV2SearchType
{
    public const OTHER_ToolsAppManagementShareAccountListV2SearchType = 'OTHER';
    public const ORGANIZATION_SHARE_ToolsAppManagementShareAccountListV2SearchType = 'ORGANIZATION_SHARE';

    public const ALLOWED_VALUES = [
        self::OTHER_ToolsAppManagementShareAccountListV2SearchType,
        self::ORGANIZATION_SHARE_ToolsAppManagementShareAccountListV2SearchType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsAppManagementShareAccountListV2SearchType', $value));
        }
        return (string) $value;
    }
}
