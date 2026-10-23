<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsKeywordsBidRatioCreateV30DataConflictDimension
{
    public const ADVERTISER_ToolsKeywordsBidRatioCreateV30DataConflictDimension = 'ADVERTISER';
    public const PROJECT_ToolsKeywordsBidRatioCreateV30DataConflictDimension = 'PROJECT';

    public const ALLOWED_VALUES = [
        self::ADVERTISER_ToolsKeywordsBidRatioCreateV30DataConflictDimension,
        self::PROJECT_ToolsKeywordsBidRatioCreateV30DataConflictDimension,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsKeywordsBidRatioCreateV30DataConflictDimension', $value));
        }
        return (string) $value;
    }
}
