<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class DpaBrandAdvAuthFuzzyGetV30Has5aGrassBrand
{
    public const NO_DpaBrandAdvAuthFuzzyGetV30Has5aGrassBrand = 'NO';
    public const YES_DpaBrandAdvAuthFuzzyGetV30Has5aGrassBrand = 'YES';

    public const ALLOWED_VALUES = [
        self::NO_DpaBrandAdvAuthFuzzyGetV30Has5aGrassBrand,
        self::YES_DpaBrandAdvAuthFuzzyGetV30Has5aGrassBrand,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum DpaBrandAdvAuthFuzzyGetV30Has5aGrassBrand', $value));
        }
        return (string) $value;
    }
}
