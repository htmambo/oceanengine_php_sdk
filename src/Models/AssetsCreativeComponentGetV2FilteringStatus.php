<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AssetsCreativeComponentGetV2FilteringStatus
{
    public const PASS_AssetsCreativeComponentGetV2FilteringStatus = 'PASS';
    public const REJECT_AssetsCreativeComponentGetV2FilteringStatus = 'REJECT';
    public const UNDER_AssetsCreativeComponentGetV2FilteringStatus = 'UNDER';

    public const ALLOWED_VALUES = [
        self::PASS_AssetsCreativeComponentGetV2FilteringStatus,
        self::REJECT_AssetsCreativeComponentGetV2FilteringStatus,
        self::UNDER_AssetsCreativeComponentGetV2FilteringStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AssetsCreativeComponentGetV2FilteringStatus', $value));
        }
        return (string) $value;
    }
}
