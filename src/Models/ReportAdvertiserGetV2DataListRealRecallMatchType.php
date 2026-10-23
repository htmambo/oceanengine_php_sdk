<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ReportAdvertiserGetV2DataListRealRecallMatchType
{
    public const EXTENSIVE_ReportAdvertiserGetV2DataListRealRecallMatchType = 'EXTENSIVE';
    public const PRECISION_ReportAdvertiserGetV2DataListRealRecallMatchType = 'PRECISION';
    public const PHRASE_ReportAdvertiserGetV2DataListRealRecallMatchType = 'PHRASE';

    public const ALLOWED_VALUES = [
        self::EXTENSIVE_ReportAdvertiserGetV2DataListRealRecallMatchType,
        self::PRECISION_ReportAdvertiserGetV2DataListRealRecallMatchType,
        self::PHRASE_ReportAdvertiserGetV2DataListRealRecallMatchType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ReportAdvertiserGetV2DataListRealRecallMatchType', $value));
        }
        return (string) $value;
    }
}
