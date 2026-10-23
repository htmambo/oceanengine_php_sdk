<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AdvertiserVerifyInfoGetV30DataRecordsVerifyType
{
    public const AD_ARK_SKIP_AdvertiserVerifyInfoGetV30DataRecordsVerifyType = 'AD_ARK_SKIP';
    public const AUTH_AdvertiserVerifyInfoGetV30DataRecordsVerifyType = 'AUTH';
    public const AUTH_LETTER_AdvertiserVerifyInfoGetV30DataRecordsVerifyType = 'AUTH_LETTER';
    public const BYTEDANCE_PAY_AdvertiserVerifyInfoGetV30DataRecordsVerifyType = 'BYTEDANCE_PAY';
    public const CUSTOMER_PAY_AdvertiserVerifyInfoGetV30DataRecordsVerifyType = 'CUSTOMER_PAY';
    public const ELEC_CERT_SKIP_AdvertiserVerifyInfoGetV30DataRecordsVerifyType = 'ELEC_CERT_SKIP';
    public const FACE_DETECT_AdvertiserVerifyInfoGetV30DataRecordsVerifyType = 'FACE_DETECT';
    public const PERSON_VERIFY3_AdvertiserVerifyInfoGetV30DataRecordsVerifyType = 'PERSON_VERIFY3';
    public const PERSON_VERIFY4_AdvertiserVerifyInfoGetV30DataRecordsVerifyType = 'PERSON_VERIFY4';
    public const SKIP_AdvertiserVerifyInfoGetV30DataRecordsVerifyType = 'SKIP';
    public const THRID_PARTY_AUTH_AdvertiserVerifyInfoGetV30DataRecordsVerifyType = 'THRID_PARTY_AUTH';

    public const ALLOWED_VALUES = [
        self::AD_ARK_SKIP_AdvertiserVerifyInfoGetV30DataRecordsVerifyType,
        self::AUTH_AdvertiserVerifyInfoGetV30DataRecordsVerifyType,
        self::AUTH_LETTER_AdvertiserVerifyInfoGetV30DataRecordsVerifyType,
        self::BYTEDANCE_PAY_AdvertiserVerifyInfoGetV30DataRecordsVerifyType,
        self::CUSTOMER_PAY_AdvertiserVerifyInfoGetV30DataRecordsVerifyType,
        self::ELEC_CERT_SKIP_AdvertiserVerifyInfoGetV30DataRecordsVerifyType,
        self::FACE_DETECT_AdvertiserVerifyInfoGetV30DataRecordsVerifyType,
        self::PERSON_VERIFY3_AdvertiserVerifyInfoGetV30DataRecordsVerifyType,
        self::PERSON_VERIFY4_AdvertiserVerifyInfoGetV30DataRecordsVerifyType,
        self::SKIP_AdvertiserVerifyInfoGetV30DataRecordsVerifyType,
        self::THRID_PARTY_AUTH_AdvertiserVerifyInfoGetV30DataRecordsVerifyType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AdvertiserVerifyInfoGetV30DataRecordsVerifyType', $value));
        }
        return (string) $value;
    }
}
