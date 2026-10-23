<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class DmpCustomAudienceSelectV2DataCustomAudienceListSource
{
    public const CUSTOM_AUDIENCE_TYPE_BRAND_DmpCustomAudienceSelectV2DataCustomAudienceListSource = 'CUSTOM_AUDIENCE_TYPE_BRAND';
    public const CUSTOM_AUDIENCE_TYPE_DATA_SOURCE_DmpCustomAudienceSelectV2DataCustomAudienceListSource = 'CUSTOM_AUDIENCE_TYPE_DATA_SOURCE';
    public const CUSTOM_AUDIENCE_TYPE_DOU_PLUS_DmpCustomAudienceSelectV2DataCustomAudienceListSource = 'CUSTOM_AUDIENCE_TYPE_DOU_PLUS';
    public const CUSTOM_AUDIENCE_TYPE_EXTEND_DmpCustomAudienceSelectV2DataCustomAudienceListSource = 'CUSTOM_AUDIENCE_TYPE_EXTEND';
    public const CUSTOM_AUDIENCE_TYPE_FINANCE_DmpCustomAudienceSelectV2DataCustomAudienceListSource = 'CUSTOM_AUDIENCE_TYPE_FINANCE';
    public const CUSTOM_AUDIENCE_TYPE_FRIEND_DmpCustomAudienceSelectV2DataCustomAudienceListSource = 'CUSTOM_AUDIENCE_TYPE_FRIEND';
    public const CUSTOM_AUDIENCE_TYPE_ONE_KEY_DmpCustomAudienceSelectV2DataCustomAudienceListSource = 'CUSTOM_AUDIENCE_TYPE_ONE_KEY';
    public const CUSTOM_AUDIENCE_TYPE_OPERATE_DmpCustomAudienceSelectV2DataCustomAudienceListSource = 'CUSTOM_AUDIENCE_TYPE_OPERATE';
    public const CUSTOM_AUDIENCE_TYPE_PACK_RULE_DmpCustomAudienceSelectV2DataCustomAudienceListSource = 'CUSTOM_AUDIENCE_TYPE_PACK_RULE';
    public const CUSTOM_AUDIENCE_TYPE_RULE_DmpCustomAudienceSelectV2DataCustomAudienceListSource = 'CUSTOM_AUDIENCE_TYPE_RULE';
    public const CUSTOM_AUDIENCE_TYPE_THEME_DmpCustomAudienceSelectV2DataCustomAudienceListSource = 'CUSTOM_AUDIENCE_TYPE_THEME';
    public const CUSTOM_AUDIENCE_TYPE_THIRD_PARTY_DmpCustomAudienceSelectV2DataCustomAudienceListSource = 'CUSTOM_AUDIENCE_TYPE_THIRD_PARTY';
    public const CUSTOM_AUDIENCE_TYPE_UPLOAD_DmpCustomAudienceSelectV2DataCustomAudienceListSource = 'CUSTOM_AUDIENCE_TYPE_UPLOAD';

    public const ALLOWED_VALUES = [
        self::CUSTOM_AUDIENCE_TYPE_BRAND_DmpCustomAudienceSelectV2DataCustomAudienceListSource,
        self::CUSTOM_AUDIENCE_TYPE_DATA_SOURCE_DmpCustomAudienceSelectV2DataCustomAudienceListSource,
        self::CUSTOM_AUDIENCE_TYPE_DOU_PLUS_DmpCustomAudienceSelectV2DataCustomAudienceListSource,
        self::CUSTOM_AUDIENCE_TYPE_EXTEND_DmpCustomAudienceSelectV2DataCustomAudienceListSource,
        self::CUSTOM_AUDIENCE_TYPE_FINANCE_DmpCustomAudienceSelectV2DataCustomAudienceListSource,
        self::CUSTOM_AUDIENCE_TYPE_FRIEND_DmpCustomAudienceSelectV2DataCustomAudienceListSource,
        self::CUSTOM_AUDIENCE_TYPE_ONE_KEY_DmpCustomAudienceSelectV2DataCustomAudienceListSource,
        self::CUSTOM_AUDIENCE_TYPE_OPERATE_DmpCustomAudienceSelectV2DataCustomAudienceListSource,
        self::CUSTOM_AUDIENCE_TYPE_PACK_RULE_DmpCustomAudienceSelectV2DataCustomAudienceListSource,
        self::CUSTOM_AUDIENCE_TYPE_RULE_DmpCustomAudienceSelectV2DataCustomAudienceListSource,
        self::CUSTOM_AUDIENCE_TYPE_THEME_DmpCustomAudienceSelectV2DataCustomAudienceListSource,
        self::CUSTOM_AUDIENCE_TYPE_THIRD_PARTY_DmpCustomAudienceSelectV2DataCustomAudienceListSource,
        self::CUSTOM_AUDIENCE_TYPE_UPLOAD_DmpCustomAudienceSelectV2DataCustomAudienceListSource,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum DmpCustomAudienceSelectV2DataCustomAudienceListSource', $value));
        }
        return (string) $value;
    }
}
