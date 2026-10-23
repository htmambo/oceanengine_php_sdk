<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalPromotionListV30FilteringLearningPhase
{
    public const ALL_LocalPromotionListV30FilteringLearningPhase = 'ALL';
    public const LEARNED_LocalPromotionListV30FilteringLearningPhase = 'LEARNED';
    public const LEARNING_LocalPromotionListV30FilteringLearningPhase = 'LEARNING';
    public const LEARN_FAILED_LocalPromotionListV30FilteringLearningPhase = 'LEARN_FAILED';

    public const ALLOWED_VALUES = [
        self::ALL_LocalPromotionListV30FilteringLearningPhase,
        self::LEARNED_LocalPromotionListV30FilteringLearningPhase,
        self::LEARNING_LocalPromotionListV30FilteringLearningPhase,
        self::LEARN_FAILED_LocalPromotionListV30FilteringLearningPhase,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalPromotionListV30FilteringLearningPhase', $value));
        }
        return (string) $value;
    }
}
