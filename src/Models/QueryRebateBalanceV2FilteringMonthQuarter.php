<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QueryRebateBalanceV2FilteringMonthQuarter
{
    public const ALL_YEAR_QueryRebateBalanceV2FilteringMonthQuarter = 'AllYear';
    public const APR_QueryRebateBalanceV2FilteringMonthQuarter = 'Apr';
    public const AUG_QueryRebateBalanceV2FilteringMonthQuarter = 'Aug';
    public const DEC_QueryRebateBalanceV2FilteringMonthQuarter = 'Dec';
    public const FEB_QueryRebateBalanceV2FilteringMonthQuarter = 'Feb';
    public const FIR_HALF_QueryRebateBalanceV2FilteringMonthQuarter = 'FirHalf';
    public const JAN_QueryRebateBalanceV2FilteringMonthQuarter = 'Jan';
    public const JUL_QueryRebateBalanceV2FilteringMonthQuarter = 'Jul';
    public const JUN_QueryRebateBalanceV2FilteringMonthQuarter = 'Jun';
    public const MAR_QueryRebateBalanceV2FilteringMonthQuarter = 'Mar';
    public const MAY_QueryRebateBalanceV2FilteringMonthQuarter = 'May';
    public const NOV_QueryRebateBalanceV2FilteringMonthQuarter = 'Nov';
    public const OCT_QueryRebateBalanceV2FilteringMonthQuarter = 'Oct';
    public const Q1_QueryRebateBalanceV2FilteringMonthQuarter = 'Q1';
    public const Q2_QueryRebateBalanceV2FilteringMonthQuarter = 'Q2';
    public const Q3_QueryRebateBalanceV2FilteringMonthQuarter = 'Q3';
    public const Q4_QueryRebateBalanceV2FilteringMonthQuarter = 'Q4';
    public const SEC_HALF_QueryRebateBalanceV2FilteringMonthQuarter = 'SecHalf';
    public const SEP_QueryRebateBalanceV2FilteringMonthQuarter = 'Sep';

    public const ALLOWED_VALUES = [
        self::ALL_YEAR_QueryRebateBalanceV2FilteringMonthQuarter,
        self::APR_QueryRebateBalanceV2FilteringMonthQuarter,
        self::AUG_QueryRebateBalanceV2FilteringMonthQuarter,
        self::DEC_QueryRebateBalanceV2FilteringMonthQuarter,
        self::FEB_QueryRebateBalanceV2FilteringMonthQuarter,
        self::FIR_HALF_QueryRebateBalanceV2FilteringMonthQuarter,
        self::JAN_QueryRebateBalanceV2FilteringMonthQuarter,
        self::JUL_QueryRebateBalanceV2FilteringMonthQuarter,
        self::JUN_QueryRebateBalanceV2FilteringMonthQuarter,
        self::MAR_QueryRebateBalanceV2FilteringMonthQuarter,
        self::MAY_QueryRebateBalanceV2FilteringMonthQuarter,
        self::NOV_QueryRebateBalanceV2FilteringMonthQuarter,
        self::OCT_QueryRebateBalanceV2FilteringMonthQuarter,
        self::Q1_QueryRebateBalanceV2FilteringMonthQuarter,
        self::Q2_QueryRebateBalanceV2FilteringMonthQuarter,
        self::Q3_QueryRebateBalanceV2FilteringMonthQuarter,
        self::Q4_QueryRebateBalanceV2FilteringMonthQuarter,
        self::SEC_HALF_QueryRebateBalanceV2FilteringMonthQuarter,
        self::SEP_QueryRebateBalanceV2FilteringMonthQuarter,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QueryRebateBalanceV2FilteringMonthQuarter', $value));
        }
        return (string) $value;
    }
}
