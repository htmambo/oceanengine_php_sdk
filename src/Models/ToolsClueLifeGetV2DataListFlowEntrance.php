<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsClueLifeGetV2DataListFlowEntrance
{
    public const OTHER_ToolsClueLifeGetV2DataListFlowEntrance = 'OTHER';
    public const SEARCH_ToolsClueLifeGetV2DataListFlowEntrance = 'SEARCH';
    public const FEED_ToolsClueLifeGetV2DataListFlowEntrance = 'FEED';

    public const ALLOWED_VALUES = [
        self::OTHER_ToolsClueLifeGetV2DataListFlowEntrance,
        self::SEARCH_ToolsClueLifeGetV2DataListFlowEntrance,
        self::FEED_ToolsClueLifeGetV2DataListFlowEntrance,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsClueLifeGetV2DataListFlowEntrance', $value));
        }
        return (string) $value;
    }
}
