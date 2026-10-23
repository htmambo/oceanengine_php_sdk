<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanAdQuotaGetV10ResponseDataQuotaFeedQuotaInfo implements \JsonSerializable
{
    /**
     * 总在投计划限额
     * @var int
     */
    protected ?int $totalNum = null;

    /**
     * 总在投计划限额
     * @return int
     */
    public function getTotalNum(): ?int
    {
        return $this->totalNum;
    }

    /**
     * 总在投计划限额
     * @param int $totalNum
     * @return self
     */
    public function setTotalNum(?int $totalNum): self
    {
        $this->totalNum = $totalNum;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->totalNum !== null) {
            $result['total_num'] = $this->totalNum;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['total_num'] ?? null) !== null) {
            $obj->totalNum = (int) $v;
        }
        return $obj;
    }
}
