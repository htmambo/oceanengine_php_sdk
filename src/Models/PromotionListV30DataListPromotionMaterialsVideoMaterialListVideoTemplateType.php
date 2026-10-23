<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class PromotionListV30DataListPromotionMaterialsVideoMaterialListVideoTemplateType
{
    public const DPA_VIDEO_TEMPLATE_CUSTOM_PromotionListV30DataListPromotionMaterialsVideoMaterialListVideoTemplateType = 'DPA_VIDEO_TEMPLATE_CUSTOM';
    public const DPA_VIDEO_TEMPLATE_DEPRECATED_PromotionListV30DataListPromotionMaterialsVideoMaterialListVideoTemplateType = 'DPA_VIDEO_TEMPLATE_DEPRECATED';
    public const DPA_VIDEO_TEMPLATE_SMART_PromotionListV30DataListPromotionMaterialsVideoMaterialListVideoTemplateType = 'DPA_VIDEO_TEMPLATE_SMART';

    public const ALLOWED_VALUES = [
        self::DPA_VIDEO_TEMPLATE_CUSTOM_PromotionListV30DataListPromotionMaterialsVideoMaterialListVideoTemplateType,
        self::DPA_VIDEO_TEMPLATE_DEPRECATED_PromotionListV30DataListPromotionMaterialsVideoMaterialListVideoTemplateType,
        self::DPA_VIDEO_TEMPLATE_SMART_PromotionListV30DataListPromotionMaterialsVideoMaterialListVideoTemplateType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum PromotionListV30DataListPromotionMaterialsVideoMaterialListVideoTemplateType', $value));
        }
        return (string) $value;
    }
}
