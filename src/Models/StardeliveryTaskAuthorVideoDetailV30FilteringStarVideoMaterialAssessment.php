<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StardeliveryTaskAuthorVideoDetailV30FilteringStarVideoMaterialAssessment
{
    public const FIRST_PUBLISH_MATERIAL_StardeliveryTaskAuthorVideoDetailV30FilteringStarVideoMaterialAssessment = 'FIRST_PUBLISH_MATERIAL';
    public const HIGH_QUALITY_MATERIAL_StardeliveryTaskAuthorVideoDetailV30FilteringStarVideoMaterialAssessment = 'HIGH_QUALITY_MATERIAL';
    public const FIRST_PUBLISH_HIGH_QUALITY_MATERIAL_StardeliveryTaskAuthorVideoDetailV30FilteringStarVideoMaterialAssessment = 'FIRST_PUBLISH_HIGH_QUALITY_MATERIAL';

    public const ALLOWED_VALUES = [
        self::FIRST_PUBLISH_MATERIAL_StardeliveryTaskAuthorVideoDetailV30FilteringStarVideoMaterialAssessment,
        self::HIGH_QUALITY_MATERIAL_StardeliveryTaskAuthorVideoDetailV30FilteringStarVideoMaterialAssessment,
        self::FIRST_PUBLISH_HIGH_QUALITY_MATERIAL_StardeliveryTaskAuthorVideoDetailV30FilteringStarVideoMaterialAssessment,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StardeliveryTaskAuthorVideoDetailV30FilteringStarVideoMaterialAssessment', $value));
        }
        return (string) $value;
    }
}
