<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsClueLifeGetV2DataListEffectiveStateName
{
    public const NOT_MARKED_ToolsClueLifeGetV2DataListEffectiveStateName = 'NOT_MARKED';
    public const NEED_CALLBACK_ToolsClueLifeGetV2DataListEffectiveStateName = 'NEED_CALLBACK';
    public const CONVERTED_ToolsClueLifeGetV2DataListEffectiveStateName = 'CONVERTED';
    public const INVALID_ToolsClueLifeGetV2DataListEffectiveStateName = 'INVALID';
    public const ADD_WEIXIN_ToolsClueLifeGetV2DataListEffectiveStateName = 'ADD_WEIXIN';
    public const WAIT_CONNECT_ToolsClueLifeGetV2DataListEffectiveStateName = 'WAIT_CONNECT';
    public const ARRIVE_STORE_ToolsClueLifeGetV2DataListEffectiveStateName = 'ARRIVE_STORE';
    public const PREPAID_DEPOSIT_ToolsClueLifeGetV2DataListEffectiveStateName = 'PREPAID_DEPOSIT';

    public const ALLOWED_VALUES = [
        self::NOT_MARKED_ToolsClueLifeGetV2DataListEffectiveStateName,
        self::NEED_CALLBACK_ToolsClueLifeGetV2DataListEffectiveStateName,
        self::CONVERTED_ToolsClueLifeGetV2DataListEffectiveStateName,
        self::INVALID_ToolsClueLifeGetV2DataListEffectiveStateName,
        self::ADD_WEIXIN_ToolsClueLifeGetV2DataListEffectiveStateName,
        self::WAIT_CONNECT_ToolsClueLifeGetV2DataListEffectiveStateName,
        self::ARRIVE_STORE_ToolsClueLifeGetV2DataListEffectiveStateName,
        self::PREPAID_DEPOSIT_ToolsClueLifeGetV2DataListEffectiveStateName,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsClueLifeGetV2DataListEffectiveStateName', $value));
        }
        return (string) $value;
    }
}
