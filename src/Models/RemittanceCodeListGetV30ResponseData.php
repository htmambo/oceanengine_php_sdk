<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class RemittanceCodeListGetV30ResponseData implements \JsonSerializable
{
    /**
     * 汇款码信息列表
     * @var \Oceanengine\Models\RemittanceCodeListGetV30ResponseDataRemittanceInfoListInner[]
     */
    protected ?array $remittanceInfoList = null;

    /**
     * 总条数
     * @var int
     */
    protected ?int $total = null;

    /**
     * 汇款码信息列表
     * @return \Oceanengine\Models\RemittanceCodeListGetV30ResponseDataRemittanceInfoListInner[]
     */
    public function getRemittanceInfoList(): ?array
    {
        return $this->remittanceInfoList;
    }

    /**
     * 汇款码信息列表
     * @param \Oceanengine\Models\RemittanceCodeListGetV30ResponseDataRemittanceInfoListInner[] $remittanceInfoList
     * @return self
     */
    public function setRemittanceInfoList(?array $remittanceInfoList): self
    {
        $this->remittanceInfoList = $remittanceInfoList;
        return $this;
    }

    /**
     * 总条数
     * @return int
     */
    public function getTotal(): ?int
    {
        return $this->total;
    }

    /**
     * 总条数
     * @param int $total
     * @return self
     */
    public function setTotal(?int $total): self
    {
        $this->total = $total;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->remittanceInfoList !== null) {
            $result['remittance_info_list'] = $this->remittanceInfoList;
        }
        if ($this->total !== null) {
            $result['total'] = $this->total;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['remittance_info_list'] ?? null) !== null && is_array($v)) {
            $obj->remittanceInfoList = array_map(fn ($vv) => \Oceanengine\Models\RemittanceCodeListGetV30ResponseDataRemittanceInfoListInner::fromArray($vv), $v);
        }
        if (($v = $data['total'] ?? null) !== null) {
            $obj->total = (int) $v;
        }
        return $obj;
    }
}
