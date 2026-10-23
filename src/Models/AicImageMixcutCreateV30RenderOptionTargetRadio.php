<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AicImageMixcutCreateV30RenderOptionTargetRadio
{
    public const RATIO_16_9_AicImageMixcutCreateV30RenderOptionTargetRadio = 'RATIO_16_9';
    public const RATIO_9_16_AicImageMixcutCreateV30RenderOptionTargetRadio = 'RATIO_9_16';

    public const ALLOWED_VALUES = [
        self::RATIO_16_9_AicImageMixcutCreateV30RenderOptionTargetRadio,
        self::RATIO_9_16_AicImageMixcutCreateV30RenderOptionTargetRadio,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AicImageMixcutCreateV30RenderOptionTargetRadio', $value));
        }
        return (string) $value;
    }
}
