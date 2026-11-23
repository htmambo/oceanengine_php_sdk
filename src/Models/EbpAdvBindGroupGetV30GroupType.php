<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class EbpAdvBindGroupGetV30GroupType
{
    public const BP_NORMAL_EbpAdvBindGroupGetV30GroupType = 'BP_NORMAL';
    public const BP_SVIP_EbpAdvBindGroupGetV30GroupType = 'BP_SVIP';
    public const EBP_EbpAdvBindGroupGetV30GroupType = 'EBP';

    public const ALLOWED_VALUES = [
        self::BP_NORMAL_EbpAdvBindGroupGetV30GroupType,
        self::BP_SVIP_EbpAdvBindGroupGetV30GroupType,
        self::EBP_EbpAdvBindGroupGetV30GroupType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum EbpAdvBindGroupGetV30GroupType', $value));
        }
        return (string) $value;
    }
}
