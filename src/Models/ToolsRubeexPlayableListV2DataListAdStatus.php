<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsRubeexPlayableListV2DataListAdStatus
{
    public const INUSE_ToolsRubeexPlayableListV2DataListAdStatus = 'INUSE';
    public const UNUSE_ToolsRubeexPlayableListV2DataListAdStatus = 'UNUSE';

    public const ALLOWED_VALUES = [
        self::INUSE_ToolsRubeexPlayableListV2DataListAdStatus,
        self::UNUSE_ToolsRubeexPlayableListV2DataListAdStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsRubeexPlayableListV2DataListAdStatus', $value));
        }
        return (string) $value;
    }
}
