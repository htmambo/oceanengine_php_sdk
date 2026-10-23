<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsBpAssetManagementShareGetV30ShareType
{
    public const ACCOUNT_ToolsBpAssetManagementShareGetV30ShareType = 'ACCOUNT';
    public const GROUP_ToolsBpAssetManagementShareGetV30ShareType = 'GROUP';

    public const ALLOWED_VALUES = [
        self::ACCOUNT_ToolsBpAssetManagementShareGetV30ShareType,
        self::GROUP_ToolsBpAssetManagementShareGetV30ShareType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsBpAssetManagementShareGetV30ShareType', $value));
        }
        return (string) $value;
    }
}
