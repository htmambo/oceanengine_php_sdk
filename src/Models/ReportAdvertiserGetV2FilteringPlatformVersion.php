<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ReportAdvertiserGetV2FilteringPlatformVersion
{
    public const V1_ReportAdvertiserGetV2FilteringPlatformVersion = 'V1';
    public const V2_ReportAdvertiserGetV2FilteringPlatformVersion = 'V2';
    public const ALL_ReportAdvertiserGetV2FilteringPlatformVersion = 'ALL';

    public const ALLOWED_VALUES = [
        self::V1_ReportAdvertiserGetV2FilteringPlatformVersion,
        self::V2_ReportAdvertiserGetV2FilteringPlatformVersion,
        self::ALL_ReportAdvertiserGetV2FilteringPlatformVersion,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ReportAdvertiserGetV2FilteringPlatformVersion', $value));
        }
        return (string) $value;
    }
}
