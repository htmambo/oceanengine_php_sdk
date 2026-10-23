<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsPlayableCloudGameListV2DataListAdStatus
{
    public const INUSE_ToolsPlayableCloudGameListV2DataListAdStatus = 'INUSE';
    public const DELETE_ToolsPlayableCloudGameListV2DataListAdStatus = 'DELETE';
    public const UNUSED_ToolsPlayableCloudGameListV2DataListAdStatus = 'UNUSED';

    public const ALLOWED_VALUES = [
        self::INUSE_ToolsPlayableCloudGameListV2DataListAdStatus,
        self::DELETE_ToolsPlayableCloudGameListV2DataListAdStatus,
        self::UNUSED_ToolsPlayableCloudGameListV2DataListAdStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsPlayableCloudGameListV2DataListAdStatus', $value));
        }
        return (string) $value;
    }
}
