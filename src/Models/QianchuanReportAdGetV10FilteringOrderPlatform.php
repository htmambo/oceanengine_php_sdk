<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanReportAdGetV10FilteringOrderPlatform
{
    public const ALL_QianchuanReportAdGetV10FilteringOrderPlatform = 'ALL';
    public const ECP_AWEME_QianchuanReportAdGetV10FilteringOrderPlatform = 'ECP_AWEME';
    public const QIANCHUAN_QianchuanReportAdGetV10FilteringOrderPlatform = 'QIANCHUAN';

    public const ALLOWED_VALUES = [
        self::ALL_QianchuanReportAdGetV10FilteringOrderPlatform,
        self::ECP_AWEME_QianchuanReportAdGetV10FilteringOrderPlatform,
        self::QIANCHUAN_QianchuanReportAdGetV10FilteringOrderPlatform,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanReportAdGetV10FilteringOrderPlatform', $value));
        }
        return (string) $value;
    }
}
