<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ProjectCreateV30KeywordsBidType
{
    public const CUSTOM_ProjectCreateV30KeywordsBidType = 'CUSTOM';
    public const FEED_TO_SEARCH_ProjectCreateV30KeywordsBidType = 'FEED_TO_SEARCH';
    public const WITH_PROMOTION_ProjectCreateV30KeywordsBidType = 'WITH_PROMOTION';

    public const ALLOWED_VALUES = [
        self::CUSTOM_ProjectCreateV30KeywordsBidType,
        self::FEED_TO_SEARCH_ProjectCreateV30KeywordsBidType,
        self::WITH_PROMOTION_ProjectCreateV30KeywordsBidType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ProjectCreateV30KeywordsBidType', $value));
        }
        return (string) $value;
    }
}
