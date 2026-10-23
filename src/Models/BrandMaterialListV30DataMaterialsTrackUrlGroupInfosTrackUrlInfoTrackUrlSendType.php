<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BrandMaterialListV30DataMaterialsTrackUrlGroupInfosTrackUrlInfoTrackUrlSendType
{
    public const CLIENT_BrandMaterialListV30DataMaterialsTrackUrlGroupInfosTrackUrlInfoTrackUrlSendType = 'CLIENT';
    public const SERVER_BrandMaterialListV30DataMaterialsTrackUrlGroupInfosTrackUrlInfoTrackUrlSendType = 'SERVER';

    public const ALLOWED_VALUES = [
        self::CLIENT_BrandMaterialListV30DataMaterialsTrackUrlGroupInfosTrackUrlInfoTrackUrlSendType,
        self::SERVER_BrandMaterialListV30DataMaterialsTrackUrlGroupInfosTrackUrlInfoTrackUrlSendType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BrandMaterialListV30DataMaterialsTrackUrlGroupInfosTrackUrlInfoTrackUrlSendType', $value));
        }
        return (string) $value;
    }
}
