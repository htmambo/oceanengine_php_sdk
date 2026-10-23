<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CreativeDetailGetV30DataAdDataParamsType
{
    public const DEFAULT_CreativeDetailGetV30DataAdDataParamsType = 'DEFAULT';
    public const CUSTOM_CreativeDetailGetV30DataAdDataParamsType = 'CUSTOM';
    public const DPA_CreativeDetailGetV30DataAdDataParamsType = 'DPA';

    public const ALLOWED_VALUES = [
        self::DEFAULT_CreativeDetailGetV30DataAdDataParamsType,
        self::CUSTOM_CreativeDetailGetV30DataAdDataParamsType,
        self::DPA_CreativeDetailGetV30DataAdDataParamsType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CreativeDetailGetV30DataAdDataParamsType', $value));
        }
        return (string) $value;
    }
}
