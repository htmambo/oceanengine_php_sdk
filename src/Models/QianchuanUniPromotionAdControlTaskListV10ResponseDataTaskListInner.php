<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanUniPromotionAdControlTaskListV10ResponseDataTaskListInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\QianchuanUniPromotionAdControlTaskListV10ResponseDataTaskListInnerAudience
     */
    protected ?\Oceanengine\Models\QianchuanUniPromotionAdControlTaskListV10ResponseDataTaskListInnerAudience $audience = null;

    /**
     * 直播全域-素材追投-控成本追投-直播间成交的转化出价，单位元
     * @var float
     */
    protected ?float $bid = null;

    /**
     * 预算，单位元，最多支持两位小数
     * @var float
     */
    protected ?float $budget = null;

    /**
     * 创建时间，datetime格式
     * @var string
     */
    protected ?string $createTime = null;

    /**
     * 深层转化目标名称
     * @var string
     */
    protected ?string $deepExternalActionName = null;

    /**
     * 调控时长，0.5h～24.0h，步进0.5h
     * @var float
     */
    protected ?float $duration = null;

    /**
     * 转化目标名称
     * @var string
     */
    protected ?string $externalActionName = null;

    /**
     * 任务id
     * @var int
     */
    protected ?int $id = null;

    /**
     * @var \Oceanengine\Models\QianchuanUniPromotionAdControlTaskListV10ResponseDataTaskListInnerMaterialListInner[]
     */
    protected ?array $materialList = null;

    /**
     * @var \Oceanengine\Models\QianchuanUniPromotionAdControlTaskListV10ResponseDataTaskListInnerMetrics
     */
    protected ?\Oceanengine\Models\QianchuanUniPromotionAdControlTaskListV10ResponseDataTaskListInnerMetrics $metrics = null;

    /**
     * 任务名称
     * @var string
     */
    protected ?string $name = null;

    /**
     * 直播全域-素材追投-控成本追投-支付ROI目标，单位元
     * @var float
     */
    protected ?float $roi2Goal = null;

    /**
     * @var \Oceanengine\Models\QianchuanUniPromotionAdControlTaskListV10ResponseDataTaskListInnerRoomInfo
     */
    protected ?\Oceanengine\Models\QianchuanUniPromotionAdControlTaskListV10ResponseDataTaskListInnerRoomInfo $roomInfo = null;

    /**
     * @var \Oceanengine\Models\QianchuanUniPromotionAdControlTaskListV10DataTaskListSmartBidType
     */
    protected ?string $smartBidType = null;

    /**
     * @var \Oceanengine\Models\QianchuanUniPromotionAdControlTaskListV10DataTaskListTaskStatus
     */
    protected ?string $taskStatus = null;

    /**
     * @return \Oceanengine\Models\QianchuanUniPromotionAdControlTaskListV10ResponseDataTaskListInnerAudience
     */
    public function getAudience(): ?\Oceanengine\Models\QianchuanUniPromotionAdControlTaskListV10ResponseDataTaskListInnerAudience
    {
        return $this->audience;
    }

    /**
     * @param \Oceanengine\Models\QianchuanUniPromotionAdControlTaskListV10ResponseDataTaskListInnerAudience $audience
     * @return self
     */
    public function setAudience(?\Oceanengine\Models\QianchuanUniPromotionAdControlTaskListV10ResponseDataTaskListInnerAudience $audience): self
    {
        $this->audience = $audience;
        return $this;
    }

    /**
     * 直播全域-素材追投-控成本追投-直播间成交的转化出价，单位元
     * @return float
     */
    public function getBid(): ?float
    {
        return $this->bid;
    }

    /**
     * 直播全域-素材追投-控成本追投-直播间成交的转化出价，单位元
     * @param float $bid
     * @return self
     */
    public function setBid(?float $bid): self
    {
        $this->bid = $bid;
        return $this;
    }

    /**
     * 预算，单位元，最多支持两位小数
     * @return float
     */
    public function getBudget(): ?float
    {
        return $this->budget;
    }

    /**
     * 预算，单位元，最多支持两位小数
     * @param float $budget
     * @return self
     */
    public function setBudget(?float $budget): self
    {
        $this->budget = $budget;
        return $this;
    }

    /**
     * 创建时间，datetime格式
     * @return string
     */
    public function getCreateTime(): ?string
    {
        return $this->createTime;
    }

    /**
     * 创建时间，datetime格式
     * @param string $createTime
     * @return self
     */
    public function setCreateTime(?string $createTime): self
    {
        $this->createTime = $createTime;
        return $this;
    }

    /**
     * 深层转化目标名称
     * @return string
     */
    public function getDeepExternalActionName(): ?string
    {
        return $this->deepExternalActionName;
    }

    /**
     * 深层转化目标名称
     * @param string $deepExternalActionName
     * @return self
     */
    public function setDeepExternalActionName(?string $deepExternalActionName): self
    {
        $this->deepExternalActionName = $deepExternalActionName;
        return $this;
    }

    /**
     * 调控时长，0.5h～24.0h，步进0.5h
     * @return float
     */
    public function getDuration(): ?float
    {
        return $this->duration;
    }

    /**
     * 调控时长，0.5h～24.0h，步进0.5h
     * @param float $duration
     * @return self
     */
    public function setDuration(?float $duration): self
    {
        $this->duration = $duration;
        return $this;
    }

    /**
     * 转化目标名称
     * @return string
     */
    public function getExternalActionName(): ?string
    {
        return $this->externalActionName;
    }

    /**
     * 转化目标名称
     * @param string $externalActionName
     * @return self
     */
    public function setExternalActionName(?string $externalActionName): self
    {
        $this->externalActionName = $externalActionName;
        return $this;
    }

    /**
     * 任务id
     * @return int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * 任务id
     * @param int $id
     * @return self
     */
    public function setId(?int $id): self
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanUniPromotionAdControlTaskListV10ResponseDataTaskListInnerMaterialListInner[]
     */
    public function getMaterialList(): ?array
    {
        return $this->materialList;
    }

    /**
     * @param \Oceanengine\Models\QianchuanUniPromotionAdControlTaskListV10ResponseDataTaskListInnerMaterialListInner[] $materialList
     * @return self
     */
    public function setMaterialList(?array $materialList): self
    {
        $this->materialList = $materialList;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanUniPromotionAdControlTaskListV10ResponseDataTaskListInnerMetrics
     */
    public function getMetrics(): ?\Oceanengine\Models\QianchuanUniPromotionAdControlTaskListV10ResponseDataTaskListInnerMetrics
    {
        return $this->metrics;
    }

    /**
     * @param \Oceanengine\Models\QianchuanUniPromotionAdControlTaskListV10ResponseDataTaskListInnerMetrics $metrics
     * @return self
     */
    public function setMetrics(?\Oceanengine\Models\QianchuanUniPromotionAdControlTaskListV10ResponseDataTaskListInnerMetrics $metrics): self
    {
        $this->metrics = $metrics;
        return $this;
    }

    /**
     * 任务名称
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * 任务名称
     * @param string $name
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * 直播全域-素材追投-控成本追投-支付ROI目标，单位元
     * @return float
     */
    public function getRoi2Goal(): ?float
    {
        return $this->roi2Goal;
    }

    /**
     * 直播全域-素材追投-控成本追投-支付ROI目标，单位元
     * @param float $roi2Goal
     * @return self
     */
    public function setRoi2Goal(?float $roi2Goal): self
    {
        $this->roi2Goal = $roi2Goal;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanUniPromotionAdControlTaskListV10ResponseDataTaskListInnerRoomInfo
     */
    public function getRoomInfo(): ?\Oceanengine\Models\QianchuanUniPromotionAdControlTaskListV10ResponseDataTaskListInnerRoomInfo
    {
        return $this->roomInfo;
    }

    /**
     * @param \Oceanengine\Models\QianchuanUniPromotionAdControlTaskListV10ResponseDataTaskListInnerRoomInfo $roomInfo
     * @return self
     */
    public function setRoomInfo(?\Oceanengine\Models\QianchuanUniPromotionAdControlTaskListV10ResponseDataTaskListInnerRoomInfo $roomInfo): self
    {
        $this->roomInfo = $roomInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanUniPromotionAdControlTaskListV10DataTaskListSmartBidType
     */
    public function getSmartBidType(): ?string
    {
        return $this->smartBidType;
    }

    /**
     * @param \Oceanengine\Models\QianchuanUniPromotionAdControlTaskListV10DataTaskListSmartBidType $smartBidType
     * @return self
     */
    public function setSmartBidType(?string $smartBidType): self
    {
        $this->smartBidType = $smartBidType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanUniPromotionAdControlTaskListV10DataTaskListTaskStatus
     */
    public function getTaskStatus(): ?string
    {
        return $this->taskStatus;
    }

    /**
     * @param \Oceanengine\Models\QianchuanUniPromotionAdControlTaskListV10DataTaskListTaskStatus $taskStatus
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
        if ($this->audience !== null) {
            $result['audience'] = $this->audience;
        }
        if ($this->bid !== null) {
            $result['bid'] = $this->bid;
        }
        if ($this->budget !== null) {
            $result['budget'] = $this->budget;
        }
        if ($this->createTime !== null) {
            $result['create_time'] = $this->createTime;
        }
        if ($this->deepExternalActionName !== null) {
            $result['deep_external_action_name'] = $this->deepExternalActionName;
        }
        if ($this->duration !== null) {
            $result['duration'] = $this->duration;
        }
        if ($this->externalActionName !== null) {
            $result['external_action_name'] = $this->externalActionName;
        }
        if ($this->id !== null) {
            $result['id'] = $this->id;
        }
        if ($this->materialList !== null) {
            $result['material_list'] = $this->materialList;
        }
        if ($this->metrics !== null) {
            $result['metrics'] = $this->metrics;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->roi2Goal !== null) {
            $result['roi2_goal'] = $this->roi2Goal;
        }
        if ($this->roomInfo !== null) {
            $result['room_info'] = $this->roomInfo;
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
        if (($v = $data['audience'] ?? null) !== null && is_array($v)) {
            $obj->audience = \Oceanengine\Models\QianchuanUniPromotionAdControlTaskListV10ResponseDataTaskListInnerAudience::fromArray($v);
        }
        if (($v = $data['bid'] ?? null) !== null) {
            $obj->bid = (float) $v;
        }
        if (($v = $data['budget'] ?? null) !== null) {
            $obj->budget = (float) $v;
        }
        if (($v = $data['create_time'] ?? null) !== null) {
            $obj->createTime = (string) $v;
        }
        if (($v = $data['deep_external_action_name'] ?? null) !== null) {
            $obj->deepExternalActionName = (string) $v;
        }
        if (($v = $data['duration'] ?? null) !== null) {
            $obj->duration = (float) $v;
        }
        if (($v = $data['external_action_name'] ?? null) !== null) {
            $obj->externalActionName = (string) $v;
        }
        if (($v = $data['id'] ?? null) !== null) {
            $obj->id = (int) $v;
        }
        if (($v = $data['material_list'] ?? null) !== null && is_array($v)) {
            $obj->materialList = array_map(fn ($vv) => \Oceanengine\Models\QianchuanUniPromotionAdControlTaskListV10ResponseDataTaskListInnerMaterialListInner::fromArray($vv), $v);
        }
        if (($v = $data['metrics'] ?? null) !== null && is_array($v)) {
            $obj->metrics = \Oceanengine\Models\QianchuanUniPromotionAdControlTaskListV10ResponseDataTaskListInnerMetrics::fromArray($v);
        }
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        if (($v = $data['roi2_goal'] ?? null) !== null) {
            $obj->roi2Goal = (float) $v;
        }
        if (($v = $data['room_info'] ?? null) !== null && is_array($v)) {
            $obj->roomInfo = \Oceanengine\Models\QianchuanUniPromotionAdControlTaskListV10ResponseDataTaskListInnerRoomInfo::fromArray($v);
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
