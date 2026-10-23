<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CreativeDetailGetV30DataAdDataEnableSmartSource
{
    public const OFF_CreativeDetailGetV30DataAdDataEnableSmartSource = 'OFF';
    public const ON_CreativeDetailGetV30DataAdDataEnableSmartSource = 'ON';

    public const ALLOWED_VALUES = [
        self::OFF_CreativeDetailGetV30DataAdDataEnableSmartSource,
        self::ON_CreativeDetailGetV30DataAdDataEnableSmartSource,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CreativeDetailGetV30DataAdDataEnableSmartSource', $value));
        }
        return (string) $value;
    }
}
