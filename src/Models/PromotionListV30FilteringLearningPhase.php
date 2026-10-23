<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class PromotionListV30FilteringLearningPhase
{
    public const LEARNING_PromotionListV30FilteringLearningPhase = 'LEARNING';
    public const LEARN_FAILED_PromotionListV30FilteringLearningPhase = 'LEARN_FAILED';
    public const LEARNED_PromotionListV30FilteringLearningPhase = 'LEARNED';

    public const ALLOWED_VALUES = [
        self::LEARNING_PromotionListV30FilteringLearningPhase,
        self::LEARN_FAILED_PromotionListV30FilteringLearningPhase,
        self::LEARNED_PromotionListV30FilteringLearningPhase,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum PromotionListV30FilteringLearningPhase', $value));
        }
        return (string) $value;
    }
}
