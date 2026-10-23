<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class OcProjectMaterialGetV30FilteringMaterialStatusSecond
{
    public const DOUYIN_ITEM_NOT_AVAILABLE_FOR_DELIVERY_OcProjectMaterialGetV30FilteringMaterialStatusSecond = 'DOUYIN_ITEM_NOT_AVAILABLE_FOR_DELIVERY';
    public const ECOSYSTEM_RISK_FAILED_OcProjectMaterialGetV30FilteringMaterialStatusSecond = 'ECOSYSTEM_RISK_FAILED';
    public const GUIDE_VIDEO_NOT_EXIST_OcProjectMaterialGetV30FilteringMaterialStatusSecond = 'GUIDE_VIDEO_NOT_EXIST';
    public const MATERIAL_STATUS_AUDIT_OcProjectMaterialGetV30FilteringMaterialStatusSecond = 'MATERIAL_STATUS_AUDIT';
    public const MATERIAL_STATUS_DISABLE_OcProjectMaterialGetV30FilteringMaterialStatusSecond = 'MATERIAL_STATUS_DISABLE';
    public const MATERIAL_STATUS_OFFLINE_AUDIT_OcProjectMaterialGetV30FilteringMaterialStatusSecond = 'MATERIAL_STATUS_OFFLINE_AUDIT';
    public const MATERIAL_STATUS_PROCEDURAL_DISABLE_OcProjectMaterialGetV30FilteringMaterialStatusSecond = 'MATERIAL_STATUS_PROCEDURAL_DISABLE';

    public const ALLOWED_VALUES = [
        self::DOUYIN_ITEM_NOT_AVAILABLE_FOR_DELIVERY_OcProjectMaterialGetV30FilteringMaterialStatusSecond,
        self::ECOSYSTEM_RISK_FAILED_OcProjectMaterialGetV30FilteringMaterialStatusSecond,
        self::GUIDE_VIDEO_NOT_EXIST_OcProjectMaterialGetV30FilteringMaterialStatusSecond,
        self::MATERIAL_STATUS_AUDIT_OcProjectMaterialGetV30FilteringMaterialStatusSecond,
        self::MATERIAL_STATUS_DISABLE_OcProjectMaterialGetV30FilteringMaterialStatusSecond,
        self::MATERIAL_STATUS_OFFLINE_AUDIT_OcProjectMaterialGetV30FilteringMaterialStatusSecond,
        self::MATERIAL_STATUS_PROCEDURAL_DISABLE_OcProjectMaterialGetV30FilteringMaterialStatusSecond,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum OcProjectMaterialGetV30FilteringMaterialStatusSecond', $value));
        }
        return (string) $value;
    }
}
