<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsPlayableCloudGameListV2FilteringOrientation
{
    public const HORIZONTAL_ToolsPlayableCloudGameListV2FilteringOrientation = 'HORIZONTAL';
    public const VERTICAL_ToolsPlayableCloudGameListV2FilteringOrientation = 'VERTICAL';

    public const ALLOWED_VALUES = [
        self::HORIZONTAL_ToolsPlayableCloudGameListV2FilteringOrientation,
        self::VERTICAL_ToolsPlayableCloudGameListV2FilteringOrientation,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsPlayableCloudGameListV2FilteringOrientation', $value));
        }
        return (string) $value;
    }
}
