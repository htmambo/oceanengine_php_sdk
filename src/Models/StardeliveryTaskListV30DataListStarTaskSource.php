<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StardeliveryTaskListV30DataListStarTaskSource
{
    public const MY_CREATIONS_StardeliveryTaskListV30DataListStarTaskSource = 'MY_CREATIONS';
    public const SHARING_StardeliveryTaskListV30DataListStarTaskSource = 'SHARING';
    public const SHATE_EXPIRED_StardeliveryTaskListV30DataListStarTaskSource = 'SHATE_EXPIRED';

    public const ALLOWED_VALUES = [
        self::MY_CREATIONS_StardeliveryTaskListV30DataListStarTaskSource,
        self::SHARING_StardeliveryTaskListV30DataListStarTaskSource,
        self::SHATE_EXPIRED_StardeliveryTaskListV30DataListStarTaskSource,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StardeliveryTaskListV30DataListStarTaskSource', $value));
        }
        return (string) $value;
    }
}
