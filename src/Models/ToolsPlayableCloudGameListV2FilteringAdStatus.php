<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsPlayableCloudGameListV2FilteringAdStatus
{
    public const INUSE_ToolsPlayableCloudGameListV2FilteringAdStatus = 'INUSE';
    public const DELETE_ToolsPlayableCloudGameListV2FilteringAdStatus = 'DELETE';
    public const UNUSED_ToolsPlayableCloudGameListV2FilteringAdStatus = 'UNUSED';

    public const ALLOWED_VALUES = [
        self::INUSE_ToolsPlayableCloudGameListV2FilteringAdStatus,
        self::DELETE_ToolsPlayableCloudGameListV2FilteringAdStatus,
        self::UNUSED_ToolsPlayableCloudGameListV2FilteringAdStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsPlayableCloudGameListV2FilteringAdStatus', $value));
        }
        return (string) $value;
    }
}
