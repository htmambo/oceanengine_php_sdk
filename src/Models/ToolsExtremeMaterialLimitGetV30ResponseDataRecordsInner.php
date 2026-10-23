<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsExtremeMaterialLimitGetV30ResponseDataRecordsInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ToolsExtremeMaterialLimitGetV30DataRecordsDimension
     */
    protected ?string $dimension = null;

    /**
     * 限制截止日期（LIMIT 时有值），格式 yyyy-mm-dd
     * @var string
     */
    protected ?string $limitEndDate = null;

    /**
     * 限制起始日期（LIMIT 时有值），格式 yyyy-mm-dd
     * @var string
     */
    protected ?string $limitStartDate = null;

    /**
     * @var \Oceanengine\Models\ToolsExtremeMaterialLimitGetV30DataRecordsNotificationType
     */
    protected ?string $notificationType = null;

    /**
     * 二级行业 ID
     * @var int
     */
    protected ?int $secondIndustryId = null;

    /**
     * 二级行业名称
     * @var string
     */
    protected ?string $secondIndustryName = null;

    /**
     * 命中日期，格式 yyyy-mm-dd
     * @var string
     */
    protected ?string $triggerDate = null;

    /**
     * @return \Oceanengine\Models\ToolsExtremeMaterialLimitGetV30DataRecordsDimension
     */
    public function getDimension(): ?string
    {
        return $this->dimension;
    }

    /**
     * @param \Oceanengine\Models\ToolsExtremeMaterialLimitGetV30DataRecordsDimension $dimension
     * @return self
     */
    public function setDimension(?string $dimension): self
    {
        $this->dimension = $dimension;
        return $this;
    }

    /**
     * 限制截止日期（LIMIT 时有值），格式 yyyy-mm-dd
     * @return string
     */
    public function getLimitEndDate(): ?string
    {
        return $this->limitEndDate;
    }

    /**
     * 限制截止日期（LIMIT 时有值），格式 yyyy-mm-dd
     * @param string $limitEndDate
     * @return self
     */
    public function setLimitEndDate(?string $limitEndDate): self
    {
        $this->limitEndDate = $limitEndDate;
        return $this;
    }

    /**
     * 限制起始日期（LIMIT 时有值），格式 yyyy-mm-dd
     * @return string
     */
    public function getLimitStartDate(): ?string
    {
        return $this->limitStartDate;
    }

    /**
     * 限制起始日期（LIMIT 时有值），格式 yyyy-mm-dd
     * @param string $limitStartDate
     * @return self
     */
    public function setLimitStartDate(?string $limitStartDate): self
    {
        $this->limitStartDate = $limitStartDate;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsExtremeMaterialLimitGetV30DataRecordsNotificationType
     */
    public function getNotificationType(): ?string
    {
        return $this->notificationType;
    }

    /**
     * @param \Oceanengine\Models\ToolsExtremeMaterialLimitGetV30DataRecordsNotificationType $notificationType
     * @return self
     */
    public function setNotificationType(?string $notificationType): self
    {
        $this->notificationType = $notificationType;
        return $this;
    }

    /**
     * 二级行业 ID
     * @return int
     */
    public function getSecondIndustryId(): ?int
    {
        return $this->secondIndustryId;
    }

    /**
     * 二级行业 ID
     * @param int $secondIndustryId
     * @return self
     */
    public function setSecondIndustryId(?int $secondIndustryId): self
    {
        $this->secondIndustryId = $secondIndustryId;
        return $this;
    }

    /**
     * 二级行业名称
     * @return string
     */
    public function getSecondIndustryName(): ?string
    {
        return $this->secondIndustryName;
    }

    /**
     * 二级行业名称
     * @param string $secondIndustryName
     * @return self
     */
    public function setSecondIndustryName(?string $secondIndustryName): self
    {
        $this->secondIndustryName = $secondIndustryName;
        return $this;
    }

    /**
     * 命中日期，格式 yyyy-mm-dd
     * @return string
     */
    public function getTriggerDate(): ?string
    {
        return $this->triggerDate;
    }

    /**
     * 命中日期，格式 yyyy-mm-dd
     * @param string $triggerDate
     * @return self
     */
    public function setTriggerDate(?string $triggerDate): self
    {
        $this->triggerDate = $triggerDate;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->dimension !== null) {
            $result['dimension'] = $this->dimension;
        }
        if ($this->limitEndDate !== null) {
            $result['limit_end_date'] = $this->limitEndDate;
        }
        if ($this->limitStartDate !== null) {
            $result['limit_start_date'] = $this->limitStartDate;
        }
        if ($this->notificationType !== null) {
            $result['notification_type'] = $this->notificationType;
        }
        if ($this->secondIndustryId !== null) {
            $result['second_industry_id'] = $this->secondIndustryId;
        }
        if ($this->secondIndustryName !== null) {
            $result['second_industry_name'] = $this->secondIndustryName;
        }
        if ($this->triggerDate !== null) {
            $result['trigger_date'] = $this->triggerDate;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['dimension'] ?? null) !== null) {
            $obj->dimension = (string) $v;
        }
        if (($v = $data['limit_end_date'] ?? null) !== null) {
            $obj->limitEndDate = (string) $v;
        }
        if (($v = $data['limit_start_date'] ?? null) !== null) {
            $obj->limitStartDate = (string) $v;
        }
        if (($v = $data['notification_type'] ?? null) !== null) {
            $obj->notificationType = (string) $v;
        }
        if (($v = $data['second_industry_id'] ?? null) !== null) {
            $obj->secondIndustryId = (int) $v;
        }
        if (($v = $data['second_industry_name'] ?? null) !== null) {
            $obj->secondIndustryName = (string) $v;
        }
        if (($v = $data['trigger_date'] ?? null) !== null) {
            $obj->triggerDate = (string) $v;
        }
        return $obj;
    }
}
