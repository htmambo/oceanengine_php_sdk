<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class CustomerCenterAccountOfflineListV30ResponseDataPageInfo implements \JsonSerializable
{
    /**
     * 总计数量
     * @var int
     */
    protected ?int $totalNumber = null;

    /**
     * 总计数量
     * @return int
     */
    public function getTotalNumber(): ?int
    {
        return $this->totalNumber;
    }

    /**
     * 总计数量
     * @param int $totalNumber
     * @return self
     */
    public function setTotalNumber(?int $totalNumber): self
    {
        $this->totalNumber = $totalNumber;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->totalNumber !== null) {
            $result['total_number'] = $this->totalNumber;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['total_number'] ?? null) !== null) {
            $obj->totalNumber = (int) $v;
        }
        return $obj;
    }
}
