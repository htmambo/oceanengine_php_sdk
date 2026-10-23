<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StdProjectListV30DataListBidType
{
    public const CUSTOM_StdProjectListV30DataListBidType = 'CUSTOM';
    public const NO_BID_StdProjectListV30DataListBidType = 'NO_BID';

    public const ALLOWED_VALUES = [
        self::CUSTOM_StdProjectListV30DataListBidType,
        self::NO_BID_StdProjectListV30DataListBidType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StdProjectListV30DataListBidType', $value));
        }
        return (string) $value;
    }
}
