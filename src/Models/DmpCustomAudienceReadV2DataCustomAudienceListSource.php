<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class DmpCustomAudienceReadV2DataCustomAudienceListSource
{
    public const CUSTOM_AUDIENCE_TYPE_BRAND_DmpCustomAudienceReadV2DataCustomAudienceListSource = 'CUSTOM_AUDIENCE_TYPE_BRAND';
    public const CUSTOM_AUDIENCE_TYPE_DATA_SOURCE_DmpCustomAudienceReadV2DataCustomAudienceListSource = 'CUSTOM_AUDIENCE_TYPE_DATA_SOURCE';
    public const CUSTOM_AUDIENCE_TYPE_DOU_PLUS_DmpCustomAudienceReadV2DataCustomAudienceListSource = 'CUSTOM_AUDIENCE_TYPE_DOU_PLUS';
    public const CUSTOM_AUDIENCE_TYPE_EXTEND_DmpCustomAudienceReadV2DataCustomAudienceListSource = 'CUSTOM_AUDIENCE_TYPE_EXTEND';
    public const CUSTOM_AUDIENCE_TYPE_FINANCE_DmpCustomAudienceReadV2DataCustomAudienceListSource = 'CUSTOM_AUDIENCE_TYPE_FINANCE';
    public const CUSTOM_AUDIENCE_TYPE_FRIEND_DmpCustomAudienceReadV2DataCustomAudienceListSource = 'CUSTOM_AUDIENCE_TYPE_FRIEND';
    public const CUSTOM_AUDIENCE_TYPE_ONE_KEY_DmpCustomAudienceReadV2DataCustomAudienceListSource = 'CUSTOM_AUDIENCE_TYPE_ONE_KEY';
    public const CUSTOM_AUDIENCE_TYPE_OPERATE_DmpCustomAudienceReadV2DataCustomAudienceListSource = 'CUSTOM_AUDIENCE_TYPE_OPERATE';
    public const CUSTOM_AUDIENCE_TYPE_PACK_RULE_DmpCustomAudienceReadV2DataCustomAudienceListSource = 'CUSTOM_AUDIENCE_TYPE_PACK_RULE';
    public const CUSTOM_AUDIENCE_TYPE_RULE_DmpCustomAudienceReadV2DataCustomAudienceListSource = 'CUSTOM_AUDIENCE_TYPE_RULE';
    public const CUSTOM_AUDIENCE_TYPE_THEME_DmpCustomAudienceReadV2DataCustomAudienceListSource = 'CUSTOM_AUDIENCE_TYPE_THEME';
    public const CUSTOM_AUDIENCE_TYPE_THIRD_PARTY_DmpCustomAudienceReadV2DataCustomAudienceListSource = 'CUSTOM_AUDIENCE_TYPE_THIRD_PARTY';
    public const CUSTOM_AUDIENCE_TYPE_UPLOAD_DmpCustomAudienceReadV2DataCustomAudienceListSource = 'CUSTOM_AUDIENCE_TYPE_UPLOAD';

    public const ALLOWED_VALUES = [
        self::CUSTOM_AUDIENCE_TYPE_BRAND_DmpCustomAudienceReadV2DataCustomAudienceListSource,
        self::CUSTOM_AUDIENCE_TYPE_DATA_SOURCE_DmpCustomAudienceReadV2DataCustomAudienceListSource,
        self::CUSTOM_AUDIENCE_TYPE_DOU_PLUS_DmpCustomAudienceReadV2DataCustomAudienceListSource,
        self::CUSTOM_AUDIENCE_TYPE_EXTEND_DmpCustomAudienceReadV2DataCustomAudienceListSource,
        self::CUSTOM_AUDIENCE_TYPE_FINANCE_DmpCustomAudienceReadV2DataCustomAudienceListSource,
        self::CUSTOM_AUDIENCE_TYPE_FRIEND_DmpCustomAudienceReadV2DataCustomAudienceListSource,
        self::CUSTOM_AUDIENCE_TYPE_ONE_KEY_DmpCustomAudienceReadV2DataCustomAudienceListSource,
        self::CUSTOM_AUDIENCE_TYPE_OPERATE_DmpCustomAudienceReadV2DataCustomAudienceListSource,
        self::CUSTOM_AUDIENCE_TYPE_PACK_RULE_DmpCustomAudienceReadV2DataCustomAudienceListSource,
        self::CUSTOM_AUDIENCE_TYPE_RULE_DmpCustomAudienceReadV2DataCustomAudienceListSource,
        self::CUSTOM_AUDIENCE_TYPE_THEME_DmpCustomAudienceReadV2DataCustomAudienceListSource,
        self::CUSTOM_AUDIENCE_TYPE_THIRD_PARTY_DmpCustomAudienceReadV2DataCustomAudienceListSource,
        self::CUSTOM_AUDIENCE_TYPE_UPLOAD_DmpCustomAudienceReadV2DataCustomAudienceListSource,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum DmpCustomAudienceReadV2DataCustomAudienceListSource', $value));
        }
        return (string) $value;
    }
}
