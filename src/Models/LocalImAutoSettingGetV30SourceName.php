<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalImAutoSettingGetV30SourceName
{
    public const Enum_53_KF_LocalImAutoSettingGetV30SourceName = '53KF';
    public const Enum_AI即用_LocalImAutoSettingGetV30SourceName = 'AI即用';
    public const Enum_云雀客服_LocalImAutoSettingGetV30SourceName = '云雀客服';
    public const Enum_优居AI智慧客服系统_LocalImAutoSettingGetV30SourceName = '优居AI智慧客服系统';
    public const Enum_内部测试_LocalImAutoSettingGetV30SourceName = '内部测试';
    public const Enum_北京易聊智能客服_LocalImAutoSettingGetV30SourceName = '北京易聊智能客服';
    public const Enum_快商通在线客服_LocalImAutoSettingGetV30SourceName = '快商通在线客服';
    public const Enum_智能云客_LocalImAutoSettingGetV30SourceName = '智能云客';
    public const Enum_来鼓_LocalImAutoSettingGetV30SourceName = '来鼓';
    public const Enum_杭州百聆科技有限公司_LocalImAutoSettingGetV30SourceName = '杭州百聆科技有限公司';
    public const Enum_百聆_LocalImAutoSettingGetV30SourceName = '百聆';
    public const Enum_美洽客服_LocalImAutoSettingGetV30SourceName = '美洽客服';
    public const Enum_螳螂CRM_LocalImAutoSettingGetV30SourceName = '螳螂CRM';

    public const ALLOWED_VALUES = [
        self::Enum_53_KF_LocalImAutoSettingGetV30SourceName,
        self::Enum_AI即用_LocalImAutoSettingGetV30SourceName,
        self::Enum_云雀客服_LocalImAutoSettingGetV30SourceName,
        self::Enum_优居AI智慧客服系统_LocalImAutoSettingGetV30SourceName,
        self::Enum_内部测试_LocalImAutoSettingGetV30SourceName,
        self::Enum_北京易聊智能客服_LocalImAutoSettingGetV30SourceName,
        self::Enum_快商通在线客服_LocalImAutoSettingGetV30SourceName,
        self::Enum_智能云客_LocalImAutoSettingGetV30SourceName,
        self::Enum_来鼓_LocalImAutoSettingGetV30SourceName,
        self::Enum_杭州百聆科技有限公司_LocalImAutoSettingGetV30SourceName,
        self::Enum_百聆_LocalImAutoSettingGetV30SourceName,
        self::Enum_美洽客服_LocalImAutoSettingGetV30SourceName,
        self::Enum_螳螂CRM_LocalImAutoSettingGetV30SourceName,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalImAutoSettingGetV30SourceName', $value));
        }
        return (string) $value;
    }
}
