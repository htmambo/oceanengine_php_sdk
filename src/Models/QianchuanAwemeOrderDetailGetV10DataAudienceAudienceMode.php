<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAwemeOrderDetailGetV10DataAudienceAudienceMode
{
    public const ATUO_QianchuanAwemeOrderDetailGetV10DataAudienceAudienceMode = 'ATUO';
    public const CUSTOM_QianchuanAwemeOrderDetailGetV10DataAudienceAudienceMode = 'CUSTOM';
    public const FANS_QianchuanAwemeOrderDetailGetV10DataAudienceAudienceMode = 'FANS';
    public const LIVEFANS_QianchuanAwemeOrderDetailGetV10DataAudienceAudienceMode = 'LIVEFANS';

    public const ALLOWED_VALUES = [
        self::ATUO_QianchuanAwemeOrderDetailGetV10DataAudienceAudienceMode,
        self::CUSTOM_QianchuanAwemeOrderDetailGetV10DataAudienceAudienceMode,
        self::FANS_QianchuanAwemeOrderDetailGetV10DataAudienceAudienceMode,
        self::LIVEFANS_QianchuanAwemeOrderDetailGetV10DataAudienceAudienceMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAwemeOrderDetailGetV10DataAudienceAudienceMode', $value));
        }
        return (string) $value;
    }
}
