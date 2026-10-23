<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ReportAdGetV2DataListRealRecallMatchType
{
    public const EXTENSIVE_ReportAdGetV2DataListRealRecallMatchType = 'EXTENSIVE';
    public const PRECISION_ReportAdGetV2DataListRealRecallMatchType = 'PRECISION';
    public const PHRASE_ReportAdGetV2DataListRealRecallMatchType = 'PHRASE';

    public const ALLOWED_VALUES = [
        self::EXTENSIVE_ReportAdGetV2DataListRealRecallMatchType,
        self::PRECISION_ReportAdGetV2DataListRealRecallMatchType,
        self::PHRASE_ReportAdGetV2DataListRealRecallMatchType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ReportAdGetV2DataListRealRecallMatchType', $value));
        }
        return (string) $value;
    }
}
