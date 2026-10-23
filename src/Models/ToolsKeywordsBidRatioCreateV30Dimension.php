<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsKeywordsBidRatioCreateV30Dimension
{
    public const ADVERTISER_ToolsKeywordsBidRatioCreateV30Dimension = 'ADVERTISER';
    public const PROJECT_ToolsKeywordsBidRatioCreateV30Dimension = 'PROJECT';

    public const ALLOWED_VALUES = [
        self::ADVERTISER_ToolsKeywordsBidRatioCreateV30Dimension,
        self::PROJECT_ToolsKeywordsBidRatioCreateV30Dimension,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsKeywordsBidRatioCreateV30Dimension', $value));
        }
        return (string) $value;
    }
}
