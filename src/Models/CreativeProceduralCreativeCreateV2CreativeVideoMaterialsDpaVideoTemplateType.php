<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CreativeProceduralCreativeCreateV2CreativeVideoMaterialsDpaVideoTemplateType
{
    public const DPA_VIDEO_TEMPLATE_DEPRECATED_CreativeProceduralCreativeCreateV2CreativeVideoMaterialsDpaVideoTemplateType = 'DPA_VIDEO_TEMPLATE_DEPRECATED';
    public const DPA_VIDEO_TEMPLATE_CUSTOM_CreativeProceduralCreativeCreateV2CreativeVideoMaterialsDpaVideoTemplateType = 'DPA_VIDEO_TEMPLATE_CUSTOM';
    public const DPA_VIDEO_TEMPLATE_SMART_CreativeProceduralCreativeCreateV2CreativeVideoMaterialsDpaVideoTemplateType = 'DPA_VIDEO_TEMPLATE_SMART';

    public const ALLOWED_VALUES = [
        self::DPA_VIDEO_TEMPLATE_DEPRECATED_CreativeProceduralCreativeCreateV2CreativeVideoMaterialsDpaVideoTemplateType,
        self::DPA_VIDEO_TEMPLATE_CUSTOM_CreativeProceduralCreativeCreateV2CreativeVideoMaterialsDpaVideoTemplateType,
        self::DPA_VIDEO_TEMPLATE_SMART_CreativeProceduralCreativeCreateV2CreativeVideoMaterialsDpaVideoTemplateType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CreativeProceduralCreativeCreateV2CreativeVideoMaterialsDpaVideoTemplateType', $value));
        }
        return (string) $value;
    }
}
