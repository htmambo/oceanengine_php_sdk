<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CreateStatementV2TemplateType
{
    public const NOT_STANDARD_CreateStatementV2TemplateType = 'NOT_STANDARD';
    public const STANDARD_CreateStatementV2TemplateType = 'STANDARD';

    public const ALLOWED_VALUES = [
        self::NOT_STANDARD_CreateStatementV2TemplateType,
        self::STANDARD_CreateStatementV2TemplateType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CreateStatementV2TemplateType', $value));
        }
        return (string) $value;
    }
}
