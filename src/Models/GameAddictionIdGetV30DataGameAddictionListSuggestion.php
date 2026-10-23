<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class GameAddictionIdGetV30DataGameAddictionListSuggestion
{
    public const ACTIVATION_LOW_BEHAVIOR_HIGH_GameAddictionIdGetV30DataGameAddictionListSuggestion = 'ACTIVATION_LOW_BEHAVIOR_HIGH';
    public const ACTIVATION_LOW_BEHAVIOR_LOW_GameAddictionIdGetV30DataGameAddictionListSuggestion = 'ACTIVATION_LOW_BEHAVIOR_LOW';
    public const BEHAVIOR_ACTIVATION_LOW_GameAddictionIdGetV30DataGameAddictionListSuggestion = 'BEHAVIOR_ACTIVATION_LOW';
    public const NORMAL_GameAddictionIdGetV30DataGameAddictionListSuggestion = 'NORMAL';
    public const NOT_PRE_STANDARD_GameAddictionIdGetV30DataGameAddictionListSuggestion = 'NOT_PRE_STANDARD';
    public const PAYMENT_ACTION_HIGH_GameAddictionIdGetV30DataGameAddictionListSuggestion = 'PAYMENT_ACTION_HIGH';
    public const PAYMENT_ACTION_LOW_GameAddictionIdGetV30DataGameAddictionListSuggestion = 'PAYMENT_ACTION_LOW';

    public const ALLOWED_VALUES = [
        self::ACTIVATION_LOW_BEHAVIOR_HIGH_GameAddictionIdGetV30DataGameAddictionListSuggestion,
        self::ACTIVATION_LOW_BEHAVIOR_LOW_GameAddictionIdGetV30DataGameAddictionListSuggestion,
        self::BEHAVIOR_ACTIVATION_LOW_GameAddictionIdGetV30DataGameAddictionListSuggestion,
        self::NORMAL_GameAddictionIdGetV30DataGameAddictionListSuggestion,
        self::NOT_PRE_STANDARD_GameAddictionIdGetV30DataGameAddictionListSuggestion,
        self::PAYMENT_ACTION_HIGH_GameAddictionIdGetV30DataGameAddictionListSuggestion,
        self::PAYMENT_ACTION_LOW_GameAddictionIdGetV30DataGameAddictionListSuggestion,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum GameAddictionIdGetV30DataGameAddictionListSuggestion', $value));
        }
        return (string) $value;
    }
}
