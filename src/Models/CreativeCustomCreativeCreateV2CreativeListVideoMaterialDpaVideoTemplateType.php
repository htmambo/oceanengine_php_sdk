<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CreativeCustomCreativeCreateV2CreativeListVideoMaterialDpaVideoTemplateType
{
    public const DPA_VIDEO_TEMPLATE_DEPRECATED_CreativeCustomCreativeCreateV2CreativeListVideoMaterialDpaVideoTemplateType = 'DPA_VIDEO_TEMPLATE_DEPRECATED';
    public const DPA_VIDEO_TEMPLATE_CUSTOM_CreativeCustomCreativeCreateV2CreativeListVideoMaterialDpaVideoTemplateType = 'DPA_VIDEO_TEMPLATE_CUSTOM';
    public const DPA_VIDEO_TEMPLATE_SMART_CreativeCustomCreativeCreateV2CreativeListVideoMaterialDpaVideoTemplateType = 'DPA_VIDEO_TEMPLATE_SMART';

    public const ALLOWED_VALUES = [
        self::DPA_VIDEO_TEMPLATE_DEPRECATED_CreativeCustomCreativeCreateV2CreativeListVideoMaterialDpaVideoTemplateType,
        self::DPA_VIDEO_TEMPLATE_CUSTOM_CreativeCustomCreativeCreateV2CreativeListVideoMaterialDpaVideoTemplateType,
        self::DPA_VIDEO_TEMPLATE_SMART_CreativeCustomCreativeCreateV2CreativeListVideoMaterialDpaVideoTemplateType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CreativeCustomCreativeCreateV2CreativeListVideoMaterialDpaVideoTemplateType', $value));
        }
        return (string) $value;
    }
}
