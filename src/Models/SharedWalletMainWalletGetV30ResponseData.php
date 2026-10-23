<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class SharedWalletMainWalletGetV30ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\SharedWalletMainWalletGetV30ResponseDataMainWalletInfo
     */
    protected ?\Oceanengine\Models\SharedWalletMainWalletGetV30ResponseDataMainWalletInfo $mainWalletInfo = null;

    /**
     * @return \Oceanengine\Models\SharedWalletMainWalletGetV30ResponseDataMainWalletInfo
     */
    public function getMainWalletInfo(): ?\Oceanengine\Models\SharedWalletMainWalletGetV30ResponseDataMainWalletInfo
    {
        return $this->mainWalletInfo;
    }

    /**
     * @param \Oceanengine\Models\SharedWalletMainWalletGetV30ResponseDataMainWalletInfo $mainWalletInfo
     * @return self
     */
    public function setMainWalletInfo(?\Oceanengine\Models\SharedWalletMainWalletGetV30ResponseDataMainWalletInfo $mainWalletInfo): self
    {
        $this->mainWalletInfo = $mainWalletInfo;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->mainWalletInfo !== null) {
            $result['main_wallet_info'] = $this->mainWalletInfo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['main_wallet_info'] ?? null) !== null && is_array($v)) {
            $obj->mainWalletInfo = \Oceanengine\Models\SharedWalletMainWalletGetV30ResponseDataMainWalletInfo::fromArray($v);
        }
        return $obj;
    }
}
