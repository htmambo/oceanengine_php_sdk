<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StardeliveryTaskDetailV30DataBriefType
{
    public const GAME_StardeliveryTaskDetailV30DataBriefType = 'GAME';
    public const NORMAL_StardeliveryTaskDetailV30DataBriefType = 'NORMAL';

    public const ALLOWED_VALUES = [
        self::GAME_StardeliveryTaskDetailV30DataBriefType,
        self::NORMAL_StardeliveryTaskDetailV30DataBriefType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StardeliveryTaskDetailV30DataBriefType', $value));
        }
        return (string) $value;
    }
}
