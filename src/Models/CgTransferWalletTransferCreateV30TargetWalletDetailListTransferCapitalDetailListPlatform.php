<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CgTransferWalletTransferCreateV30TargetWalletDetailListTransferCapitalDetailListPlatform
{
    public const AD_CgTransferWalletTransferCreateV30TargetWalletDetailListTransferCapitalDetailListPlatform = 'AD';
    public const AD_ALL_CgTransferWalletTransferCreateV30TargetWalletDetailListTransferCapitalDetailListPlatform = 'AD_ALL';
    public const BENDITUI_CgTransferWalletTransferCreateV30TargetWalletDetailListTransferCapitalDetailListPlatform = 'BENDITUI';
    public const QIANCHUAN_CgTransferWalletTransferCreateV30TargetWalletDetailListTransferCapitalDetailListPlatform = 'QIANCHUAN';
    public const STAR_CgTransferWalletTransferCreateV30TargetWalletDetailListTransferCapitalDetailListPlatform = 'STAR';

    public const ALLOWED_VALUES = [
        self::AD_CgTransferWalletTransferCreateV30TargetWalletDetailListTransferCapitalDetailListPlatform,
        self::AD_ALL_CgTransferWalletTransferCreateV30TargetWalletDetailListTransferCapitalDetailListPlatform,
        self::BENDITUI_CgTransferWalletTransferCreateV30TargetWalletDetailListTransferCapitalDetailListPlatform,
        self::QIANCHUAN_CgTransferWalletTransferCreateV30TargetWalletDetailListTransferCapitalDetailListPlatform,
        self::STAR_CgTransferWalletTransferCreateV30TargetWalletDetailListTransferCapitalDetailListPlatform,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CgTransferWalletTransferCreateV30TargetWalletDetailListTransferCapitalDetailListPlatform', $value));
        }
        return (string) $value;
    }
}
