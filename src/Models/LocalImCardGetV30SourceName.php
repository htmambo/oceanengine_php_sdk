<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalImCardGetV30SourceName
{
    public const Enum_53_KF_LocalImCardGetV30SourceName = '53KF';
    public const Enum_AI即用_LocalImCardGetV30SourceName = 'AI即用';
    public const Enum_云雀客服_LocalImCardGetV30SourceName = '云雀客服';
    public const Enum_优居AI智慧客服系统_LocalImCardGetV30SourceName = '优居AI智慧客服系统';
    public const Enum_内部测试_LocalImCardGetV30SourceName = '内部测试';
    public const Enum_北京易聊智能客服_LocalImCardGetV30SourceName = '北京易聊智能客服';
    public const Enum_快商通在线客服_LocalImCardGetV30SourceName = '快商通在线客服';
    public const Enum_智能云客_LocalImCardGetV30SourceName = '智能云客';
    public const Enum_来鼓_LocalImCardGetV30SourceName = '来鼓';
    public const Enum_杭州百聆科技有限公司_LocalImCardGetV30SourceName = '杭州百聆科技有限公司';
    public const Enum_百聆_LocalImCardGetV30SourceName = '百聆';
    public const Enum_美洽客服_LocalImCardGetV30SourceName = '美洽客服';
    public const Enum_螳螂CRM_LocalImCardGetV30SourceName = '螳螂CRM';

    public const ALLOWED_VALUES = [
        self::Enum_53_KF_LocalImCardGetV30SourceName,
        self::Enum_AI即用_LocalImCardGetV30SourceName,
        self::Enum_云雀客服_LocalImCardGetV30SourceName,
        self::Enum_优居AI智慧客服系统_LocalImCardGetV30SourceName,
        self::Enum_内部测试_LocalImCardGetV30SourceName,
        self::Enum_北京易聊智能客服_LocalImCardGetV30SourceName,
        self::Enum_快商通在线客服_LocalImCardGetV30SourceName,
        self::Enum_智能云客_LocalImCardGetV30SourceName,
        self::Enum_来鼓_LocalImCardGetV30SourceName,
        self::Enum_杭州百聆科技有限公司_LocalImCardGetV30SourceName,
        self::Enum_百聆_LocalImCardGetV30SourceName,
        self::Enum_美洽客服_LocalImCardGetV30SourceName,
        self::Enum_螳螂CRM_LocalImCardGetV30SourceName,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalImCardGetV30SourceName', $value));
        }
        return (string) $value;
    }
}
