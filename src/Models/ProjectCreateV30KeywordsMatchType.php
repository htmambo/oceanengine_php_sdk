<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ProjectCreateV30KeywordsMatchType
{
    public const EXTENSIVE_ProjectCreateV30KeywordsMatchType = 'EXTENSIVE';
    public const PHRASE_ProjectCreateV30KeywordsMatchType = 'PHRASE';
    public const PRECISION_ProjectCreateV30KeywordsMatchType = 'PRECISION';

    public const ALLOWED_VALUES = [
        self::EXTENSIVE_ProjectCreateV30KeywordsMatchType,
        self::PHRASE_ProjectCreateV30KeywordsMatchType,
        self::PRECISION_ProjectCreateV30KeywordsMatchType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ProjectCreateV30KeywordsMatchType', $value));
        }
        return (string) $value;
    }
}
