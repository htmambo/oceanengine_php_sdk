<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AdvertiserAttachmentUploadV30AttachmentType
{
    public const DELIVERY_ATTACHMENT_AdvertiserAttachmentUploadV30AttachmentType = 'DELIVERY_ATTACHMENT';

    public const ALLOWED_VALUES = [
        self::DELIVERY_ATTACHMENT_AdvertiserAttachmentUploadV30AttachmentType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AdvertiserAttachmentUploadV30AttachmentType', $value));
        }
        return (string) $value;
    }
}
