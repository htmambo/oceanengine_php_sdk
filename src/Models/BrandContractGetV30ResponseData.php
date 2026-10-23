<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandContractGetV30ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\BrandContractGetV30ResponseDataContractListInner[]
     */
    protected ?array $contractList = null;

    /**
     * @return \Oceanengine\Models\BrandContractGetV30ResponseDataContractListInner[]
     */
    public function getContractList(): ?array
    {
        return $this->contractList;
    }

    /**
     * @param \Oceanengine\Models\BrandContractGetV30ResponseDataContractListInner[] $contractList
     * @return self
     */
    public function setContractList(?array $contractList): self
    {
        $this->contractList = $contractList;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->contractList !== null) {
            $result['contract_list'] = $this->contractList;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['contract_list'] ?? null) !== null && is_array($v)) {
            $obj->contractList = array_map(fn ($vv) => \Oceanengine\Models\BrandContractGetV30ResponseDataContractListInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
