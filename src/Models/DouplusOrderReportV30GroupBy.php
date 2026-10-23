<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class DouplusOrderReportV30GroupBy
{
    public const GROUP_BY_AD_ID_DouplusOrderReportV30GroupBy = 'GROUP_BY_AD_ID';
    public const GROUP_BY_CREATIVE_ID_DouplusOrderReportV30GroupBy = 'GROUP_BY_CREATIVE_ID';

    public const ALLOWED_VALUES = [
        self::GROUP_BY_AD_ID_DouplusOrderReportV30GroupBy,
        self::GROUP_BY_CREATIVE_ID_DouplusOrderReportV30GroupBy,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum DouplusOrderReportV30GroupBy', $value));
        }
        return (string) $value;
    }
}
