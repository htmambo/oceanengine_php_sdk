<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAdvertiserTypeGetV10DataListEcpType
{
    public const SHOP_QianchuanAdvertiserTypeGetV10DataListEcpType = 'SHOP';
    public const SHOP_STAR_QianchuanAdvertiserTypeGetV10DataListEcpType = 'SHOP_STAR';
    public const COMMON_STAR_QianchuanAdvertiserTypeGetV10DataListEcpType = 'COMMON_STAR';
    public const AGENT_QianchuanAdvertiserTypeGetV10DataListEcpType = 'AGENT';

    public const ALLOWED_VALUES = [
        self::SHOP_QianchuanAdvertiserTypeGetV10DataListEcpType,
        self::SHOP_STAR_QianchuanAdvertiserTypeGetV10DataListEcpType,
        self::COMMON_STAR_QianchuanAdvertiserTypeGetV10DataListEcpType,
        self::AGENT_QianchuanAdvertiserTypeGetV10DataListEcpType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAdvertiserTypeGetV10DataListEcpType', $value));
        }
        return (string) $value;
    }
}
