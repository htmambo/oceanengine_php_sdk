<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class DouplusOrderCreateV30ObjectInfosMarketingGoal
{
    public const VIDEO_PROM_GOODS_DouplusOrderCreateV30ObjectInfosMarketingGoal = 'VIDEO_PROM_GOODS';
    public const LIVE_PROM_GOODS_DouplusOrderCreateV30ObjectInfosMarketingGoal = 'LIVE_PROM_GOODS';

    public const ALLOWED_VALUES = [
        self::VIDEO_PROM_GOODS_DouplusOrderCreateV30ObjectInfosMarketingGoal,
        self::LIVE_PROM_GOODS_DouplusOrderCreateV30ObjectInfosMarketingGoal,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum DouplusOrderCreateV30ObjectInfosMarketingGoal', $value));
        }
        return (string) $value;
    }
}
