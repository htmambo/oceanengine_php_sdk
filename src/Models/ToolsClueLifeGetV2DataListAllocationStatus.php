<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsClueLifeGetV2DataListAllocationStatus
{
    public const NOT_ASSIGN_ToolsClueLifeGetV2DataListAllocationStatus = 'NOT_ASSIGN';
    public const ASSIGNED_ToolsClueLifeGetV2DataListAllocationStatus = 'ASSIGNED';

    public const ALLOWED_VALUES = [
        self::NOT_ASSIGN_ToolsClueLifeGetV2DataListAllocationStatus,
        self::ASSIGNED_ToolsClueLifeGetV2DataListAllocationStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsClueLifeGetV2DataListAllocationStatus', $value));
        }
        return (string) $value;
    }
}
