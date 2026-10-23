<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsClueLifeGetV2DataListFlowType
{
    public const NATURE_ToolsClueLifeGetV2DataListFlowType = 'NATURE';
    public const AD_ToolsClueLifeGetV2DataListFlowType = 'AD';

    public const ALLOWED_VALUES = [
        self::NATURE_ToolsClueLifeGetV2DataListFlowType,
        self::AD_ToolsClueLifeGetV2DataListFlowType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsClueLifeGetV2DataListFlowType', $value));
        }
        return (string) $value;
    }
}
