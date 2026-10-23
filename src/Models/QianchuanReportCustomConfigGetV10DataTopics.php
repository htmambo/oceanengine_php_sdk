<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanReportCustomConfigGetV10DataTopics
{
    public const ECP_BASIC_DATA_QianchuanReportCustomConfigGetV10DataTopics = 'ECP_BASIC_DATA';
    public const SITE_PROMOTION_POST_DATA_LIVE_QianchuanReportCustomConfigGetV10DataTopics = 'SITE_PROMOTION_POST_DATA_LIVE';
    public const SITE_PROMOTION_POST_DATA_OTHER_QianchuanReportCustomConfigGetV10DataTopics = 'SITE_PROMOTION_POST_DATA_OTHER';
    public const SITE_PROMOTION_POST_DATA_TITLE_QianchuanReportCustomConfigGetV10DataTopics = 'SITE_PROMOTION_POST_DATA_TITLE';
    public const SITE_PROMOTION_POST_DATA_VIDEO_QianchuanReportCustomConfigGetV10DataTopics = 'SITE_PROMOTION_POST_DATA_VIDEO';
    public const SITE_PROMOTION_PRODUCT_POST_DATA_IMAGE_QianchuanReportCustomConfigGetV10DataTopics = 'SITE_PROMOTION_PRODUCT_POST_DATA_IMAGE';
    public const SITE_PROMOTION_PRODUCT_POST_DATA_OTHER_QianchuanReportCustomConfigGetV10DataTopics = 'SITE_PROMOTION_PRODUCT_POST_DATA_OTHER';
    public const SITE_PROMOTION_PRODUCT_POST_DATA_TITLE_QianchuanReportCustomConfigGetV10DataTopics = 'SITE_PROMOTION_PRODUCT_POST_DATA_TITLE';
    public const SITE_PROMOTION_PRODUCT_POST_DATA_VIDEO_QianchuanReportCustomConfigGetV10DataTopics = 'SITE_PROMOTION_PRODUCT_POST_DATA_VIDEO';

    public const ALLOWED_VALUES = [
        self::ECP_BASIC_DATA_QianchuanReportCustomConfigGetV10DataTopics,
        self::SITE_PROMOTION_POST_DATA_LIVE_QianchuanReportCustomConfigGetV10DataTopics,
        self::SITE_PROMOTION_POST_DATA_OTHER_QianchuanReportCustomConfigGetV10DataTopics,
        self::SITE_PROMOTION_POST_DATA_TITLE_QianchuanReportCustomConfigGetV10DataTopics,
        self::SITE_PROMOTION_POST_DATA_VIDEO_QianchuanReportCustomConfigGetV10DataTopics,
        self::SITE_PROMOTION_PRODUCT_POST_DATA_IMAGE_QianchuanReportCustomConfigGetV10DataTopics,
        self::SITE_PROMOTION_PRODUCT_POST_DATA_OTHER_QianchuanReportCustomConfigGetV10DataTopics,
        self::SITE_PROMOTION_PRODUCT_POST_DATA_TITLE_QianchuanReportCustomConfigGetV10DataTopics,
        self::SITE_PROMOTION_PRODUCT_POST_DATA_VIDEO_QianchuanReportCustomConfigGetV10DataTopics,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanReportCustomConfigGetV10DataTopics', $value));
        }
        return (string) $value;
    }
}
