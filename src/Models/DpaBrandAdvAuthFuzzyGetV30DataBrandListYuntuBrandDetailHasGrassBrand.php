<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class DpaBrandAdvAuthFuzzyGetV30DataBrandListYuntuBrandDetailHasGrassBrand
{
    public const NO_DpaBrandAdvAuthFuzzyGetV30DataBrandListYuntuBrandDetailHasGrassBrand = 'NO';
    public const YES_DpaBrandAdvAuthFuzzyGetV30DataBrandListYuntuBrandDetailHasGrassBrand = 'YES';

    public const ALLOWED_VALUES = [
        self::NO_DpaBrandAdvAuthFuzzyGetV30DataBrandListYuntuBrandDetailHasGrassBrand,
        self::YES_DpaBrandAdvAuthFuzzyGetV30DataBrandListYuntuBrandDetailHasGrassBrand,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum DpaBrandAdvAuthFuzzyGetV30DataBrandListYuntuBrandDetailHasGrassBrand', $value));
        }
        return (string) $value;
    }
}
