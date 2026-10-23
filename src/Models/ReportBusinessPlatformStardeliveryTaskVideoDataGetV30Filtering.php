<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ReportBusinessPlatformStardeliveryTaskVideoDataGetV30Filtering implements \JsonSerializable
{
    /**
     * 素材投放账户ID ，list长度最大为100
     * @var int[]
     */
    protected ?array $advertiserId = null;

    /**
     * 素材投放账户名称
     * @var string
     */
    protected ?string $advertiserName = null;

    /**
     * 视频ID
     * @var int
     */
    protected ?int $itemId = null;

    /**
     * 按素材id过滤，需要传入任务下绑定的素材id方可查询到数据,，list长度最大为100
     * @var int[]
     */
    protected ?array $materialIds = null;

    /**
     * 剧目ID，list长度最大为10
     * @var int[]
     */
    protected ?array $starTaskAlbumId = null;

    /**
     * 剧目名称
     * @var string
     */
    protected ?string $starTaskAlbumName = null;

    /**
     * 星广联投任务ID ，list长度最大为100
     * @var int[]
     */
    protected ?array $starTaskId = null;

    /**
     * 星广联投任务名称
     * @var string
     */
    protected ?string $starTaskName = null;

    /**
     * 素材投放账户ID ，list长度最大为100
     * @return int[]
     */
    public function getAdvertiserId(): ?array
    {
        return $this->advertiserId;
    }

    /**
     * 素材投放账户ID ，list长度最大为100
     * @param int[] $advertiserId
     * @return self
     */
    public function setAdvertiserId(?array $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 素材投放账户名称
     * @return string
     */
    public function getAdvertiserName(): ?string
    {
        return $this->advertiserName;
    }

    /**
     * 素材投放账户名称
     * @param string $advertiserName
     * @return self
     */
    public function setAdvertiserName(?string $advertiserName): self
    {
        $this->advertiserName = $advertiserName;
        return $this;
    }

    /**
     * 视频ID
     * @return int
     */
    public function getItemId(): ?int
    {
        return $this->itemId;
    }

    /**
     * 视频ID
     * @param int $itemId
     * @return self
     */
    public function setItemId(?int $itemId): self
    {
        $this->itemId = $itemId;
        return $this;
    }

    /**
     * 按素材id过滤，需要传入任务下绑定的素材id方可查询到数据,，list长度最大为100
     * @return int[]
     */
    public function getMaterialIds(): ?array
    {
        return $this->materialIds;
    }

    /**
     * 按素材id过滤，需要传入任务下绑定的素材id方可查询到数据,，list长度最大为100
     * @param int[] $materialIds
     * @return self
     */
    public function setMaterialIds(?array $materialIds): self
    {
        $this->materialIds = $materialIds;
        return $this;
    }

    /**
     * 剧目ID，list长度最大为10
     * @return int[]
     */
    public function getStarTaskAlbumId(): ?array
    {
        return $this->starTaskAlbumId;
    }

    /**
     * 剧目ID，list长度最大为10
     * @param int[] $starTaskAlbumId
     * @return self
     */
    public function setStarTaskAlbumId(?array $starTaskAlbumId): self
    {
        $this->starTaskAlbumId = $starTaskAlbumId;
        return $this;
    }

    /**
     * 剧目名称
     * @return string
     */
    public function getStarTaskAlbumName(): ?string
    {
        return $this->starTaskAlbumName;
    }

    /**
     * 剧目名称
     * @param string $starTaskAlbumName
     * @return self
     */
    public function setStarTaskAlbumName(?string $starTaskAlbumName): self
    {
        $this->starTaskAlbumName = $starTaskAlbumName;
        return $this;
    }

    /**
     * 星广联投任务ID ，list长度最大为100
     * @return int[]
     */
    public function getStarTaskId(): ?array
    {
        return $this->starTaskId;
    }

    /**
     * 星广联投任务ID ，list长度最大为100
     * @param int[] $starTaskId
     * @return self
     */
    public function setStarTaskId(?array $starTaskId): self
    {
        $this->starTaskId = $starTaskId;
        return $this;
    }

    /**
     * 星广联投任务名称
     * @return string
     */
    public function getStarTaskName(): ?string
    {
        return $this->starTaskName;
    }

    /**
     * 星广联投任务名称
     * @param string $starTaskName
     * @return self
     */
    public function setStarTaskName(?string $starTaskName): self
    {
        $this->starTaskName = $starTaskName;
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
        if ($this->advertiserName !== null) {
            $result['advertiser_name'] = $this->advertiserName;
        }
        if ($this->itemId !== null) {
            $result['item_id'] = $this->itemId;
        }
        if ($this->materialIds !== null) {
            $result['material_ids'] = $this->materialIds;
        }
        if ($this->starTaskAlbumId !== null) {
            $result['star_task_album_id'] = $this->starTaskAlbumId;
        }
        if ($this->starTaskAlbumName !== null) {
            $result['star_task_album_name'] = $this->starTaskAlbumName;
        }
        if ($this->starTaskId !== null) {
            $result['star_task_id'] = $this->starTaskId;
        }
        if ($this->starTaskName !== null) {
            $result['star_task_name'] = $this->starTaskName;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null && is_array($v)) {
            $obj->advertiserId = $v;
        }
        if (($v = $data['advertiser_name'] ?? null) !== null) {
            $obj->advertiserName = (string) $v;
        }
        if (($v = $data['item_id'] ?? null) !== null) {
            $obj->itemId = (int) $v;
        }
        if (($v = $data['material_ids'] ?? null) !== null && is_array($v)) {
            $obj->materialIds = $v;
        }
        if (($v = $data['star_task_album_id'] ?? null) !== null && is_array($v)) {
            $obj->starTaskAlbumId = $v;
        }
        if (($v = $data['star_task_album_name'] ?? null) !== null) {
            $obj->starTaskAlbumName = (string) $v;
        }
        if (($v = $data['star_task_id'] ?? null) !== null && is_array($v)) {
            $obj->starTaskId = $v;
        }
        if (($v = $data['star_task_name'] ?? null) !== null) {
            $obj->starTaskName = (string) $v;
        }
        return $obj;
    }
}
