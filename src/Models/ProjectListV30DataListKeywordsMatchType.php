<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ProjectListV30DataListKeywordsMatchType
{
    public const EXTENSIVE_ProjectListV30DataListKeywordsMatchType = 'EXTENSIVE';
    public const PHRASE_ProjectListV30DataListKeywordsMatchType = 'PHRASE';
    public const PRECISION_ProjectListV30DataListKeywordsMatchType = 'PRECISION';

    public const ALLOWED_VALUES = [
        self::EXTENSIVE_ProjectListV30DataListKeywordsMatchType,
        self::PHRASE_ProjectListV30DataListKeywordsMatchType,
        self::PRECISION_ProjectListV30DataListKeywordsMatchType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ProjectListV30DataListKeywordsMatchType', $value));
        }
        return (string) $value;
    }
}
