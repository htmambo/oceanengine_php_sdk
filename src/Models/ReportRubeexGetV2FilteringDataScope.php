<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ReportRubeexGetV2FilteringDataScope
{
    public const ALL_ReportRubeexGetV2FilteringDataScope = 'ALL';
    public const ADV_ReportRubeexGetV2FilteringDataScope = 'ADV';

    public const ALLOWED_VALUES = [
        self::ALL_ReportRubeexGetV2FilteringDataScope,
        self::ADV_ReportRubeexGetV2FilteringDataScope,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ReportRubeexGetV2FilteringDataScope', $value));
        }
        return (string) $value;
    }
}
