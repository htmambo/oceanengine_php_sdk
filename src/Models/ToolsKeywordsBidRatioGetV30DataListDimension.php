<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsKeywordsBidRatioGetV30DataListDimension
{
    public const ADVERTISER_ToolsKeywordsBidRatioGetV30DataListDimension = 'ADVERTISER';
    public const PROJECT_ToolsKeywordsBidRatioGetV30DataListDimension = 'PROJECT';

    public const ALLOWED_VALUES = [
        self::ADVERTISER_ToolsKeywordsBidRatioGetV30DataListDimension,
        self::PROJECT_ToolsKeywordsBidRatioGetV30DataListDimension,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsKeywordsBidRatioGetV30DataListDimension', $value));
        }
        return (string) $value;
    }
}
