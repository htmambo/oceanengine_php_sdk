<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ClueFormDetailV2DataFormFormType
{
    public const NATIVE_FORM_ClueFormDetailV2DataFormFormType = 'NATIVE_FORM';
    public const ADVANCED_CREATIVE_FORM_ClueFormDetailV2DataFormFormType = 'ADVANCED_CREATIVE_FORM';
    public const NORMAL_FORM_ClueFormDetailV2DataFormFormType = 'NORMAL_FORM';

    public const ALLOWED_VALUES = [
        self::NATIVE_FORM_ClueFormDetailV2DataFormFormType,
        self::ADVANCED_CREATIVE_FORM_ClueFormDetailV2DataFormFormType,
        self::NORMAL_FORM_ClueFormDetailV2DataFormFormType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ClueFormDetailV2DataFormFormType', $value));
        }
        return (string) $value;
    }
}
