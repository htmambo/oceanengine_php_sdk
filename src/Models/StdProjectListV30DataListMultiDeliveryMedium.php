<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StdProjectListV30DataListMultiDeliveryMedium
{
    public const ORANGE_AND_AWEME_StdProjectListV30DataListMultiDeliveryMedium = 'ORANGE_AND_AWEME';

    public const ALLOWED_VALUES = [
        self::ORANGE_AND_AWEME_StdProjectListV30DataListMultiDeliveryMedium,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StdProjectListV30DataListMultiDeliveryMedium', $value));
        }
        return (string) $value;
    }
}
