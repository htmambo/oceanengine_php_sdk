<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanReportCustomGetV10DataTopic
{
    public const ECP_BASIC_DATA_QianchuanReportCustomGetV10DataTopic = 'ECP_BASIC_DATA';
    public const SITE_PROMOTION_POST_DATA_LIVE_QianchuanReportCustomGetV10DataTopic = 'SITE_PROMOTION_POST_DATA_LIVE';
    public const SITE_PROMOTION_POST_DATA_OTHER_QianchuanReportCustomGetV10DataTopic = 'SITE_PROMOTION_POST_DATA_OTHER';
    public const SITE_PROMOTION_POST_DATA_TITLE_QianchuanReportCustomGetV10DataTopic = 'SITE_PROMOTION_POST_DATA_TITLE';
    public const SITE_PROMOTION_POST_DATA_VIDEO_QianchuanReportCustomGetV10DataTopic = 'SITE_PROMOTION_POST_DATA_VIDEO';
    public const SITE_PROMOTION_PRODUCT_POST_DATA_IMAGE_QianchuanReportCustomGetV10DataTopic = 'SITE_PROMOTION_PRODUCT_POST_DATA_IMAGE';
    public const SITE_PROMOTION_PRODUCT_POST_DATA_OTHER_QianchuanReportCustomGetV10DataTopic = 'SITE_PROMOTION_PRODUCT_POST_DATA_OTHER';
    public const SITE_PROMOTION_PRODUCT_POST_DATA_TITLE_QianchuanReportCustomGetV10DataTopic = 'SITE_PROMOTION_PRODUCT_POST_DATA_TITLE';
    public const SITE_PROMOTION_PRODUCT_POST_DATA_VIDEO_QianchuanReportCustomGetV10DataTopic = 'SITE_PROMOTION_PRODUCT_POST_DATA_VIDEO';

    public const ALLOWED_VALUES = [
        self::ECP_BASIC_DATA_QianchuanReportCustomGetV10DataTopic,
        self::SITE_PROMOTION_POST_DATA_LIVE_QianchuanReportCustomGetV10DataTopic,
        self::SITE_PROMOTION_POST_DATA_OTHER_QianchuanReportCustomGetV10DataTopic,
        self::SITE_PROMOTION_POST_DATA_TITLE_QianchuanReportCustomGetV10DataTopic,
        self::SITE_PROMOTION_POST_DATA_VIDEO_QianchuanReportCustomGetV10DataTopic,
        self::SITE_PROMOTION_PRODUCT_POST_DATA_IMAGE_QianchuanReportCustomGetV10DataTopic,
        self::SITE_PROMOTION_PRODUCT_POST_DATA_OTHER_QianchuanReportCustomGetV10DataTopic,
        self::SITE_PROMOTION_PRODUCT_POST_DATA_TITLE_QianchuanReportCustomGetV10DataTopic,
        self::SITE_PROMOTION_PRODUCT_POST_DATA_VIDEO_QianchuanReportCustomGetV10DataTopic,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanReportCustomGetV10DataTopic', $value));
        }
        return (string) $value;
    }
}
