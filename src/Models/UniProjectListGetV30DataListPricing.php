<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class UniProjectListGetV30DataListPricing
{
    public const OCPM_UniProjectListGetV30DataListPricing = 'OCPM';
    public const OCPM_CPS2_UniProjectListGetV30DataListPricing = 'OCPM_CPS2';

    public const ALLOWED_VALUES = [
        self::OCPM_UniProjectListGetV30DataListPricing,
        self::OCPM_CPS2_UniProjectListGetV30DataListPricing,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum UniProjectListGetV30DataListPricing', $value));
        }
        return (string) $value;
    }
}
