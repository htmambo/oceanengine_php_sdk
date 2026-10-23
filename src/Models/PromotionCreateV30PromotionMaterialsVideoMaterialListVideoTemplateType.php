<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class PromotionCreateV30PromotionMaterialsVideoMaterialListVideoTemplateType
{
    public const DPA_VIDEO_TEMPLATE_CUSTOM_PromotionCreateV30PromotionMaterialsVideoMaterialListVideoTemplateType = 'DPA_VIDEO_TEMPLATE_CUSTOM';
    public const DPA_VIDEO_TEMPLATE_SMART_PromotionCreateV30PromotionMaterialsVideoMaterialListVideoTemplateType = 'DPA_VIDEO_TEMPLATE_SMART';

    public const ALLOWED_VALUES = [
        self::DPA_VIDEO_TEMPLATE_CUSTOM_PromotionCreateV30PromotionMaterialsVideoMaterialListVideoTemplateType,
        self::DPA_VIDEO_TEMPLATE_SMART_PromotionCreateV30PromotionMaterialsVideoMaterialListVideoTemplateType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum PromotionCreateV30PromotionMaterialsVideoMaterialListVideoTemplateType', $value));
        }
        return (string) $value;
    }
}
