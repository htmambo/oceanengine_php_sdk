<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsEbpMaterialAuthListV30ResponseDataPage implements \JsonSerializable
{
    /**
     * 总数
     * @var int
     */
    protected ?int $totalNumber = null;

    /**
     * 总页数
     * @var int
     */
    protected ?int $totalPage = null;

    /**
     * 总数
     * @return int
     */
    public function getTotalNumber(): ?int
    {
        return $this->totalNumber;
    }

    /**
     * 总数
     * @param int $totalNumber
     * @return self
     */
    public function setTotalNumber(?int $totalNumber): self
    {
        $this->totalNumber = $totalNumber;
        return $this;
    }

    /**
     * 总页数
     * @return int
     */
    public function getTotalPage(): ?int
    {
        return $this->totalPage;
    }

    /**
     * 总页数
     * @param int $totalPage
     * @return self
     */
    public function setTotalPage(?int $totalPage): self
    {
        $this->totalPage = $totalPage;
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
        if ($this->totalPage !== null) {
            $result['total_page'] = $this->totalPage;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['total_number'] ?? null) !== null) {
            $obj->totalNumber = (int) $v;
        }
        if (($v = $data['total_page'] ?? null) !== null) {
            $obj->totalPage = (int) $v;
        }
        return $obj;
    }
}
