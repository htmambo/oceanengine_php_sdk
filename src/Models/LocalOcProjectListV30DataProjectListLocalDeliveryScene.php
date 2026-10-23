<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalOcProjectListV30DataProjectListLocalDeliveryScene
{
    public const EXTERNAL_LocalOcProjectListV30DataProjectListLocalDeliveryScene = 'EXTERNAL';

    public const ALLOWED_VALUES = [
        self::EXTERNAL_LocalOcProjectListV30DataProjectListLocalDeliveryScene,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalOcProjectListV30DataProjectListLocalDeliveryScene', $value));
        }
        return (string) $value;
    }
}
