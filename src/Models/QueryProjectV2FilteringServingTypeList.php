<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QueryProjectV2FilteringServingTypeList
{
    public const PINPAI_QueryProjectV2FilteringServingTypeList = 'PINPAI';
    public const PINPAIPMP_QueryProjectV2FilteringServingTypeList = 'PINPAIPMP';
    public const XIAOGUO_QueryProjectV2FilteringServingTypeList = 'XIAOGUO';
    public const XIAOGUO_RTB_QueryProjectV2FilteringServingTypeList = 'XIAOGUO_RTB';

    public const ALLOWED_VALUES = [
        self::PINPAI_QueryProjectV2FilteringServingTypeList,
        self::PINPAIPMP_QueryProjectV2FilteringServingTypeList,
        self::XIAOGUO_QueryProjectV2FilteringServingTypeList,
        self::XIAOGUO_RTB_QueryProjectV2FilteringServingTypeList,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QueryProjectV2FilteringServingTypeList', $value));
        }
        return (string) $value;
    }
}
