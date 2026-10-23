<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CreativeDetailGetV30DataAdDataSupplementsGamesOrientation
{
    public const VERTICAL_CreativeDetailGetV30DataAdDataSupplementsGamesOrientation = 'VERTICAL';
    public const HORIZONTAL_CreativeDetailGetV30DataAdDataSupplementsGamesOrientation = 'HORIZONTAL';

    public const ALLOWED_VALUES = [
        self::VERTICAL_CreativeDetailGetV30DataAdDataSupplementsGamesOrientation,
        self::HORIZONTAL_CreativeDetailGetV30DataAdDataSupplementsGamesOrientation,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CreativeDetailGetV30DataAdDataSupplementsGamesOrientation', $value));
        }
        return (string) $value;
    }
}
