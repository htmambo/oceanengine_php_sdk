<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BrandKnowledgeQaGetV30BusinessType
{
    public const AD_BrandKnowledgeQaGetV30BusinessType = 'AD';
    public const ECP_BrandKnowledgeQaGetV30BusinessType = 'ECP';
    public const SHOP_BrandKnowledgeQaGetV30BusinessType = 'SHOP';

    public const ALLOWED_VALUES = [
        self::AD_BrandKnowledgeQaGetV30BusinessType,
        self::ECP_BrandKnowledgeQaGetV30BusinessType,
        self::SHOP_BrandKnowledgeQaGetV30BusinessType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BrandKnowledgeQaGetV30BusinessType', $value));
        }
        return (string) $value;
    }
}
