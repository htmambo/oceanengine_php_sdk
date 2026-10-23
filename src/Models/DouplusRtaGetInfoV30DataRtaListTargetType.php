<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class DouplusRtaGetInfoV30DataRtaListTargetType
{
    public const ADV_DouplusRtaGetInfoV30DataRtaListTargetType = 'ADV';
    public const ORDER_DouplusRtaGetInfoV30DataRtaListTargetType = 'ORDER';
    public const NONE_DouplusRtaGetInfoV30DataRtaListTargetType = 'NONE';

    public const ALLOWED_VALUES = [
        self::ADV_DouplusRtaGetInfoV30DataRtaListTargetType,
        self::ORDER_DouplusRtaGetInfoV30DataRtaListTargetType,
        self::NONE_DouplusRtaGetInfoV30DataRtaListTargetType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum DouplusRtaGetInfoV30DataRtaListTargetType', $value));
        }
        return (string) $value;
    }
}
