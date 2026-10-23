<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QueryProjectV30FilteringServingTypeList
{
    public const PINPAI_QueryProjectV30FilteringServingTypeList = 'PINPAI';
    public const PINPAIPMP_QueryProjectV30FilteringServingTypeList = 'PINPAIPMP';
    public const XIAOGUO_QueryProjectV30FilteringServingTypeList = 'XIAOGUO';
    public const XIAOGUO_RTB_QueryProjectV30FilteringServingTypeList = 'XIAOGUO_RTB';

    public const ALLOWED_VALUES = [
        self::PINPAI_QueryProjectV30FilteringServingTypeList,
        self::PINPAIPMP_QueryProjectV30FilteringServingTypeList,
        self::XIAOGUO_QueryProjectV30FilteringServingTypeList,
        self::XIAOGUO_RTB_QueryProjectV30FilteringServingTypeList,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QueryProjectV30FilteringServingTypeList', $value));
        }
        return (string) $value;
    }
}
