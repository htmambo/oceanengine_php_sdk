<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarMcnProviderHandleJoinedAuthorV2Request implements \JsonSerializable
{
    /**
     * @var int[]
     */
    protected ?array $authorIds = null;

    /**
     * @var int
     */
    protected ?int $opType = null;

    /**
     * @var int
     */
    protected ?int $reasonType = null;

    /**
     * 其他拒绝理由
     * @var string
     */
    protected ?string $rejectReasonDetail = null;

    /**
     * @var int
     */
    protected ?int $starId = null;

    /**
     * @var int
     */
    protected ?int $taskId = null;

    /**
     * @return int[]
     */
    public function getAuthorIds(): ?array
    {
        return $this->authorIds;
    }

    /**
     * @param int[] $authorIds
     * @return self
     */
    public function setAuthorIds(?array $authorIds): self
    {
        $this->authorIds = $authorIds;
        return $this;
    }

    /**
     * @return int
     */
    public function getOpType(): ?int
    {
        return $this->opType;
    }

    /**
     * @param int $opType
     * @return self
     */
    public function setOpType(?int $opType): self
    {
        $this->opType = $opType;
        return $this;
    }

    /**
     * @return int
     */
    public function getReasonType(): ?int
    {
        return $this->reasonType;
    }

    /**
     * @param int $reasonType
     * @return self
     */
    public function setReasonType(?int $reasonType): self
    {
        $this->reasonType = $reasonType;
        return $this;
    }

    /**
     * 其他拒绝理由
     * @return string
     */
    public function getRejectReasonDetail(): ?string
    {
        return $this->rejectReasonDetail;
    }

    /**
     * 其他拒绝理由
     * @param string $rejectReasonDetail
     * @return self
     */
    public function setRejectReasonDetail(?string $rejectReasonDetail): self
    {
        $this->rejectReasonDetail = $rejectReasonDetail;
        return $this;
    }

    /**
     * @return int
     */
    public function getStarId(): ?int
    {
        return $this->starId;
    }

    /**
     * @param int $starId
     * @return self
     */
    public function setStarId(?int $starId): self
    {
        $this->starId = $starId;
        return $this;
    }

    /**
     * @return int
     */
    public function getTaskId(): ?int
    {
        return $this->taskId;
    }

    /**
     * @param int $taskId
     * @return self
     */
    public function setTaskId(?int $taskId): self
    {
        $this->taskId = $taskId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->authorIds !== null) {
            $result['author_ids'] = $this->authorIds;
        }
        if ($this->opType !== null) {
            $result['op_type'] = $this->opType;
        }
        if ($this->reasonType !== null) {
            $result['reason_type'] = $this->reasonType;
        }
        if ($this->rejectReasonDetail !== null) {
            $result['reject_reason_detail'] = $this->rejectReasonDetail;
        }
        if ($this->starId !== null) {
            $result['star_id'] = $this->starId;
        }
        if ($this->taskId !== null) {
            $result['task_id'] = $this->taskId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['author_ids'] ?? null) !== null && is_array($v)) {
            $obj->authorIds = $v;
        }
        if (($v = $data['op_type'] ?? null) !== null) {
            $obj->opType = (int) $v;
        }
        if (($v = $data['reason_type'] ?? null) !== null) {
            $obj->reasonType = (int) $v;
        }
        if (($v = $data['reject_reason_detail'] ?? null) !== null) {
            $obj->rejectReasonDetail = (string) $v;
        }
        if (($v = $data['star_id'] ?? null) !== null) {
            $obj->starId = (int) $v;
        }
        if (($v = $data['task_id'] ?? null) !== null) {
            $obj->taskId = (int) $v;
        }
        return $obj;
    }
}
