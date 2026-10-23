<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ClueWechatInstanceUpdateV2Action
{
    public const ENABLE_ClueWechatInstanceUpdateV2Action = 'ENABLE';
    public const DISABLE_ClueWechatInstanceUpdateV2Action = 'DISABLE';
    public const DELETE_ClueWechatInstanceUpdateV2Action = 'DELETE';
    public const ADD_ClueWechatInstanceUpdateV2Action = 'ADD';

    public const ALLOWED_VALUES = [
        self::ENABLE_ClueWechatInstanceUpdateV2Action,
        self::DISABLE_ClueWechatInstanceUpdateV2Action,
        self::DELETE_ClueWechatInstanceUpdateV2Action,
        self::ADD_ClueWechatInstanceUpdateV2Action,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ClueWechatInstanceUpdateV2Action', $value));
        }
        return (string) $value;
    }
}
