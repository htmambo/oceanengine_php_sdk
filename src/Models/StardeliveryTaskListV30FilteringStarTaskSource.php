<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StardeliveryTaskListV30FilteringStarTaskSource
{
    public const MY_CREATIONS_StardeliveryTaskListV30FilteringStarTaskSource = 'MY_CREATIONS';
    public const SHARING_StardeliveryTaskListV30FilteringStarTaskSource = 'SHARING';
    public const SHATE_EXPIRED_StardeliveryTaskListV30FilteringStarTaskSource = 'SHATE_EXPIRED';

    public const ALLOWED_VALUES = [
        self::MY_CREATIONS_StardeliveryTaskListV30FilteringStarTaskSource,
        self::SHARING_StardeliveryTaskListV30FilteringStarTaskSource,
        self::SHATE_EXPIRED_StardeliveryTaskListV30FilteringStarTaskSource,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StardeliveryTaskListV30FilteringStarTaskSource', $value));
        }
        return (string) $value;
    }
}
