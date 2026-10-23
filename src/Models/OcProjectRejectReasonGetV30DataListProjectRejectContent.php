<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class OcProjectRejectReasonGetV30DataListProjectRejectContent
{
    public const Enum_下载链接_OcProjectRejectReasonGetV30DataListProjectRejectContent = '下载链接';
    public const Enum_副标题_OcProjectRejectReasonGetV30DataListProjectRejectContent = '副标题';
    public const Enum_卡片主图_OcProjectRejectReasonGetV30DataListProjectRejectContent = '卡片主图';
    public const Enum_卡片标题_OcProjectRejectReasonGetV30DataListProjectRejectContent = '卡片标题';
    public const Enum_头条group_OcProjectRejectReasonGetV30DataListProjectRejectContent = '头条group';
    public const Enum_小程序_OcProjectRejectReasonGetV30DataListProjectRejectContent = '小程序';
    public const Enum_应用包名_OcProjectRejectReasonGetV30DataListProjectRejectContent = '应用包名';
    public const Enum_应用名_OcProjectRejectReasonGetV30DataListProjectRejectContent = '应用名';
    public const Enum_应用详情页_OcProjectRejectReasonGetV30DataListProjectRejectContent = '应用详情页';
    public const Enum_录入文章_OcProjectRejectReasonGetV30DataListProjectRejectContent = '录入文章';
    public const Enum_抖音头像_OcProjectRejectReasonGetV30DataListProjectRejectContent = '抖音头像';
    public const Enum_抖音昵称_OcProjectRejectReasonGetV30DataListProjectRejectContent = '抖音昵称';
    public const Enum_按钮附加创意_OcProjectRejectReasonGetV30DataListProjectRejectContent = '按钮附加创意';
    public const Enum_推广卖点_OcProjectRejectReasonGetV30DataListProjectRejectContent = '推广卖点';
    public const Enum_文章链接_OcProjectRejectReasonGetV30DataListProjectRejectContent = '文章链接';
    public const Enum_来源_OcProjectRejectReasonGetV30DataListProjectRejectContent = '来源';
    public const Enum_标题_OcProjectRejectReasonGetV30DataListProjectRejectContent = '标题';
    public const Enum_电话号码附加创意_OcProjectRejectReasonGetV30DataListProjectRejectContent = '电话号码附加创意';
    public const Enum_直达链接_OcProjectRejectReasonGetV30DataListProjectRejectContent = '直达链接';
    public const Enum_落地页_OcProjectRejectReasonGetV30DataListProjectRejectContent = '落地页';
    public const Enum_表单附加创意_OcProjectRejectReasonGetV30DataListProjectRejectContent = '表单附加创意';
    public const Enum_视频锚点_OcProjectRejectReasonGetV30DataListProjectRejectContent = '视频锚点';
    public const Enum_附加创意_OcProjectRejectReasonGetV30DataListProjectRejectContent = '附加创意';
    public const Enum_项目_OcProjectRejectReasonGetV30DataListProjectRejectContent = '项目';

    public const ALLOWED_VALUES = [
        self::Enum_下载链接_OcProjectRejectReasonGetV30DataListProjectRejectContent,
        self::Enum_副标题_OcProjectRejectReasonGetV30DataListProjectRejectContent,
        self::Enum_卡片主图_OcProjectRejectReasonGetV30DataListProjectRejectContent,
        self::Enum_卡片标题_OcProjectRejectReasonGetV30DataListProjectRejectContent,
        self::Enum_头条group_OcProjectRejectReasonGetV30DataListProjectRejectContent,
        self::Enum_小程序_OcProjectRejectReasonGetV30DataListProjectRejectContent,
        self::Enum_应用包名_OcProjectRejectReasonGetV30DataListProjectRejectContent,
        self::Enum_应用名_OcProjectRejectReasonGetV30DataListProjectRejectContent,
        self::Enum_应用详情页_OcProjectRejectReasonGetV30DataListProjectRejectContent,
        self::Enum_录入文章_OcProjectRejectReasonGetV30DataListProjectRejectContent,
        self::Enum_抖音头像_OcProjectRejectReasonGetV30DataListProjectRejectContent,
        self::Enum_抖音昵称_OcProjectRejectReasonGetV30DataListProjectRejectContent,
        self::Enum_按钮附加创意_OcProjectRejectReasonGetV30DataListProjectRejectContent,
        self::Enum_推广卖点_OcProjectRejectReasonGetV30DataListProjectRejectContent,
        self::Enum_文章链接_OcProjectRejectReasonGetV30DataListProjectRejectContent,
        self::Enum_来源_OcProjectRejectReasonGetV30DataListProjectRejectContent,
        self::Enum_标题_OcProjectRejectReasonGetV30DataListProjectRejectContent,
        self::Enum_电话号码附加创意_OcProjectRejectReasonGetV30DataListProjectRejectContent,
        self::Enum_直达链接_OcProjectRejectReasonGetV30DataListProjectRejectContent,
        self::Enum_落地页_OcProjectRejectReasonGetV30DataListProjectRejectContent,
        self::Enum_表单附加创意_OcProjectRejectReasonGetV30DataListProjectRejectContent,
        self::Enum_视频锚点_OcProjectRejectReasonGetV30DataListProjectRejectContent,
        self::Enum_附加创意_OcProjectRejectReasonGetV30DataListProjectRejectContent,
        self::Enum_项目_OcProjectRejectReasonGetV30DataListProjectRejectContent,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum OcProjectRejectReasonGetV30DataListProjectRejectContent', $value));
        }
        return (string) $value;
    }
}
