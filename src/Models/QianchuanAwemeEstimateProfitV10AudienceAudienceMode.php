<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAwemeEstimateProfitV10AudienceAudienceMode
{
    public const ATUO_QianchuanAwemeEstimateProfitV10AudienceAudienceMode = 'ATUO';
    public const CUSTOM_QianchuanAwemeEstimateProfitV10AudienceAudienceMode = 'CUSTOM';
    public const FANS_QianchuanAwemeEstimateProfitV10AudienceAudienceMode = 'FANS';
    public const LIVEFANS_QianchuanAwemeEstimateProfitV10AudienceAudienceMode = 'LIVEFANS';

    public const ALLOWED_VALUES = [
        self::ATUO_QianchuanAwemeEstimateProfitV10AudienceAudienceMode,
        self::CUSTOM_QianchuanAwemeEstimateProfitV10AudienceAudienceMode,
        self::FANS_QianchuanAwemeEstimateProfitV10AudienceAudienceMode,
        self::LIVEFANS_QianchuanAwemeEstimateProfitV10AudienceAudienceMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAwemeEstimateProfitV10AudienceAudienceMode', $value));
        }
        return (string) $value;
    }
}
