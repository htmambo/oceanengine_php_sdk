<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ProjectListV30DataListKeywordsBidType
{
    public const CUSTOM_ProjectListV30DataListKeywordsBidType = 'CUSTOM';
    public const FEED_TO_SEARCH_ProjectListV30DataListKeywordsBidType = 'FEED_TO_SEARCH';
    public const WITH_PROMOTION_ProjectListV30DataListKeywordsBidType = 'WITH_PROMOTION';

    public const ALLOWED_VALUES = [
        self::CUSTOM_ProjectListV30DataListKeywordsBidType,
        self::FEED_TO_SEARCH_ProjectListV30DataListKeywordsBidType,
        self::WITH_PROMOTION_ProjectListV30DataListKeywordsBidType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ProjectListV30DataListKeywordsBidType', $value));
        }
        return (string) $value;
    }
}
