<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarDemandOrderListV2ResponseDataListInner implements \JsonSerializable
{
    /**
     * 达人id
     * @var int
     */
    protected ?int $authorId = null;

    /**
     * 达人名称
     * @var string
     */
    protected ?string $authorName = null;

    /**
     * 达人头像
     * @var string
     */
    protected ?string $avatarUri = null;

    /**
     * 需求ID
     * @var int
     */
    protected ?int $campaignId = null;

    /**
     * 订单创建时间，格式：%Y-%m-%d %H:%M:%S
     * @var string
     */
    protected ?string $createTime = null;

    /**
     * 任务id
     * @var int
     */
    protected ?int $demandId = null;

    /**
     * 封面图
     * @var string
     */
    protected ?string $headImageUri = null;

    /**
     * 视频id，与星图平台前端video_url中展现的视频id一致，每个视频唯一
     * @var int
     */
    protected ?int $itemId = null;

    /**
     * 订单id
     * @var int
     */
    protected ?int $orderId = null;

    /**
     * 指派任务产出物发布时间
     * @var string
     */
    protected ?string $releaseTime = null;

    /**
     * 作品名称
     * @var string
     */
    protected ?string $title = null;

    /**
     * @var \Oceanengine\Models\StarDemandOrderListV2DataListUniversalOrderStatus
     */
    protected ?string $universalOrderStatus = null;

    /**
     * 视频id，每个视频唯一（建议使用item_id）
     * @var string
     */
    protected ?string $videoId = null;

    /**
     * 视频链接
     * @var string
     */
    protected ?string $videoUrl = null;

    /**
     * 达人id
     * @return int
     */
    public function getAuthorId(): ?int
    {
        return $this->authorId;
    }

    /**
     * 达人id
     * @param int $authorId
     * @return self
     */
    public function setAuthorId(?int $authorId): self
    {
        $this->authorId = $authorId;
        return $this;
    }

    /**
     * 达人名称
     * @return string
     */
    public function getAuthorName(): ?string
    {
        return $this->authorName;
    }

    /**
     * 达人名称
     * @param string $authorName
     * @return self
     */
    public function setAuthorName(?string $authorName): self
    {
        $this->authorName = $authorName;
        return $this;
    }

    /**
     * 达人头像
     * @return string
     */
    public function getAvatarUri(): ?string
    {
        return $this->avatarUri;
    }

    /**
     * 达人头像
     * @param string $avatarUri
     * @return self
     */
    public function setAvatarUri(?string $avatarUri): self
    {
        $this->avatarUri = $avatarUri;
        return $this;
    }

    /**
     * 需求ID
     * @return int
     */
    public function getCampaignId(): ?int
    {
        return $this->campaignId;
    }

    /**
     * 需求ID
     * @param int $campaignId
     * @return self
     */
    public function setCampaignId(?int $campaignId): self
    {
        $this->campaignId = $campaignId;
        return $this;
    }

    /**
     * 订单创建时间，格式：%Y-%m-%d %H:%M:%S
     * @return string
     */
    public function getCreateTime(): ?string
    {
        return $this->createTime;
    }

    /**
     * 订单创建时间，格式：%Y-%m-%d %H:%M:%S
     * @param string $createTime
     * @return self
     */
    public function setCreateTime(?string $createTime): self
    {
        $this->createTime = $createTime;
        return $this;
    }

    /**
     * 任务id
     * @return int
     */
    public function getDemandId(): ?int
    {
        return $this->demandId;
    }

    /**
     * 任务id
     * @param int $demandId
     * @return self
     */
    public function setDemandId(?int $demandId): self
    {
        $this->demandId = $demandId;
        return $this;
    }

    /**
     * 封面图
     * @return string
     */
    public function getHeadImageUri(): ?string
    {
        return $this->headImageUri;
    }

    /**
     * 封面图
     * @param string $headImageUri
     * @return self
     */
    public function setHeadImageUri(?string $headImageUri): self
    {
        $this->headImageUri = $headImageUri;
        return $this;
    }

    /**
     * 视频id，与星图平台前端video_url中展现的视频id一致，每个视频唯一
     * @return int
     */
    public function getItemId(): ?int
    {
        return $this->itemId;
    }

    /**
     * 视频id，与星图平台前端video_url中展现的视频id一致，每个视频唯一
     * @param int $itemId
     * @return self
     */
    public function setItemId(?int $itemId): self
    {
        $this->itemId = $itemId;
        return $this;
    }

    /**
     * 订单id
     * @return int
     */
    public function getOrderId(): ?int
    {
        return $this->orderId;
    }

    /**
     * 订单id
     * @param int $orderId
     * @return self
     */
    public function setOrderId(?int $orderId): self
    {
        $this->orderId = $orderId;
        return $this;
    }

    /**
     * 指派任务产出物发布时间
     * @return string
     */
    public function getReleaseTime(): ?string
    {
        return $this->releaseTime;
    }

    /**
     * 指派任务产出物发布时间
     * @param string $releaseTime
     * @return self
     */
    public function setReleaseTime(?string $releaseTime): self
    {
        $this->releaseTime = $releaseTime;
        return $this;
    }

    /**
     * 作品名称
     * @return string
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * 作品名称
     * @param string $title
     * @return self
     */
    public function setTitle(?string $title): self
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarDemandOrderListV2DataListUniversalOrderStatus
     */
    public function getUniversalOrderStatus(): ?string
    {
        return $this->universalOrderStatus;
    }

    /**
     * @param \Oceanengine\Models\StarDemandOrderListV2DataListUniversalOrderStatus $universalOrderStatus
     * @return self
     */
    public function setUniversalOrderStatus(?string $universalOrderStatus): self
    {
        $this->universalOrderStatus = $universalOrderStatus;
        return $this;
    }

    /**
     * 视频id，每个视频唯一（建议使用item_id）
     * @return string
     */
    public function getVideoId(): ?string
    {
        return $this->videoId;
    }

    /**
     * 视频id，每个视频唯一（建议使用item_id）
     * @param string $videoId
     * @return self
     */
    public function setVideoId(?string $videoId): self
    {
        $this->videoId = $videoId;
        return $this;
    }

    /**
     * 视频链接
     * @return string
     */
    public function getVideoUrl(): ?string
    {
        return $this->videoUrl;
    }

    /**
     * 视频链接
     * @param string $videoUrl
     * @return self
     */
    public function setVideoUrl(?string $videoUrl): self
    {
        $this->videoUrl = $videoUrl;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->authorId !== null) {
            $result['author_id'] = $this->authorId;
        }
        if ($this->authorName !== null) {
            $result['author_name'] = $this->authorName;
        }
        if ($this->avatarUri !== null) {
            $result['avatar_uri'] = $this->avatarUri;
        }
        if ($this->campaignId !== null) {
            $result['campaign_id'] = $this->campaignId;
        }
        if ($this->createTime !== null) {
            $result['create_time'] = $this->createTime;
        }
        if ($this->demandId !== null) {
            $result['demand_id'] = $this->demandId;
        }
        if ($this->headImageUri !== null) {
            $result['head_image_uri'] = $this->headImageUri;
        }
        if ($this->itemId !== null) {
            $result['item_id'] = $this->itemId;
        }
        if ($this->orderId !== null) {
            $result['order_id'] = $this->orderId;
        }
        if ($this->releaseTime !== null) {
            $result['release_time'] = $this->releaseTime;
        }
        if ($this->title !== null) {
            $result['title'] = $this->title;
        }
        if ($this->universalOrderStatus !== null) {
            $result['universal_order_status'] = $this->universalOrderStatus;
        }
        if ($this->videoId !== null) {
            $result['video_id'] = $this->videoId;
        }
        if ($this->videoUrl !== null) {
            $result['video_url'] = $this->videoUrl;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['author_id'] ?? null) !== null) {
            $obj->authorId = (int) $v;
        }
        if (($v = $data['author_name'] ?? null) !== null) {
            $obj->authorName = (string) $v;
        }
        if (($v = $data['avatar_uri'] ?? null) !== null) {
            $obj->avatarUri = (string) $v;
        }
        if (($v = $data['campaign_id'] ?? null) !== null) {
            $obj->campaignId = (int) $v;
        }
        if (($v = $data['create_time'] ?? null) !== null) {
            $obj->createTime = (string) $v;
        }
        if (($v = $data['demand_id'] ?? null) !== null) {
            $obj->demandId = (int) $v;
        }
        if (($v = $data['head_image_uri'] ?? null) !== null) {
            $obj->headImageUri = (string) $v;
        }
        if (($v = $data['item_id'] ?? null) !== null) {
            $obj->itemId = (int) $v;
        }
        if (($v = $data['order_id'] ?? null) !== null) {
            $obj->orderId = (int) $v;
        }
        if (($v = $data['release_time'] ?? null) !== null) {
            $obj->releaseTime = (string) $v;
        }
        if (($v = $data['title'] ?? null) !== null) {
            $obj->title = (string) $v;
        }
        if (($v = $data['universal_order_status'] ?? null) !== null) {
            $obj->universalOrderStatus = (string) $v;
        }
        if (($v = $data['video_id'] ?? null) !== null) {
            $obj->videoId = (string) $v;
        }
        if (($v = $data['video_url'] ?? null) !== null) {
            $obj->videoUrl = (string) $v;
        }
        return $obj;
    }
}
