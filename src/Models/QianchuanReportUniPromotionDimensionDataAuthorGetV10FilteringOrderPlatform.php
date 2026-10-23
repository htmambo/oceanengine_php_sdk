<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanReportUniPromotionDimensionDataAuthorGetV10FilteringOrderPlatform
{
    public const ALL_QianchuanReportUniPromotionDimensionDataAuthorGetV10FilteringOrderPlatform = 'ALL';
    public const ECP_AWEME_QianchuanReportUniPromotionDimensionDataAuthorGetV10FilteringOrderPlatform = 'ECP_AWEME';
    public const QIANCHUAN_QianchuanReportUniPromotionDimensionDataAuthorGetV10FilteringOrderPlatform = 'QIANCHUAN';

    public const ALLOWED_VALUES = [
        self::ALL_QianchuanReportUniPromotionDimensionDataAuthorGetV10FilteringOrderPlatform,
        self::ECP_AWEME_QianchuanReportUniPromotionDimensionDataAuthorGetV10FilteringOrderPlatform,
        self::QIANCHUAN_QianchuanReportUniPromotionDimensionDataAuthorGetV10FilteringOrderPlatform,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanReportUniPromotionDimensionDataAuthorGetV10FilteringOrderPlatform', $value));
        }
        return (string) $value;
    }
}
