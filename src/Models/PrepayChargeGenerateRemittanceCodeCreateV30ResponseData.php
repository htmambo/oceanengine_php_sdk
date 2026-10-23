<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class PrepayChargeGenerateRemittanceCodeCreateV30ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\PrepayChargeGenerateRemittanceCodeCreateV30ResponseDataRemittanceInfo
     */
    protected ?\Oceanengine\Models\PrepayChargeGenerateRemittanceCodeCreateV30ResponseDataRemittanceInfo $remittanceInfo = null;

    /**
     * @return \Oceanengine\Models\PrepayChargeGenerateRemittanceCodeCreateV30ResponseDataRemittanceInfo
     */
    public function getRemittanceInfo(): ?\Oceanengine\Models\PrepayChargeGenerateRemittanceCodeCreateV30ResponseDataRemittanceInfo
    {
        return $this->remittanceInfo;
    }

    /**
     * @param \Oceanengine\Models\PrepayChargeGenerateRemittanceCodeCreateV30ResponseDataRemittanceInfo $remittanceInfo
     * @return self
     */
    public function setRemittanceInfo(?\Oceanengine\Models\PrepayChargeGenerateRemittanceCodeCreateV30ResponseDataRemittanceInfo $remittanceInfo): self
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
            $obj->remittanceInfo = \Oceanengine\Models\PrepayChargeGenerateRemittanceCodeCreateV30ResponseDataRemittanceInfo::fromArray($v);
        }
        return $obj;
    }
}
