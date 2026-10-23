<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalImSendMsgV30Scene
{
    public const SCENE_MEDICAL_MODE_LocalImSendMsgV30Scene = 'SCENE_MEDICAL_MODE';

    public const ALLOWED_VALUES = [
        self::SCENE_MEDICAL_MODE_LocalImSendMsgV30Scene,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalImSendMsgV30Scene', $value));
        }
        return (string) $value;
    }
}
