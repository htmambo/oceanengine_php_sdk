<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StdProjectCreateV30BidType
{
    public const CUSTOM_StdProjectCreateV30BidType = 'CUSTOM';
    public const NO_BID_StdProjectCreateV30BidType = 'NO_BID';

    public const ALLOWED_VALUES = [
        self::CUSTOM_StdProjectCreateV30BidType,
        self::NO_BID_StdProjectCreateV30BidType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StdProjectCreateV30BidType', $value));
        }
        return (string) $value;
    }
}
