<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class SharedWalletWalletOperationLogGetV30ResponseDataListInnerOperationDetailRelationChangeOperationDetail implements \JsonSerializable
{
    /**
     * 失败数量
     * @var int
     */
    protected ?int $failAdvCnt = null;

    /**
     * 成功数量
     * @var int
     */
    protected ?int $successAdvCnt = null;

    /**
     * 总数量
     * @var int
     */
    protected ?int $totalAdvCnt = null;

    /**
     * 失败数量
     * @return int
     */
    public function getFailAdvCnt(): ?int
    {
        return $this->failAdvCnt;
    }

    /**
     * 失败数量
     * @param int $failAdvCnt
     * @return self
     */
    public function setFailAdvCnt(?int $failAdvCnt): self
    {
        $this->failAdvCnt = $failAdvCnt;
        return $this;
    }

    /**
     * 成功数量
     * @return int
     */
    public function getSuccessAdvCnt(): ?int
    {
        return $this->successAdvCnt;
    }

    /**
     * 成功数量
     * @param int $successAdvCnt
     * @return self
     */
    public function setSuccessAdvCnt(?int $successAdvCnt): self
    {
        $this->successAdvCnt = $successAdvCnt;
        return $this;
    }

    /**
     * 总数量
     * @return int
     */
    public function getTotalAdvCnt(): ?int
    {
        return $this->totalAdvCnt;
    }

    /**
     * 总数量
     * @param int $totalAdvCnt
     * @return self
     */
    public function setTotalAdvCnt(?int $totalAdvCnt): self
    {
        $this->totalAdvCnt = $totalAdvCnt;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->failAdvCnt !== null) {
            $result['fail_adv_cnt'] = $this->failAdvCnt;
        }
        if ($this->successAdvCnt !== null) {
            $result['success_adv_cnt'] = $this->successAdvCnt;
        }
        if ($this->totalAdvCnt !== null) {
            $result['total_adv_cnt'] = $this->totalAdvCnt;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['fail_adv_cnt'] ?? null) !== null) {
            $obj->failAdvCnt = (int) $v;
        }
        if (($v = $data['success_adv_cnt'] ?? null) !== null) {
            $obj->successAdvCnt = (int) $v;
        }
        if (($v = $data['total_adv_cnt'] ?? null) !== null) {
            $obj->totalAdvCnt = (int) $v;
        }
        return $obj;
    }
}
