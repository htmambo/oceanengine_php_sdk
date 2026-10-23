<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalFileVideoAwemeGetV30OrderFiled
{
    public const ARRIVE_SHOP_LocalFileVideoAwemeGetV30OrderFiled = 'ARRIVE_SHOP';
    public const ESTIMATE_LocalFileVideoAwemeGetV30OrderFiled = 'ESTIMATE';
    public const LIKE_CNT_LocalFileVideoAwemeGetV30OrderFiled = 'LIKE_CNT';
    public const PAY_ORDER_CNT_LocalFileVideoAwemeGetV30OrderFiled = 'PAY_ORDER_CNT';
    public const PUBLISH_TIME_LocalFileVideoAwemeGetV30OrderFiled = 'PUBLISH_TIME';

    public const ALLOWED_VALUES = [
        self::ARRIVE_SHOP_LocalFileVideoAwemeGetV30OrderFiled,
        self::ESTIMATE_LocalFileVideoAwemeGetV30OrderFiled,
        self::LIKE_CNT_LocalFileVideoAwemeGetV30OrderFiled,
        self::PAY_ORDER_CNT_LocalFileVideoAwemeGetV30OrderFiled,
        self::PUBLISH_TIME_LocalFileVideoAwemeGetV30OrderFiled,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalFileVideoAwemeGetV30OrderFiled', $value));
        }
        return (string) $value;
    }
}
