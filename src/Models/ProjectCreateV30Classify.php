<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ProjectCreateV30Classify
{
    public const CLASSIFY_APPORTION_ProjectCreateV30Classify = 'CLASSIFY_APPORTION';
    public const CLASSIFY_EXCHANGE_ProjectCreateV30Classify = 'CLASSIFY_EXCHANGE';
    public const CLASSIFY_INTERNAL_ProjectCreateV30Classify = 'CLASSIFY_INTERNAL';
    public const CLASSIFY_SALE_ProjectCreateV30Classify = 'CLASSIFY_SALE';
    public const CLASSIFY_SUPPLEMENT_ProjectCreateV30Classify = 'CLASSIFY_SUPPLEMENT';

    public const ALLOWED_VALUES = [
        self::CLASSIFY_APPORTION_ProjectCreateV30Classify,
        self::CLASSIFY_EXCHANGE_ProjectCreateV30Classify,
        self::CLASSIFY_INTERNAL_ProjectCreateV30Classify,
        self::CLASSIFY_SALE_ProjectCreateV30Classify,
        self::CLASSIFY_SUPPLEMENT_ProjectCreateV30Classify,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ProjectCreateV30Classify', $value));
        }
        return (string) $value;
    }
}
