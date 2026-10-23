<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class EbpAdvertiserAllListV30QueryType
{
    public const DIRECT_EbpAdvertiserAllListV30QueryType = 'DIRECT';
    public const TRAVERSE_EbpAdvertiserAllListV30QueryType = 'TRAVERSE';

    public const ALLOWED_VALUES = [
        self::DIRECT_EbpAdvertiserAllListV30QueryType,
        self::TRAVERSE_EbpAdvertiserAllListV30QueryType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum EbpAdvertiserAllListV30QueryType', $value));
        }
        return (string) $value;
    }
}
