<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsWechatAppletCreateV30PaymentForm
{
    public const BOTH_OPTIONS_AVAILABLE_ToolsWechatAppletCreateV30PaymentForm = 'BOTH_OPTIONS_AVAILABLE';
    public const CONTENT_OR_SERVICES_ToolsWechatAppletCreateV30PaymentForm = 'CONTENT_OR_SERVICES';
    public const UNLOCK_FULL_FEATURES_ToolsWechatAppletCreateV30PaymentForm = 'UNLOCK_FULL_FEATURES';

    public const ALLOWED_VALUES = [
        self::BOTH_OPTIONS_AVAILABLE_ToolsWechatAppletCreateV30PaymentForm,
        self::CONTENT_OR_SERVICES_ToolsWechatAppletCreateV30PaymentForm,
        self::UNLOCK_FULL_FEATURES_ToolsWechatAppletCreateV30PaymentForm,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsWechatAppletCreateV30PaymentForm', $value));
        }
        return (string) $value;
    }
}
