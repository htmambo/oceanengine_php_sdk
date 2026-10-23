<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class LocalFileVideoAwemeGetV30Filtering implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\LocalFileVideoAwemeGetV30FilteringAnchorInfo
     */
    protected ?\Oceanengine\Models\LocalFileVideoAwemeGetV30FilteringAnchorInfo $anchorInfo = null;

    /**
     * 抖音号ids筛选,当筛选anchor_types=All不限的时候必传
     * @var string[]
     */
    protected ?array $awemeIds = null;

    /**
     * 根据视频发布时间进行过滤的截止时间，与start_time搭配使用，格式：\"yyyy-MM-dd HH:mm:ss\"
     * @var string
     */
    protected ?string $endTime = null;

    /**
     * 主页视频ids筛选，一次最大长度：10
     * @var int[]
     */
    protected ?array $itemIds = null;

    /**
     * @var \Oceanengine\Models\LocalFileVideoAwemeGetV30FilteringItemStatus
     */
    protected ?string $itemStatus = null;

    /**
     * 根据视频发布时间进行过滤的起始时间，与end_time搭配使用，格式：\"yyyy-MM-dd HH:mm:ss\"
     * @var string
     */
    protected ?string $startTime = null;

    /**
     * @return \Oceanengine\Models\LocalFileVideoAwemeGetV30FilteringAnchorInfo
     */
    public function getAnchorInfo(): ?\Oceanengine\Models\LocalFileVideoAwemeGetV30FilteringAnchorInfo
    {
        return $this->anchorInfo;
    }

    /**
     * @param \Oceanengine\Models\LocalFileVideoAwemeGetV30FilteringAnchorInfo $anchorInfo
     * @return self
     */
    public function setAnchorInfo(?\Oceanengine\Models\LocalFileVideoAwemeGetV30FilteringAnchorInfo $anchorInfo): self
    {
        $this->anchorInfo = $anchorInfo;
        return $this;
    }

    /**
     * 抖音号ids筛选,当筛选anchor_types=All不限的时候必传
     * @return string[]
     */
    public function getAwemeIds(): ?array
    {
        return $this->awemeIds;
    }

    /**
     * 抖音号ids筛选,当筛选anchor_types=All不限的时候必传
     * @param string[] $awemeIds
     * @return self
     */
    public function setAwemeIds(?array $awemeIds): self
    {
        $this->awemeIds = $awemeIds;
        return $this;
    }

    /**
     * 根据视频发布时间进行过滤的截止时间，与start_time搭配使用，格式：\"yyyy-MM-dd HH:mm:ss\"
     * @return string
     */
    public function getEndTime(): ?string
    {
        return $this->endTime;
    }

    /**
     * 根据视频发布时间进行过滤的截止时间，与start_time搭配使用，格式：\"yyyy-MM-dd HH:mm:ss\"
     * @param string $endTime
     * @return self
     */
    public function setEndTime(?string $endTime): self
    {
        $this->endTime = $endTime;
        return $this;
    }

    /**
     * 主页视频ids筛选，一次最大长度：10
     * @return int[]
     */
    public function getItemIds(): ?array
    {
        return $this->itemIds;
    }

    /**
     * 主页视频ids筛选，一次最大长度：10
     * @param int[] $itemIds
     * @return self
     */
    public function setItemIds(?array $itemIds): self
    {
        $this->itemIds = $itemIds;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalFileVideoAwemeGetV30FilteringItemStatus
     */
    public function getItemStatus(): ?string
    {
        return $this->itemStatus;
    }

    /**
     * @param \Oceanengine\Models\LocalFileVideoAwemeGetV30FilteringItemStatus $itemStatus
     * @return self
     */
    public function setItemStatus(?string $itemStatus): self
    {
        $this->itemStatus = $itemStatus;
        return $this;
    }

    /**
     * 根据视频发布时间进行过滤的起始时间，与end_time搭配使用，格式：\"yyyy-MM-dd HH:mm:ss\"
     * @return string
     */
    public function getStartTime(): ?string
    {
        return $this->startTime;
    }

    /**
     * 根据视频发布时间进行过滤的起始时间，与end_time搭配使用，格式：\"yyyy-MM-dd HH:mm:ss\"
     * @param string $startTime
     * @return self
     */
    public function setStartTime(?string $startTime): self
    {
        $this->startTime = $startTime;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->anchorInfo !== null) {
            $result['anchor_info'] = $this->anchorInfo;
        }
        if ($this->awemeIds !== null) {
            $result['aweme_ids'] = $this->awemeIds;
        }
        if ($this->endTime !== null) {
            $result['end_time'] = $this->endTime;
        }
        if ($this->itemIds !== null) {
            $result['item_ids'] = $this->itemIds;
        }
        if ($this->itemStatus !== null) {
            $result['item_status'] = $this->itemStatus;
        }
        if ($this->startTime !== null) {
            $result['start_time'] = $this->startTime;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['anchor_info'] ?? null) !== null && is_array($v)) {
            $obj->anchorInfo = \Oceanengine\Models\LocalFileVideoAwemeGetV30FilteringAnchorInfo::fromArray($v);
        }
        if (($v = $data['aweme_ids'] ?? null) !== null && is_array($v)) {
            $obj->awemeIds = $v;
        }
        if (($v = $data['end_time'] ?? null) !== null) {
            $obj->endTime = (string) $v;
        }
        if (($v = $data['item_ids'] ?? null) !== null && is_array($v)) {
            $obj->itemIds = $v;
        }
        if (($v = $data['item_status'] ?? null) !== null) {
            $obj->itemStatus = (string) $v;
        }
        if (($v = $data['start_time'] ?? null) !== null) {
            $obj->startTime = (string) $v;
        }
        return $obj;
    }
}
