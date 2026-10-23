<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ClueCouponGetV2ActivityTypes
{
    public const DIRECT_NEED_PHONE_ClueCouponGetV2ActivityTypes = 'DIRECT_NEED_PHONE';
    public const DIRECT_NOT_NEED_PHONE_ClueCouponGetV2ActivityTypes = 'DIRECT_NOT_NEED_PHONE';

    public const ALLOWED_VALUES = [
        self::DIRECT_NEED_PHONE_ClueCouponGetV2ActivityTypes,
        self::DIRECT_NOT_NEED_PHONE_ClueCouponGetV2ActivityTypes,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ClueCouponGetV2ActivityTypes', $value));
        }
        return (string) $value;
    }
}
