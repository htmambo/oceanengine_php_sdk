<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StdProjectListV30FilteringBidType
{
    public const CUSTOM_StdProjectListV30FilteringBidType = 'CUSTOM';
    public const NO_BID_StdProjectListV30FilteringBidType = 'NO_BID';

    public const ALLOWED_VALUES = [
        self::CUSTOM_StdProjectListV30FilteringBidType,
        self::NO_BID_StdProjectListV30FilteringBidType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StdProjectListV30FilteringBidType', $value));
        }
        return (string) $value;
    }
}
