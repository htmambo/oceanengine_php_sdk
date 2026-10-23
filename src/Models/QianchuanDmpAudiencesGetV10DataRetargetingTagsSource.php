<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanDmpAudiencesGetV10DataRetargetingTagsSource
{
    public const CUSTOM_AUDIENCE_TYPE_BRAND_QianchuanDmpAudiencesGetV10DataRetargetingTagsSource = 'CUSTOM_AUDIENCE_TYPE_BRAND';
    public const CUSTOM_AUDIENCE_TYPE_DATA_SOURCE_QianchuanDmpAudiencesGetV10DataRetargetingTagsSource = 'CUSTOM_AUDIENCE_TYPE_DATA_SOURCE';
    public const CUSTOM_AUDIENCE_TYPE_DOU_PLUS_QianchuanDmpAudiencesGetV10DataRetargetingTagsSource = 'CUSTOM_AUDIENCE_TYPE_DOU_PLUS';
    public const CUSTOM_AUDIENCE_TYPE_EXTEND_QianchuanDmpAudiencesGetV10DataRetargetingTagsSource = 'CUSTOM_AUDIENCE_TYPE_EXTEND';
    public const CUSTOM_AUDIENCE_TYPE_FRIEND_QianchuanDmpAudiencesGetV10DataRetargetingTagsSource = 'CUSTOM_AUDIENCE_TYPE_FRIEND';
    public const CUSTOM_AUDIENCE_TYPE_ONE_KEY_QianchuanDmpAudiencesGetV10DataRetargetingTagsSource = 'CUSTOM_AUDIENCE_TYPE_ONE_KEY';
    public const CUSTOM_AUDIENCE_TYPE_OPERATE_QianchuanDmpAudiencesGetV10DataRetargetingTagsSource = 'CUSTOM_AUDIENCE_TYPE_OPERATE';
    public const CUSTOM_AUDIENCE_TYPE_PACK_RULE_QianchuanDmpAudiencesGetV10DataRetargetingTagsSource = 'CUSTOM_AUDIENCE_TYPE_PACK_RULE';
    public const CUSTOM_AUDIENCE_TYPE_RULE_QianchuanDmpAudiencesGetV10DataRetargetingTagsSource = 'CUSTOM_AUDIENCE_TYPE_RULE';
    public const CUSTOM_AUDIENCE_TYPE_THEME_QianchuanDmpAudiencesGetV10DataRetargetingTagsSource = 'CUSTOM_AUDIENCE_TYPE_THEME';
    public const CUSTOM_AUDIENCE_TYPE_THIRD_PARTY_QianchuanDmpAudiencesGetV10DataRetargetingTagsSource = 'CUSTOM_AUDIENCE_TYPE_THIRD_PARTY';
    public const CUSTOM_AUDIENCE_TYPE_UPLOAD_QianchuanDmpAudiencesGetV10DataRetargetingTagsSource = 'CUSTOM_AUDIENCE_TYPE_UPLOAD';
    public const FINANCECUSTOM_AUDIENCE_TYPE_FINANCE_QianchuanDmpAudiencesGetV10DataRetargetingTagsSource = 'FINANCECUSTOM_AUDIENCE_TYPE_FINANCE';

    public const ALLOWED_VALUES = [
        self::CUSTOM_AUDIENCE_TYPE_BRAND_QianchuanDmpAudiencesGetV10DataRetargetingTagsSource,
        self::CUSTOM_AUDIENCE_TYPE_DATA_SOURCE_QianchuanDmpAudiencesGetV10DataRetargetingTagsSource,
        self::CUSTOM_AUDIENCE_TYPE_DOU_PLUS_QianchuanDmpAudiencesGetV10DataRetargetingTagsSource,
        self::CUSTOM_AUDIENCE_TYPE_EXTEND_QianchuanDmpAudiencesGetV10DataRetargetingTagsSource,
        self::CUSTOM_AUDIENCE_TYPE_FRIEND_QianchuanDmpAudiencesGetV10DataRetargetingTagsSource,
        self::CUSTOM_AUDIENCE_TYPE_ONE_KEY_QianchuanDmpAudiencesGetV10DataRetargetingTagsSource,
        self::CUSTOM_AUDIENCE_TYPE_OPERATE_QianchuanDmpAudiencesGetV10DataRetargetingTagsSource,
        self::CUSTOM_AUDIENCE_TYPE_PACK_RULE_QianchuanDmpAudiencesGetV10DataRetargetingTagsSource,
        self::CUSTOM_AUDIENCE_TYPE_RULE_QianchuanDmpAudiencesGetV10DataRetargetingTagsSource,
        self::CUSTOM_AUDIENCE_TYPE_THEME_QianchuanDmpAudiencesGetV10DataRetargetingTagsSource,
        self::CUSTOM_AUDIENCE_TYPE_THIRD_PARTY_QianchuanDmpAudiencesGetV10DataRetargetingTagsSource,
        self::CUSTOM_AUDIENCE_TYPE_UPLOAD_QianchuanDmpAudiencesGetV10DataRetargetingTagsSource,
        self::FINANCECUSTOM_AUDIENCE_TYPE_FINANCE_QianchuanDmpAudiencesGetV10DataRetargetingTagsSource,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanDmpAudiencesGetV10DataRetargetingTagsSource', $value));
        }
        return (string) $value;
    }
}
