<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class DouplusOrderCreateV30BidType
{
    public const AUTO_BID_DouplusOrderCreateV30BidType = 'AUTO_BID';
    public const MANUAL_BID_DouplusOrderCreateV30BidType = 'MANUAL_BID';

    public const ALLOWED_VALUES = [
        self::AUTO_BID_DouplusOrderCreateV30BidType,
        self::MANUAL_BID_DouplusOrderCreateV30BidType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum DouplusOrderCreateV30BidType', $value));
        }
        return (string) $value;
    }
}
