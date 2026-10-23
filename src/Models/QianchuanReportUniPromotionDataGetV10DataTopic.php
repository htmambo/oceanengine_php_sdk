<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanReportUniPromotionDataGetV10DataTopic
{
    public const OVERALL_ROI_LIVE_AWEME_QianchuanReportUniPromotionDataGetV10DataTopic = 'OVERALL_ROI_LIVE_AWEME';
    public const OVERALL_ROI_LIVE_MATERIAL_LIVE_QianchuanReportUniPromotionDataGetV10DataTopic = 'OVERALL_ROI_LIVE_MATERIAL_LIVE';
    public const OVERALL_ROI_LIVE_MATERIAL_VIDEO_QianchuanReportUniPromotionDataGetV10DataTopic = 'OVERALL_ROI_LIVE_MATERIAL_VIDEO';
    public const OVERALL_ROI_PRODUCT_AWEME_QianchuanReportUniPromotionDataGetV10DataTopic = 'OVERALL_ROI_PRODUCT_AWEME';
    public const OVERALL_ROI_PRODUCT_MATERIAL_QianchuanReportUniPromotionDataGetV10DataTopic = 'OVERALL_ROI_PRODUCT_MATERIAL';
    public const OVERALL_ROI_PRODUCT_PRODUCT_QianchuanReportUniPromotionDataGetV10DataTopic = 'OVERALL_ROI_PRODUCT_PRODUCT';
    public const OVERALL_ROI_PRODUCT_PROJECT_QianchuanReportUniPromotionDataGetV10DataTopic = 'OVERALL_ROI_PRODUCT_PROJECT';
    public const ROI2_IMAGE_AGG_MATERIAL_ANALYSIS_QianchuanReportUniPromotionDataGetV10DataTopic = 'ROI2_IMAGE_AGG_MATERIAL_ANALYSIS';
    public const SITE_PROMOTION_POST_DATA_LIVE_QianchuanReportUniPromotionDataGetV10DataTopic = 'SITE_PROMOTION_POST_DATA_LIVE';
    public const SITE_PROMOTION_POST_DATA_OTHER_QianchuanReportUniPromotionDataGetV10DataTopic = 'SITE_PROMOTION_POST_DATA_OTHER';
    public const SITE_PROMOTION_POST_DATA_TITLE_QianchuanReportUniPromotionDataGetV10DataTopic = 'SITE_PROMOTION_POST_DATA_TITLE';
    public const SITE_PROMOTION_POST_DATA_VIDEO_QianchuanReportUniPromotionDataGetV10DataTopic = 'SITE_PROMOTION_POST_DATA_VIDEO';
    public const SITE_PROMOTION_PRODUCT_AD_QianchuanReportUniPromotionDataGetV10DataTopic = 'SITE_PROMOTION_PRODUCT_AD';
    public const SITE_PROMOTION_PRODUCT_POST_ASSIST_TASK_QianchuanReportUniPromotionDataGetV10DataTopic = 'SITE_PROMOTION_PRODUCT_POST_ASSIST_TASK';
    public const SITE_PROMOTION_PRODUCT_POST_DATA_IMAGE_QianchuanReportUniPromotionDataGetV10DataTopic = 'SITE_PROMOTION_PRODUCT_POST_DATA_IMAGE';
    public const SITE_PROMOTION_PRODUCT_POST_DATA_OTHER_QianchuanReportUniPromotionDataGetV10DataTopic = 'SITE_PROMOTION_PRODUCT_POST_DATA_OTHER';
    public const SITE_PROMOTION_PRODUCT_POST_DATA_TITLE_QianchuanReportUniPromotionDataGetV10DataTopic = 'SITE_PROMOTION_PRODUCT_POST_DATA_TITLE';
    public const SITE_PROMOTION_PRODUCT_POST_DATA_VIDEO_QianchuanReportUniPromotionDataGetV10DataTopic = 'SITE_PROMOTION_PRODUCT_POST_DATA_VIDEO';
    public const SITE_PROMOTION_PRODUCT_PRODUCT_QianchuanReportUniPromotionDataGetV10DataTopic = 'SITE_PROMOTION_PRODUCT_PRODUCT';

    public const ALLOWED_VALUES = [
        self::OVERALL_ROI_LIVE_AWEME_QianchuanReportUniPromotionDataGetV10DataTopic,
        self::OVERALL_ROI_LIVE_MATERIAL_LIVE_QianchuanReportUniPromotionDataGetV10DataTopic,
        self::OVERALL_ROI_LIVE_MATERIAL_VIDEO_QianchuanReportUniPromotionDataGetV10DataTopic,
        self::OVERALL_ROI_PRODUCT_AWEME_QianchuanReportUniPromotionDataGetV10DataTopic,
        self::OVERALL_ROI_PRODUCT_MATERIAL_QianchuanReportUniPromotionDataGetV10DataTopic,
        self::OVERALL_ROI_PRODUCT_PRODUCT_QianchuanReportUniPromotionDataGetV10DataTopic,
        self::OVERALL_ROI_PRODUCT_PROJECT_QianchuanReportUniPromotionDataGetV10DataTopic,
        self::ROI2_IMAGE_AGG_MATERIAL_ANALYSIS_QianchuanReportUniPromotionDataGetV10DataTopic,
        self::SITE_PROMOTION_POST_DATA_LIVE_QianchuanReportUniPromotionDataGetV10DataTopic,
        self::SITE_PROMOTION_POST_DATA_OTHER_QianchuanReportUniPromotionDataGetV10DataTopic,
        self::SITE_PROMOTION_POST_DATA_TITLE_QianchuanReportUniPromotionDataGetV10DataTopic,
        self::SITE_PROMOTION_POST_DATA_VIDEO_QianchuanReportUniPromotionDataGetV10DataTopic,
        self::SITE_PROMOTION_PRODUCT_AD_QianchuanReportUniPromotionDataGetV10DataTopic,
        self::SITE_PROMOTION_PRODUCT_POST_ASSIST_TASK_QianchuanReportUniPromotionDataGetV10DataTopic,
        self::SITE_PROMOTION_PRODUCT_POST_DATA_IMAGE_QianchuanReportUniPromotionDataGetV10DataTopic,
        self::SITE_PROMOTION_PRODUCT_POST_DATA_OTHER_QianchuanReportUniPromotionDataGetV10DataTopic,
        self::SITE_PROMOTION_PRODUCT_POST_DATA_TITLE_QianchuanReportUniPromotionDataGetV10DataTopic,
        self::SITE_PROMOTION_PRODUCT_POST_DATA_VIDEO_QianchuanReportUniPromotionDataGetV10DataTopic,
        self::SITE_PROMOTION_PRODUCT_PRODUCT_QianchuanReportUniPromotionDataGetV10DataTopic,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanReportUniPromotionDataGetV10DataTopic', $value));
        }
        return (string) $value;
    }
}
