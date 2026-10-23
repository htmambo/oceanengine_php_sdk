<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalOcProjectGetV30DataAudienceAutoExtendTargets
{
    public const OFF_LocalOcProjectGetV30DataAudienceAutoExtendTargets = 'OFF';
    public const ON_LocalOcProjectGetV30DataAudienceAutoExtendTargets = 'ON';

    public const ALLOWED_VALUES = [
        self::OFF_LocalOcProjectGetV30DataAudienceAutoExtendTargets,
        self::ON_LocalOcProjectGetV30DataAudienceAutoExtendTargets,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalOcProjectGetV30DataAudienceAutoExtendTargets', $value));
        }
        return (string) $value;
    }
}
