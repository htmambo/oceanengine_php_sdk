<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AudiencePackageCreateV2AdType
{
    public const SEARCH_AudiencePackageCreateV2AdType = 'SEARCH';
    public const ALL_AudiencePackageCreateV2AdType = 'ALL';

    public const ALLOWED_VALUES = [
        self::SEARCH_AudiencePackageCreateV2AdType,
        self::ALL_AudiencePackageCreateV2AdType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AudiencePackageCreateV2AdType', $value));
        }
        return (string) $value;
    }
}
