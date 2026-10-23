<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsAwemeAuthListV2FilteringWarningTypes
{
    public const AUTHOR_REUQUEST_PENDING_EXPIRE_ToolsAwemeAuthListV2FilteringWarningTypes = 'AUTHOR_REUQUEST_PENDING_EXPIRE';
    public const UNQUALIFIED_ToolsAwemeAuthListV2FilteringWarningTypes = 'UNQUALIFIED';
    public const UNQUALIFIED_PENDING_EXPIRE_ToolsAwemeAuthListV2FilteringWarningTypes = 'UNQUALIFIED_PENDING_EXPIRE';

    public const ALLOWED_VALUES = [
        self::AUTHOR_REUQUEST_PENDING_EXPIRE_ToolsAwemeAuthListV2FilteringWarningTypes,
        self::UNQUALIFIED_ToolsAwemeAuthListV2FilteringWarningTypes,
        self::UNQUALIFIED_PENDING_EXPIRE_ToolsAwemeAuthListV2FilteringWarningTypes,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsAwemeAuthListV2FilteringWarningTypes', $value));
        }
        return (string) $value;
    }
}
