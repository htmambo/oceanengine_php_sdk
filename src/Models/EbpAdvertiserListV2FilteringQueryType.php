<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class EbpAdvertiserListV2FilteringQueryType
{
    public const DIRECT_EbpAdvertiserListV2FilteringQueryType = 'DIRECT';
    public const TRAVERSE_EbpAdvertiserListV2FilteringQueryType = 'TRAVERSE';

    public const ALLOWED_VALUES = [
        self::DIRECT_EbpAdvertiserListV2FilteringQueryType,
        self::TRAVERSE_EbpAdvertiserListV2FilteringQueryType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum EbpAdvertiserListV2FilteringQueryType', $value));
        }
        return (string) $value;
    }
}
