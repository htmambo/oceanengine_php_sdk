<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsCreativeWordSelectV2DataCreativeWordStatus
{
    public const CREATIVE_WORD_STATUS_APPROVE_ToolsCreativeWordSelectV2DataCreativeWordStatus = 'CREATIVE_WORD_STATUS_APPROVE';
    public const CREATIVE_WORD_STATUS_AUDIT_ToolsCreativeWordSelectV2DataCreativeWordStatus = 'CREATIVE_WORD_STATUS_AUDIT';
    public const CREATIVE_WORD_STATUS_REAUDIT_ToolsCreativeWordSelectV2DataCreativeWordStatus = 'CREATIVE_WORD_STATUS_REAUDIT';
    public const CREATIVE_WORD_STATUS_REJECT_ToolsCreativeWordSelectV2DataCreativeWordStatus = 'CREATIVE_WORD_STATUS_REJECT';

    public const ALLOWED_VALUES = [
        self::CREATIVE_WORD_STATUS_APPROVE_ToolsCreativeWordSelectV2DataCreativeWordStatus,
        self::CREATIVE_WORD_STATUS_AUDIT_ToolsCreativeWordSelectV2DataCreativeWordStatus,
        self::CREATIVE_WORD_STATUS_REAUDIT_ToolsCreativeWordSelectV2DataCreativeWordStatus,
        self::CREATIVE_WORD_STATUS_REJECT_ToolsCreativeWordSelectV2DataCreativeWordStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsCreativeWordSelectV2DataCreativeWordStatus', $value));
        }
        return (string) $value;
    }
}
