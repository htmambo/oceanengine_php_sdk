<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanToolsSmartBoostAdBoostVersionGetV10ResponseData implements \JsonSerializable
{
    /**
     * json返回值
     * @var \Oceanengine\Models\QianchuanToolsSmartBoostAdBoostVersionGetV10ResponseDataRaiseListInfosInner[]
     */
    protected ?array $raiseListInfos = null;

    /**
     * 总数
     * @var int
     */
    protected ?int $totalCnt = null;

    /**
     * json返回值
     * @return \Oceanengine\Models\QianchuanToolsSmartBoostAdBoostVersionGetV10ResponseDataRaiseListInfosInner[]
     */
    public function getRaiseListInfos(): ?array
    {
        return $this->raiseListInfos;
    }

    /**
     * json返回值
     * @param \Oceanengine\Models\QianchuanToolsSmartBoostAdBoostVersionGetV10ResponseDataRaiseListInfosInner[] $raiseListInfos
     * @return self
     */
    public function setRaiseListInfos(?array $raiseListInfos): self
    {
        $this->raiseListInfos = $raiseListInfos;
        return $this;
    }

    /**
     * 总数
     * @return int
     */
    public function getTotalCnt(): ?int
    {
        return $this->totalCnt;
    }

    /**
     * 总数
     * @param int $totalCnt
     * @return self
     */
    public function setTotalCnt(?int $totalCnt): self
    {
        $this->totalCnt = $totalCnt;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->raiseListInfos !== null) {
            $result['raise_list_infos'] = $this->raiseListInfos;
        }
        if ($this->totalCnt !== null) {
            $result['total_cnt'] = $this->totalCnt;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['raise_list_infos'] ?? null) !== null && is_array($v)) {
            $obj->raiseListInfos = array_map(fn ($vv) => \Oceanengine\Models\QianchuanToolsSmartBoostAdBoostVersionGetV10ResponseDataRaiseListInfosInner::fromArray($vv), $v);
        }
        if (($v = $data['total_cnt'] ?? null) !== null) {
            $obj->totalCnt = (int) $v;
        }
        return $obj;
    }
}
