<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanReportLongTransferOrderGetV10DataListOrderFlowSource
{
    public const ACTIVITY_QianchuanReportLongTransferOrderGetV10DataListOrderFlowSource = 'ACTIVITY';
    public const DOUYIN_SHOPPING_CENTER_QianchuanReportLongTransferOrderGetV10DataListOrderFlowSource = 'DOUYIN_SHOPPING_CENTER';
    public const GENERAL_SEARCH_QianchuanReportLongTransferOrderGetV10DataListOrderFlowSource = 'GENERAL_SEARCH';
    public const GUESS_YOU_LIKE_QianchuanReportLongTransferOrderGetV10DataListOrderFlowSource = 'GUESS_YOU_LIKE';
    public const HOMEPAGE_FOLLOW_QianchuanReportLongTransferOrderGetV10DataListOrderFlowSource = 'HOMEPAGE_FOLLOW';
    public const LIVE_QianchuanReportLongTransferOrderGetV10DataListOrderFlowSource = 'LIVE';
    public const LIVE_OTHER_QianchuanReportLongTransferOrderGetV10DataListOrderFlowSource = 'LIVE_OTHER';
    public const OTHERS_HOMEPAGE_QianchuanReportLongTransferOrderGetV10DataListOrderFlowSource = 'OTHERS_HOMEPAGE';
    public const OTHER_PROFILE_QianchuanReportLongTransferOrderGetV10DataListOrderFlowSource = 'OTHER_PROFILE';
    public const PRODUCT_CARD_QianchuanReportLongTransferOrderGetV10DataListOrderFlowSource = 'PRODUCT_CARD';
    public const PRODUCT_CARD_GENERAL_SEARCH_QianchuanReportLongTransferOrderGetV10DataListOrderFlowSource = 'PRODUCT_CARD_GENERAL_SEARCH';
    public const PRODUCT_CARD_OTHER_QianchuanReportLongTransferOrderGetV10DataListOrderFlowSource = 'PRODUCT_CARD_OTHER';
    public const QIANCHUAN_PROMOTE_QianchuanReportLongTransferOrderGetV10DataListOrderFlowSource = 'QIANCHUAN_PROMOTE';
    public const RECOMMEND_LIVE_QianchuanReportLongTransferOrderGetV10DataListOrderFlowSource = 'RECOMMEND_LIVE';
    public const RECOMMEND_PRODUCT_QianchuanReportLongTransferOrderGetV10DataListOrderFlowSource = 'RECOMMEND_PRODUCT';
    public const RECOMMEND_VIDEO_QianchuanReportLongTransferOrderGetV10DataListOrderFlowSource = 'RECOMMEND_VIDEO';
    public const SHOP_WINDOW_QianchuanReportLongTransferOrderGetV10DataListOrderFlowSource = 'SHOP_WINDOW';
    public const UNKNOWN_QianchuanReportLongTransferOrderGetV10DataListOrderFlowSource = 'UNKNOWN';
    public const VIDEO_QianchuanReportLongTransferOrderGetV10DataListOrderFlowSource = 'VIDEO';
    public const VIDEO_ACTIVITY_QianchuanReportLongTransferOrderGetV10DataListOrderFlowSource = 'VIDEO_ACTIVITY';
    public const VIDEO_GENERAL_SEARCH_QianchuanReportLongTransferOrderGetV10DataListOrderFlowSource = 'VIDEO_GENERAL_SEARCH';
    public const VIDEO_HOMEPAGE_FOLLOW_QianchuanReportLongTransferOrderGetV10DataListOrderFlowSource = 'VIDEO_HOMEPAGE_FOLLOW';
    public const VIDEO_OTHER_QianchuanReportLongTransferOrderGetV10DataListOrderFlowSource = 'VIDEO_OTHER';
    public const VIDEO_TO_LIVE_QianchuanReportLongTransferOrderGetV10DataListOrderFlowSource = 'VIDEO_TO_LIVE';

    public const ALLOWED_VALUES = [
        self::ACTIVITY_QianchuanReportLongTransferOrderGetV10DataListOrderFlowSource,
        self::DOUYIN_SHOPPING_CENTER_QianchuanReportLongTransferOrderGetV10DataListOrderFlowSource,
        self::GENERAL_SEARCH_QianchuanReportLongTransferOrderGetV10DataListOrderFlowSource,
        self::GUESS_YOU_LIKE_QianchuanReportLongTransferOrderGetV10DataListOrderFlowSource,
        self::HOMEPAGE_FOLLOW_QianchuanReportLongTransferOrderGetV10DataListOrderFlowSource,
        self::LIVE_QianchuanReportLongTransferOrderGetV10DataListOrderFlowSource,
        self::LIVE_OTHER_QianchuanReportLongTransferOrderGetV10DataListOrderFlowSource,
        self::OTHERS_HOMEPAGE_QianchuanReportLongTransferOrderGetV10DataListOrderFlowSource,
        self::OTHER_PROFILE_QianchuanReportLongTransferOrderGetV10DataListOrderFlowSource,
        self::PRODUCT_CARD_QianchuanReportLongTransferOrderGetV10DataListOrderFlowSource,
        self::PRODUCT_CARD_GENERAL_SEARCH_QianchuanReportLongTransferOrderGetV10DataListOrderFlowSource,
        self::PRODUCT_CARD_OTHER_QianchuanReportLongTransferOrderGetV10DataListOrderFlowSource,
        self::QIANCHUAN_PROMOTE_QianchuanReportLongTransferOrderGetV10DataListOrderFlowSource,
        self::RECOMMEND_LIVE_QianchuanReportLongTransferOrderGetV10DataListOrderFlowSource,
        self::RECOMMEND_PRODUCT_QianchuanReportLongTransferOrderGetV10DataListOrderFlowSource,
        self::RECOMMEND_VIDEO_QianchuanReportLongTransferOrderGetV10DataListOrderFlowSource,
        self::SHOP_WINDOW_QianchuanReportLongTransferOrderGetV10DataListOrderFlowSource,
        self::UNKNOWN_QianchuanReportLongTransferOrderGetV10DataListOrderFlowSource,
        self::VIDEO_QianchuanReportLongTransferOrderGetV10DataListOrderFlowSource,
        self::VIDEO_ACTIVITY_QianchuanReportLongTransferOrderGetV10DataListOrderFlowSource,
        self::VIDEO_GENERAL_SEARCH_QianchuanReportLongTransferOrderGetV10DataListOrderFlowSource,
        self::VIDEO_HOMEPAGE_FOLLOW_QianchuanReportLongTransferOrderGetV10DataListOrderFlowSource,
        self::VIDEO_OTHER_QianchuanReportLongTransferOrderGetV10DataListOrderFlowSource,
        self::VIDEO_TO_LIVE_QianchuanReportLongTransferOrderGetV10DataListOrderFlowSource,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanReportLongTransferOrderGetV10DataListOrderFlowSource', $value));
        }
        return (string) $value;
    }
}
