<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarChallengeGetCustomTaskListV2ResponseDataTaskListInner implements \JsonSerializable
{
    /**
     * 品牌名称
     * @var string
     */
    protected ?string $brandName = null;

    /**
     * 任务id
     * @var int
     */
    protected ?int $challengeTaskId = null;

    /**
     * 创建时间
     * @var int
     */
    protected ?int $createTime = null;

    /**
     * 任务名称
     * @var string
     */
    protected ?string $demandName = null;

    /**
     * 客户id
     * @var int
     */
    protected ?int $demanderId = null;

    /**
     * 投稿结束时间
     * @var int
     */
    protected ?int $endTime = null;

    /**
     * 3-自定义
     * @var int
     */
    protected ?int $evaluateType = null;

    /**
     * 任务头图
     * @var string
     */
    protected ?string $headImageUrl = null;

    /**
     * 2-自定义结算
     * @var int
     */
    protected ?int $payType = null;

    /**
     * 投稿开始时间
     * @var int
     */
    protected ?int $startTime = null;

    /**
     * 任务类型
     * @var int
     */
    protected ?int $taskCategory = null;

    /**
     * 任务状态
     * @var int
     */
    protected ?int $taskStatus = null;

    /**
     * 结算方式
     * @var int
     */
    protected ?int $universalSettlementType = null;

    /**
     * 品牌名称
     * @return string
     */
    public function getBrandName(): ?string
    {
        return $this->brandName;
    }

    /**
     * 品牌名称
     * @param string $brandName
     * @return self
     */
    public function setBrandName(?string $brandName): self
    {
        $this->brandName = $brandName;
        return $this;
    }

    /**
     * 任务id
     * @return int
     */
    public function getChallengeTaskId(): ?int
    {
        return $this->challengeTaskId;
    }

    /**
     * 任务id
     * @param int $challengeTaskId
     * @return self
     */
    public function setChallengeTaskId(?int $challengeTaskId): self
    {
        $this->challengeTaskId = $challengeTaskId;
        return $this;
    }

    /**
     * 创建时间
     * @return int
     */
    public function getCreateTime(): ?int
    {
        return $this->createTime;
    }

    /**
     * 创建时间
     * @param int $createTime
     * @return self
     */
    public function setCreateTime(?int $createTime): self
    {
        $this->createTime = $createTime;
        return $this;
    }

    /**
     * 任务名称
     * @return string
     */
    public function getDemandName(): ?string
    {
        return $this->demandName;
    }

    /**
     * 任务名称
     * @param string $demandName
     * @return self
     */
    public function setDemandName(?string $demandName): self
    {
        $this->demandName = $demandName;
        return $this;
    }

    /**
     * 客户id
     * @return int
     */
    public function getDemanderId(): ?int
    {
        return $this->demanderId;
    }

    /**
     * 客户id
     * @param int $demanderId
     * @return self
     */
    public function setDemanderId(?int $demanderId): self
    {
        $this->demanderId = $demanderId;
        return $this;
    }

    /**
     * 投稿结束时间
     * @return int
     */
    public function getEndTime(): ?int
    {
        return $this->endTime;
    }

    /**
     * 投稿结束时间
     * @param int $endTime
     * @return self
     */
    public function setEndTime(?int $endTime): self
    {
        $this->endTime = $endTime;
        return $this;
    }

    /**
     * 3-自定义
     * @return int
     */
    public function getEvaluateType(): ?int
    {
        return $this->evaluateType;
    }

    /**
     * 3-自定义
     * @param int $evaluateType
     * @return self
     */
    public function setEvaluateType(?int $evaluateType): self
    {
        $this->evaluateType = $evaluateType;
        return $this;
    }

    /**
     * 任务头图
     * @return string
     */
    public function getHeadImageUrl(): ?string
    {
        return $this->headImageUrl;
    }

    /**
     * 任务头图
     * @param string $headImageUrl
     * @return self
     */
    public function setHeadImageUrl(?string $headImageUrl): self
    {
        $this->headImageUrl = $headImageUrl;
        return $this;
    }

    /**
     * 2-自定义结算
     * @return int
     */
    public function getPayType(): ?int
    {
        return $this->payType;
    }

    /**
     * 2-自定义结算
     * @param int $payType
     * @return self
     */
    public function setPayType(?int $payType): self
    {
        $this->payType = $payType;
        return $this;
    }

    /**
     * 投稿开始时间
     * @return int
     */
    public function getStartTime(): ?int
    {
        return $this->startTime;
    }

    /**
     * 投稿开始时间
     * @param int $startTime
     * @return self
     */
    public function setStartTime(?int $startTime): self
    {
        $this->startTime = $startTime;
        return $this;
    }

    /**
     * 任务类型
     * @return int
     */
    public function getTaskCategory(): ?int
    {
        return $this->taskCategory;
    }

    /**
     * 任务类型
     * @param int $taskCategory
     * @return self
     */
    public function setTaskCategory(?int $taskCategory): self
    {
        $this->taskCategory = $taskCategory;
        return $this;
    }

    /**
     * 任务状态
     * @return int
     */
    public function getTaskStatus(): ?int
    {
        return $this->taskStatus;
    }

    /**
     * 任务状态
     * @param int $taskStatus
     * @return self
     */
    public function setTaskStatus(?int $taskStatus): self
    {
        $this->taskStatus = $taskStatus;
        return $this;
    }

    /**
     * 结算方式
     * @return int
     */
    public function getUniversalSettlementType(): ?int
    {
        return $this->universalSettlementType;
    }

    /**
     * 结算方式
     * @param int $universalSettlementType
     * @return self
     */
    public function setUniversalSettlementType(?int $universalSettlementType): self
    {
        $this->universalSettlementType = $universalSettlementType;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->brandName !== null) {
            $result['brand_name'] = $this->brandName;
        }
        if ($this->challengeTaskId !== null) {
            $result['challenge_task_id'] = $this->challengeTaskId;
        }
        if ($this->createTime !== null) {
            $result['create_time'] = $this->createTime;
        }
        if ($this->demandName !== null) {
            $result['demand_name'] = $this->demandName;
        }
        if ($this->demanderId !== null) {
            $result['demander_id'] = $this->demanderId;
        }
        if ($this->endTime !== null) {
            $result['end_time'] = $this->endTime;
        }
        if ($this->evaluateType !== null) {
            $result['evaluate_type'] = $this->evaluateType;
        }
        if ($this->headImageUrl !== null) {
            $result['head_image_url'] = $this->headImageUrl;
        }
        if ($this->payType !== null) {
            $result['pay_type'] = $this->payType;
        }
        if ($this->startTime !== null) {
            $result['start_time'] = $this->startTime;
        }
        if ($this->taskCategory !== null) {
            $result['task_category'] = $this->taskCategory;
        }
        if ($this->taskStatus !== null) {
            $result['task_status'] = $this->taskStatus;
        }
        if ($this->universalSettlementType !== null) {
            $result['universal_settlement_type'] = $this->universalSettlementType;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['brand_name'] ?? null) !== null) {
            $obj->brandName = (string) $v;
        }
        if (($v = $data['challenge_task_id'] ?? null) !== null) {
            $obj->challengeTaskId = (int) $v;
        }
        if (($v = $data['create_time'] ?? null) !== null) {
            $obj->createTime = (int) $v;
        }
        if (($v = $data['demand_name'] ?? null) !== null) {
            $obj->demandName = (string) $v;
        }
        if (($v = $data['demander_id'] ?? null) !== null) {
            $obj->demanderId = (int) $v;
        }
        if (($v = $data['end_time'] ?? null) !== null) {
            $obj->endTime = (int) $v;
        }
        if (($v = $data['evaluate_type'] ?? null) !== null) {
            $obj->evaluateType = (int) $v;
        }
        if (($v = $data['head_image_url'] ?? null) !== null) {
            $obj->headImageUrl = (string) $v;
        }
        if (($v = $data['pay_type'] ?? null) !== null) {
            $obj->payType = (int) $v;
        }
        if (($v = $data['start_time'] ?? null) !== null) {
            $obj->startTime = (int) $v;
        }
        if (($v = $data['task_category'] ?? null) !== null) {
            $obj->taskCategory = (int) $v;
        }
        if (($v = $data['task_status'] ?? null) !== null) {
            $obj->taskStatus = (int) $v;
        }
        if (($v = $data['universal_settlement_type'] ?? null) !== null) {
            $obj->universalSettlementType = (int) $v;
        }
        return $obj;
    }
}
