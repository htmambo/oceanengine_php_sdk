<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ProjectUpdateV30KeywordsMatchType
{
    public const EXTENSIVE_ProjectUpdateV30KeywordsMatchType = 'EXTENSIVE';
    public const PHRASE_ProjectUpdateV30KeywordsMatchType = 'PHRASE';
    public const PRECISION_ProjectUpdateV30KeywordsMatchType = 'PRECISION';

    public const ALLOWED_VALUES = [
        self::EXTENSIVE_ProjectUpdateV30KeywordsMatchType,
        self::PHRASE_ProjectUpdateV30KeywordsMatchType,
        self::PRECISION_ProjectUpdateV30KeywordsMatchType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ProjectUpdateV30KeywordsMatchType', $value));
        }
        return (string) $value;
    }
}
