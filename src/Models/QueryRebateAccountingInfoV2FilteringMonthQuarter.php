<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QueryRebateAccountingInfoV2FilteringMonthQuarter
{
    public const ALL_YEAR_QueryRebateAccountingInfoV2FilteringMonthQuarter = 'AllYear';
    public const APR_QueryRebateAccountingInfoV2FilteringMonthQuarter = 'Apr';
    public const AUG_QueryRebateAccountingInfoV2FilteringMonthQuarter = 'Aug';
    public const DEC_QueryRebateAccountingInfoV2FilteringMonthQuarter = 'Dec';
    public const FEB_QueryRebateAccountingInfoV2FilteringMonthQuarter = 'Feb';
    public const FIR_HALF_QueryRebateAccountingInfoV2FilteringMonthQuarter = 'FirHalf';
    public const JAN_QueryRebateAccountingInfoV2FilteringMonthQuarter = 'Jan';
    public const JUL_QueryRebateAccountingInfoV2FilteringMonthQuarter = 'Jul';
    public const JUN_QueryRebateAccountingInfoV2FilteringMonthQuarter = 'Jun';
    public const MAR_QueryRebateAccountingInfoV2FilteringMonthQuarter = 'Mar';
    public const MAY_QueryRebateAccountingInfoV2FilteringMonthQuarter = 'May';
    public const NOV_QueryRebateAccountingInfoV2FilteringMonthQuarter = 'Nov';
    public const OCT_QueryRebateAccountingInfoV2FilteringMonthQuarter = 'Oct';
    public const Q1_QueryRebateAccountingInfoV2FilteringMonthQuarter = 'Q1';
    public const Q2_QueryRebateAccountingInfoV2FilteringMonthQuarter = 'Q2';
    public const Q3_QueryRebateAccountingInfoV2FilteringMonthQuarter = 'Q3';
    public const Q4_QueryRebateAccountingInfoV2FilteringMonthQuarter = 'Q4';
    public const SEC_HALF_QueryRebateAccountingInfoV2FilteringMonthQuarter = 'SecHalf';
    public const SEP_QueryRebateAccountingInfoV2FilteringMonthQuarter = 'Sep';

    public const ALLOWED_VALUES = [
        self::ALL_YEAR_QueryRebateAccountingInfoV2FilteringMonthQuarter,
        self::APR_QueryRebateAccountingInfoV2FilteringMonthQuarter,
        self::AUG_QueryRebateAccountingInfoV2FilteringMonthQuarter,
        self::DEC_QueryRebateAccountingInfoV2FilteringMonthQuarter,
        self::FEB_QueryRebateAccountingInfoV2FilteringMonthQuarter,
        self::FIR_HALF_QueryRebateAccountingInfoV2FilteringMonthQuarter,
        self::JAN_QueryRebateAccountingInfoV2FilteringMonthQuarter,
        self::JUL_QueryRebateAccountingInfoV2FilteringMonthQuarter,
        self::JUN_QueryRebateAccountingInfoV2FilteringMonthQuarter,
        self::MAR_QueryRebateAccountingInfoV2FilteringMonthQuarter,
        self::MAY_QueryRebateAccountingInfoV2FilteringMonthQuarter,
        self::NOV_QueryRebateAccountingInfoV2FilteringMonthQuarter,
        self::OCT_QueryRebateAccountingInfoV2FilteringMonthQuarter,
        self::Q1_QueryRebateAccountingInfoV2FilteringMonthQuarter,
        self::Q2_QueryRebateAccountingInfoV2FilteringMonthQuarter,
        self::Q3_QueryRebateAccountingInfoV2FilteringMonthQuarter,
        self::Q4_QueryRebateAccountingInfoV2FilteringMonthQuarter,
        self::SEC_HALF_QueryRebateAccountingInfoV2FilteringMonthQuarter,
        self::SEP_QueryRebateAccountingInfoV2FilteringMonthQuarter,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QueryRebateAccountingInfoV2FilteringMonthQuarter', $value));
        }
        return (string) $value;
    }
}
