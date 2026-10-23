<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class DpaBrandAdvAuthFuzzyGetV30DataBrandListAvailableStatus
{
    public const INVALID_DpaBrandAdvAuthFuzzyGetV30DataBrandListAvailableStatus = 'INVALID';
    public const VALID_DpaBrandAdvAuthFuzzyGetV30DataBrandListAvailableStatus = 'VALID';

    public const ALLOWED_VALUES = [
        self::INVALID_DpaBrandAdvAuthFuzzyGetV30DataBrandListAvailableStatus,
        self::VALID_DpaBrandAdvAuthFuzzyGetV30DataBrandListAvailableStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum DpaBrandAdvAuthFuzzyGetV30DataBrandListAvailableStatus', $value));
        }
        return (string) $value;
    }
}
