<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class DpaBrandFuzzyGetV30DataBrandDetailListBrandType
{
    public const TRADEMARK_DpaBrandFuzzyGetV30DataBrandDetailListBrandType = 'TRADEMARK';

    public const ALLOWED_VALUES = [
        self::TRADEMARK_DpaBrandFuzzyGetV30DataBrandDetailListBrandType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum DpaBrandFuzzyGetV30DataBrandDetailListBrandType', $value));
        }
        return (string) $value;
    }
}
