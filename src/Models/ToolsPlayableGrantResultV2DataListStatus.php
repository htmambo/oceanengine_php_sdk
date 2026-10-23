<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsPlayableGrantResultV2DataListStatus
{
    public const FAILED_ToolsPlayableGrantResultV2DataListStatus = 'FAILED';
    public const RUNNING_ToolsPlayableGrantResultV2DataListStatus = 'RUNNING';
    public const SUCCESS_ToolsPlayableGrantResultV2DataListStatus = 'SUCCESS';

    public const ALLOWED_VALUES = [
        self::FAILED_ToolsPlayableGrantResultV2DataListStatus,
        self::RUNNING_ToolsPlayableGrantResultV2DataListStatus,
        self::SUCCESS_ToolsPlayableGrantResultV2DataListStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsPlayableGrantResultV2DataListStatus', $value));
        }
        return (string) $value;
    }
}
