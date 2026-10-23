<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsClueLifeGetV2DataListClueType
{
    public const FORM_ToolsClueLifeGetV2DataListClueType = 'FORM';
    public const CONSULT_ToolsClueLifeGetV2DataListClueType = 'CONSULT';
    public const SMARTPHONE_ToolsClueLifeGetV2DataListClueType = 'SMARTPHONE';
    public const GROUP_BUYING_ToolsClueLifeGetV2DataListClueType = 'GROUP_BUYING';
    public const ENT_WECHAT_ToolsClueLifeGetV2DataListClueType = 'ENT_WECHAT';
    public const SMARTPHONE_AISERVICE_ToolsClueLifeGetV2DataListClueType = 'SMARTPHONE_AISERVICE';

    public const ALLOWED_VALUES = [
        self::FORM_ToolsClueLifeGetV2DataListClueType,
        self::CONSULT_ToolsClueLifeGetV2DataListClueType,
        self::SMARTPHONE_ToolsClueLifeGetV2DataListClueType,
        self::GROUP_BUYING_ToolsClueLifeGetV2DataListClueType,
        self::ENT_WECHAT_ToolsClueLifeGetV2DataListClueType,
        self::SMARTPHONE_AISERVICE_ToolsClueLifeGetV2DataListClueType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsClueLifeGetV2DataListClueType', $value));
        }
        return (string) $value;
    }
}
