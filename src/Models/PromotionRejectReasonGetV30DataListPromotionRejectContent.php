<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class PromotionRejectReasonGetV30DataListPromotionRejectContent
{
    public const Enum_下载链接_PromotionRejectReasonGetV30DataListPromotionRejectContent = '下载链接';
    public const Enum_副标题_PromotionRejectReasonGetV30DataListPromotionRejectContent = '副标题';
    public const Enum_卡片主图_PromotionRejectReasonGetV30DataListPromotionRejectContent = '卡片主图';
    public const Enum_卡片标题_PromotionRejectReasonGetV30DataListPromotionRejectContent = '卡片标题';
    public const Enum_头条group_PromotionRejectReasonGetV30DataListPromotionRejectContent = '头条group';
    public const Enum_小程序_PromotionRejectReasonGetV30DataListPromotionRejectContent = '小程序';
    public const Enum_应用包名_PromotionRejectReasonGetV30DataListPromotionRejectContent = '应用包名';
    public const Enum_应用名_PromotionRejectReasonGetV30DataListPromotionRejectContent = '应用名';
    public const Enum_应用详情页_PromotionRejectReasonGetV30DataListPromotionRejectContent = '应用详情页';
    public const Enum_录入文章_PromotionRejectReasonGetV30DataListPromotionRejectContent = '录入文章';
    public const Enum_抖音头像_PromotionRejectReasonGetV30DataListPromotionRejectContent = '抖音头像';
    public const Enum_抖音昵称_PromotionRejectReasonGetV30DataListPromotionRejectContent = '抖音昵称';
    public const Enum_按钮附加创意_PromotionRejectReasonGetV30DataListPromotionRejectContent = '按钮附加创意';
    public const Enum_推广卖点_PromotionRejectReasonGetV30DataListPromotionRejectContent = '推广卖点';
    public const Enum_文章链接_PromotionRejectReasonGetV30DataListPromotionRejectContent = '文章链接';
    public const Enum_来源_PromotionRejectReasonGetV30DataListPromotionRejectContent = '来源';
    public const Enum_标题_PromotionRejectReasonGetV30DataListPromotionRejectContent = '标题';
    public const Enum_电话号码附加创意_PromotionRejectReasonGetV30DataListPromotionRejectContent = '电话号码附加创意';
    public const Enum_直达链接_PromotionRejectReasonGetV30DataListPromotionRejectContent = '直达链接';
    public const Enum_落地页_PromotionRejectReasonGetV30DataListPromotionRejectContent = '落地页';
    public const Enum_表单附加创意_PromotionRejectReasonGetV30DataListPromotionRejectContent = '表单附加创意';
    public const Enum_视频锚点_PromotionRejectReasonGetV30DataListPromotionRejectContent = '视频锚点';
    public const Enum_计划_PromotionRejectReasonGetV30DataListPromotionRejectContent = '计划';
    public const Enum_附加创意_PromotionRejectReasonGetV30DataListPromotionRejectContent = '附加创意';

    public const ALLOWED_VALUES = [
        self::Enum_下载链接_PromotionRejectReasonGetV30DataListPromotionRejectContent,
        self::Enum_副标题_PromotionRejectReasonGetV30DataListPromotionRejectContent,
        self::Enum_卡片主图_PromotionRejectReasonGetV30DataListPromotionRejectContent,
        self::Enum_卡片标题_PromotionRejectReasonGetV30DataListPromotionRejectContent,
        self::Enum_头条group_PromotionRejectReasonGetV30DataListPromotionRejectContent,
        self::Enum_小程序_PromotionRejectReasonGetV30DataListPromotionRejectContent,
        self::Enum_应用包名_PromotionRejectReasonGetV30DataListPromotionRejectContent,
        self::Enum_应用名_PromotionRejectReasonGetV30DataListPromotionRejectContent,
        self::Enum_应用详情页_PromotionRejectReasonGetV30DataListPromotionRejectContent,
        self::Enum_录入文章_PromotionRejectReasonGetV30DataListPromotionRejectContent,
        self::Enum_抖音头像_PromotionRejectReasonGetV30DataListPromotionRejectContent,
        self::Enum_抖音昵称_PromotionRejectReasonGetV30DataListPromotionRejectContent,
        self::Enum_按钮附加创意_PromotionRejectReasonGetV30DataListPromotionRejectContent,
        self::Enum_推广卖点_PromotionRejectReasonGetV30DataListPromotionRejectContent,
        self::Enum_文章链接_PromotionRejectReasonGetV30DataListPromotionRejectContent,
        self::Enum_来源_PromotionRejectReasonGetV30DataListPromotionRejectContent,
        self::Enum_标题_PromotionRejectReasonGetV30DataListPromotionRejectContent,
        self::Enum_电话号码附加创意_PromotionRejectReasonGetV30DataListPromotionRejectContent,
        self::Enum_直达链接_PromotionRejectReasonGetV30DataListPromotionRejectContent,
        self::Enum_落地页_PromotionRejectReasonGetV30DataListPromotionRejectContent,
        self::Enum_表单附加创意_PromotionRejectReasonGetV30DataListPromotionRejectContent,
        self::Enum_视频锚点_PromotionRejectReasonGetV30DataListPromotionRejectContent,
        self::Enum_计划_PromotionRejectReasonGetV30DataListPromotionRejectContent,
        self::Enum_附加创意_PromotionRejectReasonGetV30DataListPromotionRejectContent,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum PromotionRejectReasonGetV30DataListPromotionRejectContent', $value));
        }
        return (string) $value;
    }
}
