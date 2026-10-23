<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanOverallAwemeListV10DataBindAwemeUserInfosAllianceInfoReason
{
    public const AUTH_ON_FXG_QianchuanOverallAwemeListV10DataBindAwemeUserInfosAllianceInfoReason = 'AUTH_ON_FXG';
    public const AWEMW_HAS_COST_QianchuanOverallAwemeListV10DataBindAwemeUserInfosAllianceInfoReason = 'AWEMW_HAS_COST';
    public const SWITCH_OFF_QianchuanOverallAwemeListV10DataBindAwemeUserInfosAllianceInfoReason = 'SWITCH_OFF';

    public const ALLOWED_VALUES = [
        self::AUTH_ON_FXG_QianchuanOverallAwemeListV10DataBindAwemeUserInfosAllianceInfoReason,
        self::AWEMW_HAS_COST_QianchuanOverallAwemeListV10DataBindAwemeUserInfosAllianceInfoReason,
        self::SWITCH_OFF_QianchuanOverallAwemeListV10DataBindAwemeUserInfosAllianceInfoReason,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanOverallAwemeListV10DataBindAwemeUserInfosAllianceInfoReason', $value));
        }
        return (string) $value;
    }
}
