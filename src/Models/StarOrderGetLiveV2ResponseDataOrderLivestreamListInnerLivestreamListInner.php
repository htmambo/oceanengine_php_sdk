<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarOrderGetLiveV2ResponseDataOrderLivestreamListInnerLivestreamListInner implements \JsonSerializable
{
    /**
     * 直播时长（单个直播）
     * @var int
     */
    protected ?int $duration = null;

    /**
     * 直播ID
     * @var int
     */
    protected ?int $itemId = null;

    /**
     * 开播时间
     * @var int
     */
    protected ?int $liveStartTime = null;

    /**
     * 资源ID
     * @var int
     */
    protected ?int $resourceId = null;

    /**
     * 直播播放地址
     * @var string
     */
    protected ?string $resourceUrl = null;

    /**
     * 直播时长（单个直播）
     * @return int
     */
    public function getDuration(): ?int
    {
        return $this->duration;
    }

    /**
     * 直播时长（单个直播）
     * @param int $duration
     * @return self
     */
    public function setDuration(?int $duration): self
    {
        $this->duration = $duration;
        return $this;
    }

    /**
     * 直播ID
     * @return int
     */
    public function getItemId(): ?int
    {
        return $this->itemId;
    }

    /**
     * 直播ID
     * @param int $itemId
     * @return self
     */
    public function setItemId(?int $itemId): self
    {
        $this->itemId = $itemId;
        return $this;
    }

    /**
     * 开播时间
     * @return int
     */
    public function getLiveStartTime(): ?int
    {
        return $this->liveStartTime;
    }

    /**
     * 开播时间
     * @param int $liveStartTime
     * @return self
     */
    public function setLiveStartTime(?int $liveStartTime): self
    {
        $this->liveStartTime = $liveStartTime;
        return $this;
    }

    /**
     * 资源ID
     * @return int
     */
    public function getResourceId(): ?int
    {
        return $this->resourceId;
    }

    /**
     * 资源ID
     * @param int $resourceId
     * @return self
     */
    public function setResourceId(?int $resourceId): self
    {
        $this->resourceId = $resourceId;
        return $this;
    }

    /**
     * 直播播放地址
     * @return string
     */
    public function getResourceUrl(): ?string
    {
        return $this->resourceUrl;
    }

    /**
     * 直播播放地址
     * @param string $resourceUrl
     * @return self
     */
    public function setResourceUrl(?string $resourceUrl): self
    {
        $this->resourceUrl = $resourceUrl;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->duration !== null) {
            $result['duration'] = $this->duration;
        }
        if ($this->itemId !== null) {
            $result['item_id'] = $this->itemId;
        }
        if ($this->liveStartTime !== null) {
            $result['live_start_time'] = $this->liveStartTime;
        }
        if ($this->resourceId !== null) {
            $result['resource_id'] = $this->resourceId;
        }
        if ($this->resourceUrl !== null) {
            $result['resource_url'] = $this->resourceUrl;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['duration'] ?? null) !== null) {
            $obj->duration = (int) $v;
        }
        if (($v = $data['item_id'] ?? null) !== null) {
            $obj->itemId = (int) $v;
        }
        if (($v = $data['live_start_time'] ?? null) !== null) {
            $obj->liveStartTime = (int) $v;
        }
        if (($v = $data['resource_id'] ?? null) !== null) {
            $obj->resourceId = (int) $v;
        }
        if (($v = $data['resource_url'] ?? null) !== null) {
            $obj->resourceUrl = (string) $v;
        }
        return $obj;
    }
}
