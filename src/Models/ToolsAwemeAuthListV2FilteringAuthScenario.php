<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsAwemeAuthListV2FilteringAuthScenario
{
    public const LIVE_ToolsAwemeAuthListV2FilteringAuthScenario = 'LIVE';
    public const VIDEO_ToolsAwemeAuthListV2FilteringAuthScenario = 'VIDEO';

    public const ALLOWED_VALUES = [
        self::LIVE_ToolsAwemeAuthListV2FilteringAuthScenario,
        self::VIDEO_ToolsAwemeAuthListV2FilteringAuthScenario,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsAwemeAuthListV2FilteringAuthScenario', $value));
        }
        return (string) $value;
    }
}
