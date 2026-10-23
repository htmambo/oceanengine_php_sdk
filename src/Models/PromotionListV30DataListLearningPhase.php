<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class PromotionListV30DataListLearningPhase
{
    public const LEARNING_PromotionListV30DataListLearningPhase = 'LEARNING';
    public const LEARN_FAILED_PromotionListV30DataListLearningPhase = 'LEARN_FAILED';
    public const LEARNED_PromotionListV30DataListLearningPhase = 'LEARNED';
    public const DEFAULT_PromotionListV30DataListLearningPhase = 'DEFAULT';

    public const ALLOWED_VALUES = [
        self::LEARNING_PromotionListV30DataListLearningPhase,
        self::LEARN_FAILED_PromotionListV30DataListLearningPhase,
        self::LEARNED_PromotionListV30DataListLearningPhase,
        self::DEFAULT_PromotionListV30DataListLearningPhase,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum PromotionListV30DataListLearningPhase', $value));
        }
        return (string) $value;
    }
}
