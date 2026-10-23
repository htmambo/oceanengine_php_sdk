<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsClueExtInfoCallbackV2ExtKey
{
    public const BUSINESS_STATE_ToolsClueExtInfoCallbackV2ExtKey = 'BUSINESS_STATE';
    public const CLUE_INTENTION_ToolsClueExtInfoCallbackV2ExtKey = 'CLUE_INTENTION';
    public const CLUE_TAGS_ToolsClueExtInfoCallbackV2ExtKey = 'CLUE_TAGS';
    public const CLUE_VALIDITY_ToolsClueExtInfoCallbackV2ExtKey = 'CLUE_VALIDITY';
    public const COMMUNICATION_STATE_ToolsClueExtInfoCallbackV2ExtKey = 'COMMUNICATION_STATE';
    public const CUSTOMER_STATE_ToolsClueExtInfoCallbackV2ExtKey = 'CUSTOMER_STATE';
    public const CUSTOMER_TAGS_ToolsClueExtInfoCallbackV2ExtKey = 'CUSTOMER_TAGS';
    public const ORDER_STATE_ToolsClueExtInfoCallbackV2ExtKey = 'ORDER_STATE';

    public const ALLOWED_VALUES = [
        self::BUSINESS_STATE_ToolsClueExtInfoCallbackV2ExtKey,
        self::CLUE_INTENTION_ToolsClueExtInfoCallbackV2ExtKey,
        self::CLUE_TAGS_ToolsClueExtInfoCallbackV2ExtKey,
        self::CLUE_VALIDITY_ToolsClueExtInfoCallbackV2ExtKey,
        self::COMMUNICATION_STATE_ToolsClueExtInfoCallbackV2ExtKey,
        self::CUSTOMER_STATE_ToolsClueExtInfoCallbackV2ExtKey,
        self::CUSTOMER_TAGS_ToolsClueExtInfoCallbackV2ExtKey,
        self::ORDER_STATE_ToolsClueExtInfoCallbackV2ExtKey,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsClueExtInfoCallbackV2ExtKey', $value));
        }
        return (string) $value;
    }
}
