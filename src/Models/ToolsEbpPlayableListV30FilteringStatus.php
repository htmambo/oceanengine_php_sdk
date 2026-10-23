<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsEbpPlayableListV30FilteringStatus
{
    public const OFFLINE_ToolsEbpPlayableListV30FilteringStatus = 'OFFLINE';
    public const ONLINE_ToolsEbpPlayableListV30FilteringStatus = 'ONLINE';

    public const ALLOWED_VALUES = [
        self::OFFLINE_ToolsEbpPlayableListV30FilteringStatus,
        self::ONLINE_ToolsEbpPlayableListV30FilteringStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsEbpPlayableListV30FilteringStatus', $value));
        }
        return (string) $value;
    }
}
