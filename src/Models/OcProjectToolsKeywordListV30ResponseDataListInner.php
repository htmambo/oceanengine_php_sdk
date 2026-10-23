<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class OcProjectToolsKeywordListV30ResponseDataListInner implements \JsonSerializable
{
    /**
     * 创建时间
     * @var string
     */
    protected ?string $createTime = null;

    /**
     * @var \Oceanengine\Models\OcProjectToolsKeywordListV30ResponseDataListInnerDeliverySetting
     */
    protected ?\Oceanengine\Models\OcProjectToolsKeywordListV30ResponseDataListInnerDeliverySetting $deliverySetting = null;

    /**
     * @var \Oceanengine\Models\OcProjectToolsKeywordListV30DataListFirstStatus
     */
    protected ?string $firstStatus = null;

    /**
     * @var \Oceanengine\Models\OcProjectToolsKeywordListV30ResponseDataListInnerKeywords
     */
    protected ?\Oceanengine\Models\OcProjectToolsKeywordListV30ResponseDataListInnerKeywords $keywords = null;

    /**
     * 调控任务名称
     * @var string
     */
    protected ?string $name = null;

    /**
     * 项目ID
     * @var int
     */
    protected ?int $projectId = null;

    /**
     * 调控任务ID
     * @var int
     */
    protected ?int $scheduleId = null;

    /**
     * 二级任务状态
     * @var \Oceanengine\Models\OcProjectToolsKeywordListV30DataListSecondStatus[]
     */
    protected ?array $secondStatus = null;

    /**
     * 更新时间
     * @var string
     */
    protected ?string $updateTime = null;

    /**
     * 创建时间
     * @return string
     */
    public function getCreateTime(): ?string
    {
        return $this->createTime;
    }

    /**
     * 创建时间
     * @param string $createTime
     * @return self
     */
    public function setCreateTime(?string $createTime): self
    {
        $this->createTime = $createTime;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\OcProjectToolsKeywordListV30ResponseDataListInnerDeliverySetting
     */
    public function getDeliverySetting(): ?\Oceanengine\Models\OcProjectToolsKeywordListV30ResponseDataListInnerDeliverySetting
    {
        return $this->deliverySetting;
    }

    /**
     * @param \Oceanengine\Models\OcProjectToolsKeywordListV30ResponseDataListInnerDeliverySetting $deliverySetting
     * @return self
     */
    public function setDeliverySetting(?\Oceanengine\Models\OcProjectToolsKeywordListV30ResponseDataListInnerDeliverySetting $deliverySetting): self
    {
        $this->deliverySetting = $deliverySetting;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\OcProjectToolsKeywordListV30DataListFirstStatus
     */
    public function getFirstStatus(): ?string
    {
        return $this->firstStatus;
    }

    /**
     * @param \Oceanengine\Models\OcProjectToolsKeywordListV30DataListFirstStatus $firstStatus
     * @return self
     */
    public function setFirstStatus(?string $firstStatus): self
    {
        $this->firstStatus = $firstStatus;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\OcProjectToolsKeywordListV30ResponseDataListInnerKeywords
     */
    public function getKeywords(): ?\Oceanengine\Models\OcProjectToolsKeywordListV30ResponseDataListInnerKeywords
    {
        return $this->keywords;
    }

    /**
     * @param \Oceanengine\Models\OcProjectToolsKeywordListV30ResponseDataListInnerKeywords $keywords
     * @return self
     */
    public function setKeywords(?\Oceanengine\Models\OcProjectToolsKeywordListV30ResponseDataListInnerKeywords $keywords): self
    {
        $this->keywords = $keywords;
        return $this;
    }

    /**
     * 调控任务名称
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * 调控任务名称
     * @param string $name
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * 项目ID
     * @return int
     */
    public function getProjectId(): ?int
    {
        return $this->projectId;
    }

    /**
     * 项目ID
     * @param int $projectId
     * @return self
     */
    public function setProjectId(?int $projectId): self
    {
        $this->projectId = $projectId;
        return $this;
    }

    /**
     * 调控任务ID
     * @return int
     */
    public function getScheduleId(): ?int
    {
        return $this->scheduleId;
    }

    /**
     * 调控任务ID
     * @param int $scheduleId
     * @return self
     */
    public function setScheduleId(?int $scheduleId): self
    {
        $this->scheduleId = $scheduleId;
        return $this;
    }

    /**
     * 二级任务状态
     * @return \Oceanengine\Models\OcProjectToolsKeywordListV30DataListSecondStatus[]
     */
    public function getSecondStatus(): ?array
    {
        return $this->secondStatus;
    }

    /**
     * 二级任务状态
     * @param \Oceanengine\Models\OcProjectToolsKeywordListV30DataListSecondStatus[] $secondStatus
     * @return self
     */
    public function setSecondStatus(?array $secondStatus): self
    {
        $this->secondStatus = $secondStatus;
        return $this;
    }

    /**
     * 更新时间
     * @return string
     */
    public function getUpdateTime(): ?string
    {
        return $this->updateTime;
    }

    /**
     * 更新时间
     * @param string $updateTime
     * @return self
     */
    public function setUpdateTime(?string $updateTime): self
    {
        $this->updateTime = $updateTime;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->createTime !== null) {
            $result['create_time'] = $this->createTime;
        }
        if ($this->deliverySetting !== null) {
            $result['delivery_setting'] = $this->deliverySetting;
        }
        if ($this->firstStatus !== null) {
            $result['first_status'] = $this->firstStatus;
        }
        if ($this->keywords !== null) {
            $result['keywords'] = $this->keywords;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->projectId !== null) {
            $result['project_id'] = $this->projectId;
        }
        if ($this->scheduleId !== null) {
            $result['schedule_id'] = $this->scheduleId;
        }
        if ($this->secondStatus !== null) {
            $result['second_status'] = $this->secondStatus;
        }
        if ($this->updateTime !== null) {
            $result['update_time'] = $this->updateTime;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['create_time'] ?? null) !== null) {
            $obj->createTime = (string) $v;
        }
        if (($v = $data['delivery_setting'] ?? null) !== null && is_array($v)) {
            $obj->deliverySetting = \Oceanengine\Models\OcProjectToolsKeywordListV30ResponseDataListInnerDeliverySetting::fromArray($v);
        }
        if (($v = $data['first_status'] ?? null) !== null) {
            $obj->firstStatus = (string) $v;
        }
        if (($v = $data['keywords'] ?? null) !== null && is_array($v)) {
            $obj->keywords = \Oceanengine\Models\OcProjectToolsKeywordListV30ResponseDataListInnerKeywords::fromArray($v);
        }
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        if (($v = $data['project_id'] ?? null) !== null) {
            $obj->projectId = (int) $v;
        }
        if (($v = $data['schedule_id'] ?? null) !== null) {
            $obj->scheduleId = (int) $v;
        }
        if (($v = $data['second_status'] ?? null) !== null && is_array($v)) {
            $obj->secondStatus = $v;
        }
        if (($v = $data['update_time'] ?? null) !== null) {
            $obj->updateTime = (string) $v;
        }
        return $obj;
    }
}
