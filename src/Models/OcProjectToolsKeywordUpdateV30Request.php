<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class OcProjectToolsKeywordUpdateV30Request implements \JsonSerializable
{
    /**
     * 投放账户ID
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * @var \Oceanengine\Models\OcProjectToolsKeywordUpdateV30RequestDeliverySetting
     */
    protected ?\Oceanengine\Models\OcProjectToolsKeywordUpdateV30RequestDeliverySetting $deliverySetting = null;

    /**
     * @var \Oceanengine\Models\OcProjectToolsKeywordUpdateV30RequestKeywords
     */
    protected ?\Oceanengine\Models\OcProjectToolsKeywordUpdateV30RequestKeywords $keywords = null;

    /**
     * 调控关键词调控任务名称
     * @var string
     */
    protected ?string $name = null;

    /**
     * @var int
     */
    protected ?int $scheduleId = null;

    /**
     * 投放账户ID
     * @return int
     */
    public function getAdvertiserId(): ?int
    {
        return $this->advertiserId;
    }

    /**
     * 投放账户ID
     * @param int $advertiserId
     * @return self
     */
    public function setAdvertiserId(?int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\OcProjectToolsKeywordUpdateV30RequestDeliverySetting
     */
    public function getDeliverySetting(): ?\Oceanengine\Models\OcProjectToolsKeywordUpdateV30RequestDeliverySetting
    {
        return $this->deliverySetting;
    }

    /**
     * @param \Oceanengine\Models\OcProjectToolsKeywordUpdateV30RequestDeliverySetting $deliverySetting
     * @return self
     */
    public function setDeliverySetting(?\Oceanengine\Models\OcProjectToolsKeywordUpdateV30RequestDeliverySetting $deliverySetting): self
    {
        $this->deliverySetting = $deliverySetting;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\OcProjectToolsKeywordUpdateV30RequestKeywords
     */
    public function getKeywords(): ?\Oceanengine\Models\OcProjectToolsKeywordUpdateV30RequestKeywords
    {
        return $this->keywords;
    }

    /**
     * @param \Oceanengine\Models\OcProjectToolsKeywordUpdateV30RequestKeywords $keywords
     * @return self
     */
    public function setKeywords(?\Oceanengine\Models\OcProjectToolsKeywordUpdateV30RequestKeywords $keywords): self
    {
        $this->keywords = $keywords;
        return $this;
    }

    /**
     * 调控关键词调控任务名称
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * 调控关键词调控任务名称
     * @param string $name
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return int
     */
    public function getScheduleId(): ?int
    {
        return $this->scheduleId;
    }

    /**
     * @param int $scheduleId
     * @return self
     */
    public function setScheduleId(?int $scheduleId): self
    {
        $this->scheduleId = $scheduleId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->advertiserId !== null) {
            $result['advertiser_id'] = $this->advertiserId;
        }
        if ($this->deliverySetting !== null) {
            $result['delivery_setting'] = $this->deliverySetting;
        }
        if ($this->keywords !== null) {
            $result['keywords'] = $this->keywords;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->scheduleId !== null) {
            $result['schedule_id'] = $this->scheduleId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['delivery_setting'] ?? null) !== null && is_array($v)) {
            $obj->deliverySetting = \Oceanengine\Models\OcProjectToolsKeywordUpdateV30RequestDeliverySetting::fromArray($v);
        }
        if (($v = $data['keywords'] ?? null) !== null && is_array($v)) {
            $obj->keywords = \Oceanengine\Models\OcProjectToolsKeywordUpdateV30RequestKeywords::fromArray($v);
        }
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        if (($v = $data['schedule_id'] ?? null) !== null) {
            $obj->scheduleId = (int) $v;
        }
        return $obj;
    }
}
