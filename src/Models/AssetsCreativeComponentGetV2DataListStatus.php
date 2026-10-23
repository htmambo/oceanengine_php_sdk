<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AssetsCreativeComponentGetV2DataListStatus
{
    public const PASS_AssetsCreativeComponentGetV2DataListStatus = 'PASS';
    public const REJECT_AssetsCreativeComponentGetV2DataListStatus = 'REJECT';
    public const UNDER_AssetsCreativeComponentGetV2DataListStatus = 'UNDER';

    public const ALLOWED_VALUES = [
        self::PASS_AssetsCreativeComponentGetV2DataListStatus,
        self::REJECT_AssetsCreativeComponentGetV2DataListStatus,
        self::UNDER_AssetsCreativeComponentGetV2DataListStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AssetsCreativeComponentGetV2DataListStatus', $value));
        }
        return (string) $value;
    }
}
