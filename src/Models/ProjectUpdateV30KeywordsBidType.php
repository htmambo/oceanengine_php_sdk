<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ProjectUpdateV30KeywordsBidType
{
    public const CUSTOM_ProjectUpdateV30KeywordsBidType = 'CUSTOM';
    public const FEED_TO_SEARCH_ProjectUpdateV30KeywordsBidType = 'FEED_TO_SEARCH';
    public const WITH_PROMOTION_ProjectUpdateV30KeywordsBidType = 'WITH_PROMOTION';

    public const ALLOWED_VALUES = [
        self::CUSTOM_ProjectUpdateV30KeywordsBidType,
        self::FEED_TO_SEARCH_ProjectUpdateV30KeywordsBidType,
        self::WITH_PROMOTION_ProjectUpdateV30KeywordsBidType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ProjectUpdateV30KeywordsBidType', $value));
        }
        return (string) $value;
    }
}
