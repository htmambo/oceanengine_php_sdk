<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class WalletPrepayChargeGenerateRemittanceCodeCreateV30ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\WalletPrepayChargeGenerateRemittanceCodeCreateV30ResponseDataRemittanceInfo
     */
    protected ?\Oceanengine\Models\WalletPrepayChargeGenerateRemittanceCodeCreateV30ResponseDataRemittanceInfo $remittanceInfo = null;

    /**
     * @return \Oceanengine\Models\WalletPrepayChargeGenerateRemittanceCodeCreateV30ResponseDataRemittanceInfo
     */
    public function getRemittanceInfo(): ?\Oceanengine\Models\WalletPrepayChargeGenerateRemittanceCodeCreateV30ResponseDataRemittanceInfo
    {
        return $this->remittanceInfo;
    }

    /**
     * @param \Oceanengine\Models\WalletPrepayChargeGenerateRemittanceCodeCreateV30ResponseDataRemittanceInfo $remittanceInfo
     * @return self
     */
    public function setRemittanceInfo(?\Oceanengine\Models\WalletPrepayChargeGenerateRemittanceCodeCreateV30ResponseDataRemittanceInfo $remittanceInfo): self
    {
        $this->remittanceInfo = $remittanceInfo;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->remittanceInfo !== null) {
            $result['remittance_info'] = $this->remittanceInfo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['remittance_info'] ?? null) !== null && is_array($v)) {
            $obj->remittanceInfo = \Oceanengine\Models\WalletPrepayChargeGenerateRemittanceCodeCreateV30ResponseDataRemittanceInfo::fromArray($v);
        }
        return $obj;
    }
}
