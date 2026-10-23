<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CreativeCustomCreativeUpdateV2AdDataSupplementsGamesOrientation
{
    public const HORIZONTAL_CreativeCustomCreativeUpdateV2AdDataSupplementsGamesOrientation = 'HORIZONTAL';
    public const VERTICAL_CreativeCustomCreativeUpdateV2AdDataSupplementsGamesOrientation = 'VERTICAL';

    public const ALLOWED_VALUES = [
        self::HORIZONTAL_CreativeCustomCreativeUpdateV2AdDataSupplementsGamesOrientation,
        self::VERTICAL_CreativeCustomCreativeUpdateV2AdDataSupplementsGamesOrientation,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CreativeCustomCreativeUpdateV2AdDataSupplementsGamesOrientation', $value));
        }
        return (string) $value;
    }
}
