<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalPromotionListV30DataPromotionListLearningPhase
{
    public const LEARNED_LocalPromotionListV30DataPromotionListLearningPhase = 'LEARNED';
    public const LEARNING_LocalPromotionListV30DataPromotionListLearningPhase = 'LEARNING';
    public const LEARN_FAILED_LocalPromotionListV30DataPromotionListLearningPhase = 'LEARN_FAILED';

    public const ALLOWED_VALUES = [
        self::LEARNED_LocalPromotionListV30DataPromotionListLearningPhase,
        self::LEARNING_LocalPromotionListV30DataPromotionListLearningPhase,
        self::LEARN_FAILED_LocalPromotionListV30DataPromotionListLearningPhase,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalPromotionListV30DataPromotionListLearningPhase', $value));
        }
        return (string) $value;
    }
}
