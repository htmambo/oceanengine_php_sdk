<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class PrepayChargeGenerateFixRemiattanceCodeCreateV30ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\PrepayChargeGenerateFixRemiattanceCodeCreateV30ResponseDataRemittanceInfo
     */
    protected ?\Oceanengine\Models\PrepayChargeGenerateFixRemiattanceCodeCreateV30ResponseDataRemittanceInfo $remittanceInfo = null;

    /**
     * @return \Oceanengine\Models\PrepayChargeGenerateFixRemiattanceCodeCreateV30ResponseDataRemittanceInfo
     */
    public function getRemittanceInfo(): ?\Oceanengine\Models\PrepayChargeGenerateFixRemiattanceCodeCreateV30ResponseDataRemittanceInfo
    {
        return $this->remittanceInfo;
    }

    /**
     * @param \Oceanengine\Models\PrepayChargeGenerateFixRemiattanceCodeCreateV30ResponseDataRemittanceInfo $remittanceInfo
     * @return self
     */
    public function setRemittanceInfo(?\Oceanengine\Models\PrepayChargeGenerateFixRemiattanceCodeCreateV30ResponseDataRemittanceInfo $remittanceInfo): self
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
            $obj->remittanceInfo = \Oceanengine\Models\PrepayChargeGenerateFixRemiattanceCodeCreateV30ResponseDataRemittanceInfo::fromArray($v);
        }
        return $obj;
    }
}
