<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsClueRefundInfoQueryV2ResponseDataInfoInner implements \JsonSerializable
{
    /**
     * 线索ID
     * @var int
     */
    protected ?int $clueId = null;

    /**
     * 线索是否参与返款标识
     * @var int
     */
    protected ?int $hasQualification = null;

    /**
     * 返款进度是否结束标识
     * @var int
     */
    protected ?int $isFinished = null;

    /**
     * 返款小阶段过期时间，单位为毫秒级unix timestamp。
     * @var int[]
     */
    protected ?array $overdueTimestamps = null;

    /**
     * 返款规定合规呼叫总次数
     * @var int
     */
    protected ?int $totalCallCnt = null;

    /**
     * 符合返款要求呼叫次数
     * @var int
     */
    protected ?int $validCallCnt = null;

    /**
     * 线索ID
     * @return int
     */
    public function getClueId(): ?int
    {
        return $this->clueId;
    }

    /**
     * 线索ID
     * @param int $clueId
     * @return self
     */
    public function setClueId(?int $clueId): self
    {
        $this->clueId = $clueId;
        return $this;
    }

    /**
     * 线索是否参与返款标识
     * @return int
     */
    public function getHasQualification(): ?int
    {
        return $this->hasQualification;
    }

    /**
     * 线索是否参与返款标识
     * @param int $hasQualification
     * @return self
     */
    public function setHasQualification(?int $hasQualification): self
    {
        $this->hasQualification = $hasQualification;
        return $this;
    }

    /**
     * 返款进度是否结束标识
     * @return int
     */
    public function getIsFinished(): ?int
    {
        return $this->isFinished;
    }

    /**
     * 返款进度是否结束标识
     * @param int $isFinished
     * @return self
     */
    public function setIsFinished(?int $isFinished): self
    {
        $this->isFinished = $isFinished;
        return $this;
    }

    /**
     * 返款小阶段过期时间，单位为毫秒级unix timestamp。
     * @return int[]
     */
    public function getOverdueTimestamps(): ?array
    {
        return $this->overdueTimestamps;
    }

    /**
     * 返款小阶段过期时间，单位为毫秒级unix timestamp。
     * @param int[] $overdueTimestamps
     * @return self
     */
    public function setOverdueTimestamps(?array $overdueTimestamps): self
    {
        $this->overdueTimestamps = $overdueTimestamps;
        return $this;
    }

    /**
     * 返款规定合规呼叫总次数
     * @return int
     */
    public function getTotalCallCnt(): ?int
    {
        return $this->totalCallCnt;
    }

    /**
     * 返款规定合规呼叫总次数
     * @param int $totalCallCnt
     * @return self
     */
    public function setTotalCallCnt(?int $totalCallCnt): self
    {
        $this->totalCallCnt = $totalCallCnt;
        return $this;
    }

    /**
     * 符合返款要求呼叫次数
     * @return int
     */
    public function getValidCallCnt(): ?int
    {
        return $this->validCallCnt;
    }

    /**
     * 符合返款要求呼叫次数
     * @param int $validCallCnt
     * @return self
     */
    public function setValidCallCnt(?int $validCallCnt): self
    {
        $this->validCallCnt = $validCallCnt;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->clueId !== null) {
            $result['clue_id'] = $this->clueId;
        }
        if ($this->hasQualification !== null) {
            $result['has_qualification'] = $this->hasQualification;
        }
        if ($this->isFinished !== null) {
            $result['is_finished'] = $this->isFinished;
        }
        if ($this->overdueTimestamps !== null) {
            $result['overdue_timestamps'] = $this->overdueTimestamps;
        }
        if ($this->totalCallCnt !== null) {
            $result['total_call_cnt'] = $this->totalCallCnt;
        }
        if ($this->validCallCnt !== null) {
            $result['valid_call_cnt'] = $this->validCallCnt;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['clue_id'] ?? null) !== null) {
            $obj->clueId = (int) $v;
        }
        if (($v = $data['has_qualification'] ?? null) !== null) {
            $obj->hasQualification = (int) $v;
        }
        if (($v = $data['is_finished'] ?? null) !== null) {
            $obj->isFinished = (int) $v;
        }
        if (($v = $data['overdue_timestamps'] ?? null) !== null && is_array($v)) {
            $obj->overdueTimestamps = $v;
        }
        if (($v = $data['total_call_cnt'] ?? null) !== null) {
            $obj->totalCallCnt = (int) $v;
        }
        if (($v = $data['valid_call_cnt'] ?? null) !== null) {
            $obj->validCallCnt = (int) $v;
        }
        return $obj;
    }
}
