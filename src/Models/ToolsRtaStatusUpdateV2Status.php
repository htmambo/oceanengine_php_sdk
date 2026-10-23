<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsRtaStatusUpdateV2Status
{
    public const ENABLE_ToolsRtaStatusUpdateV2Status = 'ENABLE';
    public const DISABLE_ToolsRtaStatusUpdateV2Status = 'DISABLE';

    public const ALLOWED_VALUES = [
        self::ENABLE_ToolsRtaStatusUpdateV2Status,
        self::DISABLE_ToolsRtaStatusUpdateV2Status,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsRtaStatusUpdateV2Status', $value));
        }
        return (string) $value;
    }
}
