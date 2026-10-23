<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StdProjectCreateV30MultiDeliveryMedium
{
    public const ORANGE_AND_AWEME_StdProjectCreateV30MultiDeliveryMedium = 'ORANGE_AND_AWEME';

    public const ALLOWED_VALUES = [
        self::ORANGE_AND_AWEME_StdProjectCreateV30MultiDeliveryMedium,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StdProjectCreateV30MultiDeliveryMedium', $value));
        }
        return (string) $value;
    }
}
