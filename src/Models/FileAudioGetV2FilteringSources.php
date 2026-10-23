<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class FileAudioGetV2FilteringSources
{
    public const AD_SITE_FileAudioGetV2FilteringSources = 'AD_SITE';
    public const OPEN_API_FileAudioGetV2FilteringSources = 'OPEN_API';
    public const TTS_TEXT_TO_AUDIO_FileAudioGetV2FilteringSources = 'TTS_TEXT_TO_AUDIO';

    public const ALLOWED_VALUES = [
        self::AD_SITE_FileAudioGetV2FilteringSources,
        self::OPEN_API_FileAudioGetV2FilteringSources,
        self::TTS_TEXT_TO_AUDIO_FileAudioGetV2FilteringSources,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum FileAudioGetV2FilteringSources', $value));
        }
        return (string) $value;
    }
}
