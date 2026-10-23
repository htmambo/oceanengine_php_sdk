<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CreativeCustomCreativeCreateV2AdDataSupplementsGamesOrientation
{
    public const HORIZONTAL_CreativeCustomCreativeCreateV2AdDataSupplementsGamesOrientation = 'HORIZONTAL';
    public const VERTICAL_CreativeCustomCreativeCreateV2AdDataSupplementsGamesOrientation = 'VERTICAL';

    public const ALLOWED_VALUES = [
        self::HORIZONTAL_CreativeCustomCreativeCreateV2AdDataSupplementsGamesOrientation,
        self::VERTICAL_CreativeCustomCreativeCreateV2AdDataSupplementsGamesOrientation,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CreativeCustomCreativeCreateV2AdDataSupplementsGamesOrientation', $value));
        }
        return (string) $value;
    }
}
