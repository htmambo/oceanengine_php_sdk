<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AicVideoMixcutCreateV30RenderOptionTargetRadio
{
    public const RATIO_16_9_AicVideoMixcutCreateV30RenderOptionTargetRadio = 'RATIO_16_9';
    public const RATIO_9_16_AicVideoMixcutCreateV30RenderOptionTargetRadio = 'RATIO_9_16';

    public const ALLOWED_VALUES = [
        self::RATIO_16_9_AicVideoMixcutCreateV30RenderOptionTargetRadio,
        self::RATIO_9_16_AicVideoMixcutCreateV30RenderOptionTargetRadio,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AicVideoMixcutCreateV30RenderOptionTargetRadio', $value));
        }
        return (string) $value;
    }
}
