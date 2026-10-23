<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsEbpPlayableListV30DataMaterialsStatus
{
    public const EDIT_ToolsEbpPlayableListV30DataMaterialsStatus = 'EDIT';
    public const OFFLINE_ToolsEbpPlayableListV30DataMaterialsStatus = 'OFFLINE';
    public const ONLINE_ToolsEbpPlayableListV30DataMaterialsStatus = 'ONLINE';

    public const ALLOWED_VALUES = [
        self::EDIT_ToolsEbpPlayableListV30DataMaterialsStatus,
        self::OFFLINE_ToolsEbpPlayableListV30DataMaterialsStatus,
        self::ONLINE_ToolsEbpPlayableListV30DataMaterialsStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsEbpPlayableListV30DataMaterialsStatus', $value));
        }
        return (string) $value;
    }
}
