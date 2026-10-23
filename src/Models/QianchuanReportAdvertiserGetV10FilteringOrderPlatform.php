<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanReportAdvertiserGetV10FilteringOrderPlatform
{
    public const ALL_QianchuanReportAdvertiserGetV10FilteringOrderPlatform = 'ALL';
    public const ECP_AWEME_QianchuanReportAdvertiserGetV10FilteringOrderPlatform = 'ECP_AWEME';
    public const QIANCHUAN_QianchuanReportAdvertiserGetV10FilteringOrderPlatform = 'QIANCHUAN';

    public const ALLOWED_VALUES = [
        self::ALL_QianchuanReportAdvertiserGetV10FilteringOrderPlatform,
        self::ECP_AWEME_QianchuanReportAdvertiserGetV10FilteringOrderPlatform,
        self::QIANCHUAN_QianchuanReportAdvertiserGetV10FilteringOrderPlatform,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanReportAdvertiserGetV10FilteringOrderPlatform', $value));
        }
        return (string) $value;
    }
}
