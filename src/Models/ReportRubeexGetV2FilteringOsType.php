<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ReportRubeexGetV2FilteringOsType
{
    public const IOS_ReportRubeexGetV2FilteringOsType = 'ios';
    public const ANDROID_ReportRubeexGetV2FilteringOsType = 'android';

    public const ALLOWED_VALUES = [
        self::IOS_ReportRubeexGetV2FilteringOsType,
        self::ANDROID_ReportRubeexGetV2FilteringOsType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ReportRubeexGetV2FilteringOsType', $value));
        }
        return (string) $value;
    }
}
