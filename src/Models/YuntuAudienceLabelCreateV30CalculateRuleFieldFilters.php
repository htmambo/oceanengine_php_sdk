<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class YuntuAudienceLabelCreateV30CalculateRuleFieldFilters
{
    public const ASR_CONTENT_YuntuAudienceLabelCreateV30CalculateRuleFieldFilters = 'asr_content';
    public const OCR_CONTENT_YuntuAudienceLabelCreateV30CalculateRuleFieldFilters = 'ocr_content';
    public const PRODUCT_NAME_YuntuAudienceLabelCreateV30CalculateRuleFieldFilters = 'product_name';
    public const QUERY_YuntuAudienceLabelCreateV30CalculateRuleFieldFilters = 'query';
    public const TITLE_YuntuAudienceLabelCreateV30CalculateRuleFieldFilters = 'title';

    public const ALLOWED_VALUES = [
        self::ASR_CONTENT_YuntuAudienceLabelCreateV30CalculateRuleFieldFilters,
        self::OCR_CONTENT_YuntuAudienceLabelCreateV30CalculateRuleFieldFilters,
        self::PRODUCT_NAME_YuntuAudienceLabelCreateV30CalculateRuleFieldFilters,
        self::QUERY_YuntuAudienceLabelCreateV30CalculateRuleFieldFilters,
        self::TITLE_YuntuAudienceLabelCreateV30CalculateRuleFieldFilters,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum YuntuAudienceLabelCreateV30CalculateRuleFieldFilters', $value));
        }
        return (string) $value;
    }
}
