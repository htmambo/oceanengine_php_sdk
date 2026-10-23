<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AdvertiserQualificationCreateV2V2QualificationsAdQualificationType
{
    public const AUTHORIZATION_AdvertiserQualificationCreateV2V2QualificationsAdQualificationType = 'AUTHORIZATION';
    public const CERTIFY_AdvertiserQualificationCreateV2V2QualificationsAdQualificationType = 'CERTIFY';
    public const TRADEMARK_CERT_AdvertiserQualificationCreateV2V2QualificationsAdQualificationType = 'TRADEMARK_CERT';
    public const AD_DATA_CERT_AdvertiserQualificationCreateV2V2QualificationsAdQualificationType = 'AD_DATA_CERT';
    public const INSPECT_REPORT_AdvertiserQualificationCreateV2V2QualificationsAdQualificationType = 'INSPECT_REPORT';

    public const ALLOWED_VALUES = [
        self::AUTHORIZATION_AdvertiserQualificationCreateV2V2QualificationsAdQualificationType,
        self::CERTIFY_AdvertiserQualificationCreateV2V2QualificationsAdQualificationType,
        self::TRADEMARK_CERT_AdvertiserQualificationCreateV2V2QualificationsAdQualificationType,
        self::AD_DATA_CERT_AdvertiserQualificationCreateV2V2QualificationsAdQualificationType,
        self::INSPECT_REPORT_AdvertiserQualificationCreateV2V2QualificationsAdQualificationType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AdvertiserQualificationCreateV2V2QualificationsAdQualificationType', $value));
        }
        return (string) $value;
    }
}
