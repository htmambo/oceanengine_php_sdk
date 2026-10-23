<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsWechatAppletListV30DataListPaymentForm
{
    public const BOTH_OPTIONS_AVAILABLE_ToolsWechatAppletListV30DataListPaymentForm = 'BOTH_OPTIONS_AVAILABLE';
    public const CONTENT_OR_SERVICES_ToolsWechatAppletListV30DataListPaymentForm = 'CONTENT_OR_SERVICES';
    public const UNLOCK_FULL_FEATURES_ToolsWechatAppletListV30DataListPaymentForm = 'UNLOCK_FULL_FEATURES';

    public const ALLOWED_VALUES = [
        self::BOTH_OPTIONS_AVAILABLE_ToolsWechatAppletListV30DataListPaymentForm,
        self::CONTENT_OR_SERVICES_ToolsWechatAppletListV30DataListPaymentForm,
        self::UNLOCK_FULL_FEATURES_ToolsWechatAppletListV30DataListPaymentForm,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsWechatAppletListV30DataListPaymentForm', $value));
        }
        return (string) $value;
    }
}
