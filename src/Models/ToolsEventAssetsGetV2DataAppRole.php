<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsEventAssetsGetV2DataAppRole
{
    public const MINE_ToolsEventAssetsGetV2DataAppRole = 'MINE';
    public const SHARED_ToolsEventAssetsGetV2DataAppRole = 'SHARED';

    public const ALLOWED_VALUES = [
        self::MINE_ToolsEventAssetsGetV2DataAppRole,
        self::SHARED_ToolsEventAssetsGetV2DataAppRole,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsEventAssetsGetV2DataAppRole', $value));
        }
        return (string) $value;
    }
}
