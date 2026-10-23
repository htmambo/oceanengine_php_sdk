<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsPlayableCloudGameListV2DataListOrientation
{
    public const HORIZONTAL_ToolsPlayableCloudGameListV2DataListOrientation = 'HORIZONTAL';
    public const VERTICAL_ToolsPlayableCloudGameListV2DataListOrientation = 'VERTICAL';

    public const ALLOWED_VALUES = [
        self::HORIZONTAL_ToolsPlayableCloudGameListV2DataListOrientation,
        self::VERTICAL_ToolsPlayableCloudGameListV2DataListOrientation,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsPlayableCloudGameListV2DataListOrientation', $value));
        }
        return (string) $value;
    }
}
