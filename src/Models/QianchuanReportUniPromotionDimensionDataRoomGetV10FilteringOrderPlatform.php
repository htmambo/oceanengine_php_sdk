<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanReportUniPromotionDimensionDataRoomGetV10FilteringOrderPlatform
{
    public const ALL_QianchuanReportUniPromotionDimensionDataRoomGetV10FilteringOrderPlatform = 'ALL';
    public const ECP_AWEME_QianchuanReportUniPromotionDimensionDataRoomGetV10FilteringOrderPlatform = 'ECP_AWEME';
    public const QIANCHUAN_QianchuanReportUniPromotionDimensionDataRoomGetV10FilteringOrderPlatform = 'QIANCHUAN';

    public const ALLOWED_VALUES = [
        self::ALL_QianchuanReportUniPromotionDimensionDataRoomGetV10FilteringOrderPlatform,
        self::ECP_AWEME_QianchuanReportUniPromotionDimensionDataRoomGetV10FilteringOrderPlatform,
        self::QIANCHUAN_QianchuanReportUniPromotionDimensionDataRoomGetV10FilteringOrderPlatform,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanReportUniPromotionDimensionDataRoomGetV10FilteringOrderPlatform', $value));
        }
        return (string) $value;
    }
}
