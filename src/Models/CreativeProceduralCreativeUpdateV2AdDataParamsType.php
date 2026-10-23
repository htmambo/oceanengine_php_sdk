<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CreativeProceduralCreativeUpdateV2AdDataParamsType
{
    public const DPA_CreativeProceduralCreativeUpdateV2AdDataParamsType = 'DPA';
    public const CUSTOM_CreativeProceduralCreativeUpdateV2AdDataParamsType = 'CUSTOM';

    public const ALLOWED_VALUES = [
        self::DPA_CreativeProceduralCreativeUpdateV2AdDataParamsType,
        self::CUSTOM_CreativeProceduralCreativeUpdateV2AdDataParamsType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CreativeProceduralCreativeUpdateV2AdDataParamsType', $value));
        }
        return (string) $value;
    }
}
