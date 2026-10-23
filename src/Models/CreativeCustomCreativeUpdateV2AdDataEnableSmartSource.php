<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CreativeCustomCreativeUpdateV2AdDataEnableSmartSource
{
    public const OFF_CreativeCustomCreativeUpdateV2AdDataEnableSmartSource = 'OFF';
    public const ON_CreativeCustomCreativeUpdateV2AdDataEnableSmartSource = 'ON';

    public const ALLOWED_VALUES = [
        self::OFF_CreativeCustomCreativeUpdateV2AdDataEnableSmartSource,
        self::ON_CreativeCustomCreativeUpdateV2AdDataEnableSmartSource,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CreativeCustomCreativeUpdateV2AdDataEnableSmartSource', $value));
        }
        return (string) $value;
    }
}
