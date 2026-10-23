<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CreativeCustomCreativeCreateV2AdDataEnableSmartSource
{
    public const OFF_CreativeCustomCreativeCreateV2AdDataEnableSmartSource = 'OFF';
    public const ON_CreativeCustomCreativeCreateV2AdDataEnableSmartSource = 'ON';

    public const ALLOWED_VALUES = [
        self::OFF_CreativeCustomCreativeCreateV2AdDataEnableSmartSource,
        self::ON_CreativeCustomCreativeCreateV2AdDataEnableSmartSource,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CreativeCustomCreativeCreateV2AdDataEnableSmartSource', $value));
        }
        return (string) $value;
    }
}
