<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsClueLifeGetV2DataListProductType
{
    public const GROUPON_ToolsClueLifeGetV2DataListProductType = 'GROUPON';
    public const VOUCHER_ToolsClueLifeGetV2DataListProductType = 'VOUCHER';
    public const TIMES_CARD_ToolsClueLifeGetV2DataListProductType = 'TIMES_CARD';
    public const APPOINTMENT_ToolsClueLifeGetV2DataListProductType = 'APPOINTMENT';
    public const CLUE_COLLECTOR_ToolsClueLifeGetV2DataListProductType = 'CLUE_COLLECTOR';
    public const CLUE_COLLECTOR_JOIN_INVESTMENT_ToolsClueLifeGetV2DataListProductType = 'CLUE_COLLECTOR_JOIN_INVESTMENT';
    public const OTHER_ToolsClueLifeGetV2DataListProductType = 'OTHER';

    public const ALLOWED_VALUES = [
        self::GROUPON_ToolsClueLifeGetV2DataListProductType,
        self::VOUCHER_ToolsClueLifeGetV2DataListProductType,
        self::TIMES_CARD_ToolsClueLifeGetV2DataListProductType,
        self::APPOINTMENT_ToolsClueLifeGetV2DataListProductType,
        self::CLUE_COLLECTOR_ToolsClueLifeGetV2DataListProductType,
        self::CLUE_COLLECTOR_JOIN_INVESTMENT_ToolsClueLifeGetV2DataListProductType,
        self::OTHER_ToolsClueLifeGetV2DataListProductType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsClueLifeGetV2DataListProductType', $value));
        }
        return (string) $value;
    }
}
