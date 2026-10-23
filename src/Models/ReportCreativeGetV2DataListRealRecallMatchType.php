<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ReportCreativeGetV2DataListRealRecallMatchType
{
    public const EXTENSIVE_ReportCreativeGetV2DataListRealRecallMatchType = 'EXTENSIVE';
    public const PRECISION_ReportCreativeGetV2DataListRealRecallMatchType = 'PRECISION';
    public const PHRASE_ReportCreativeGetV2DataListRealRecallMatchType = 'PHRASE';

    public const ALLOWED_VALUES = [
        self::EXTENSIVE_ReportCreativeGetV2DataListRealRecallMatchType,
        self::PRECISION_ReportCreativeGetV2DataListRealRecallMatchType,
        self::PHRASE_ReportCreativeGetV2DataListRealRecallMatchType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ReportCreativeGetV2DataListRealRecallMatchType', $value));
        }
        return (string) $value;
    }
}
