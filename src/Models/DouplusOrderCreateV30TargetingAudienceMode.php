<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class DouplusOrderCreateV30TargetingAudienceMode
{
    public const AUTO_DouplusOrderCreateV30TargetingAudienceMode = 'AUTO';
    public const CUSTOM_DouplusOrderCreateV30TargetingAudienceMode = 'CUSTOM';
    public const AUDIENCE_PKG_DouplusOrderCreateV30TargetingAudienceMode = 'AUDIENCE_PKG';
    public const DMP_PKG_DouplusOrderCreateV30TargetingAudienceMode = 'DMP_PKG';

    public const ALLOWED_VALUES = [
        self::AUTO_DouplusOrderCreateV30TargetingAudienceMode,
        self::CUSTOM_DouplusOrderCreateV30TargetingAudienceMode,
        self::AUDIENCE_PKG_DouplusOrderCreateV30TargetingAudienceMode,
        self::DMP_PKG_DouplusOrderCreateV30TargetingAudienceMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum DouplusOrderCreateV30TargetingAudienceMode', $value));
        }
        return (string) $value;
    }
}
