<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanUniPromotionAdControlTaskListV10Filtering implements \JsonSerializable
{
    /**
     * 任务结束时间，格式 2021-04-05 00:00:00
     * @var string
     */
    protected ?string $createEndTime = null;

    /**
     * 任务开始时间，格式 2021-04-05 00:00:00
     * @var string
     */
    protected ?string $createStartTime = null;

    /**
     * @var \Oceanengine\Models\QianchuanUniPromotionAdControlTaskListV10FilteringExternalAction
     */
    protected ?string $externalAction = null;

    /**
     * @var \Oceanengine\Models\QianchuanUniPromotionAdControlTaskListV10FilteringHavingCost
     */
    protected ?string $havingCost = null;

    /**
     * 支持根据任务id/名称进行搜索
     * @var string
     */
    protected ?string $searchKeyword = null;

    /**
     * @var \Oceanengine\Models\QianchuanUniPromotionAdControlTaskListV10FilteringSmartBidType
     */
    protected ?string $smartBidType = null;

    /**
     * @var \Oceanengine\Models\QianchuanUniPromotionAdControlTaskListV10FilteringTaskStatus
     */
    protected ?string $taskStatus = null;

    /**
     * 任务结束时间，格式 2021-04-05 00:00:00
     * @return string
     */
    public function getCreateEndTime(): ?string
    {
        return $this->createEndTime;
    }

    /**
     * 任务结束时间，格式 2021-04-05 00:00:00
     * @param string $createEndTime
     * @return self
     */
    public function setCreateEndTime(?string $createEndTime): self
    {
        $this->createEndTime = $createEndTime;
        return $this;
    }

    /**
     * 任务开始时间，格式 2021-04-05 00:00:00
     * @return string
     */
    public function getCreateStartTime(): ?string
    {
        return $this->createStartTime;
    }

    /**
     * 任务开始时间，格式 2021-04-05 00:00:00
     * @param string $createStartTime
     * @return self
     */
    public function setCreateStartTime(?string $createStartTime): self
    {
        $this->createStartTime = $createStartTime;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanUniPromotionAdControlTaskListV10FilteringExternalAction
     */
    public function getExternalAction(): ?string
    {
        return $this->externalAction;
    }

    /**
     * @param \Oceanengine\Models\QianchuanUniPromotionAdControlTaskListV10FilteringExternalAction $externalAction
     * @return self
     */
    public function setExternalAction(?string $externalAction): self
    {
        $this->externalAction = $externalAction;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanUniPromotionAdControlTaskListV10FilteringHavingCost
     */
    public function getHavingCost(): ?string
    {
        return $this->havingCost;
    }

    /**
     * @param \Oceanengine\Models\QianchuanUniPromotionAdControlTaskListV10FilteringHavingCost $havingCost
     * @return self
     */
    public function setHavingCost(?string $havingCost): self
    {
        $this->havingCost = $havingCost;
        return $this;
    }

    /**
     * 支持根据任务id/名称进行搜索
     * @return string
     */
    public function getSearchKeyword(): ?string
    {
        return $this->searchKeyword;
    }

    /**
     * 支持根据任务id/名称进行搜索
     * @param string $searchKeyword
     * @return self
     */
    public function setSearchKeyword(?string $searchKeyword): self
    {
        $this->searchKeyword = $searchKeyword;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanUniPromotionAdControlTaskListV10FilteringSmartBidType
     */
    public function getSmartBidType(): ?string
    {
        return $this->smartBidType;
    }

    /**
     * @param \Oceanengine\Models\QianchuanUniPromotionAdControlTaskListV10FilteringSmartBidType $smartBidType
     * @return self
     */
    public function setSmartBidType(?string $smartBidType): self
    {
        $this->smartBidType = $smartBidType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanUniPromotionAdControlTaskListV10FilteringTaskStatus
     */
    public function getTaskStatus(): ?string
    {
        return $this->taskStatus;
    }

    /**
     * @param \Oceanengine\Models\QianchuanUniPromotionAdControlTaskListV10FilteringTaskStatus $taskStatus
     * @return self
     */
    public function setTaskStatus(?string $taskStatus): self
    {
        $this->taskStatus = $taskStatus;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->createEndTime !== null) {
            $result['create_end_time'] = $this->createEndTime;
        }
        if ($this->createStartTime !== null) {
            $result['create_start_time'] = $this->createStartTime;
        }
        if ($this->externalAction !== null) {
            $result['external_action'] = $this->externalAction;
        }
        if ($this->havingCost !== null) {
            $result['having_cost'] = $this->havingCost;
        }
        if ($this->searchKeyword !== null) {
            $result['search_keyword'] = $this->searchKeyword;
        }
        if ($this->smartBidType !== null) {
            $result['smart_bid_type'] = $this->smartBidType;
        }
        if ($this->taskStatus !== null) {
            $result['task_status'] = $this->taskStatus;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['create_end_time'] ?? null) !== null) {
            $obj->createEndTime = (string) $v;
        }
        if (($v = $data['create_start_time'] ?? null) !== null) {
            $obj->createStartTime = (string) $v;
        }
        if (($v = $data['external_action'] ?? null) !== null) {
            $obj->externalAction = (string) $v;
        }
        if (($v = $data['having_cost'] ?? null) !== null) {
            $obj->havingCost = (string) $v;
        }
        if (($v = $data['search_keyword'] ?? null) !== null) {
            $obj->searchKeyword = (string) $v;
        }
        if (($v = $data['smart_bid_type'] ?? null) !== null) {
            $obj->smartBidType = (string) $v;
        }
        if (($v = $data['task_status'] ?? null) !== null) {
            $obj->taskStatus = (string) $v;
        }
        return $obj;
    }
}
