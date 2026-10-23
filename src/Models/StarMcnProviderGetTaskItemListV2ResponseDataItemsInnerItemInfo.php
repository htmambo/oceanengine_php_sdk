<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarMcnProviderGetTaskItemListV2ResponseDataItemsInnerItemInfo implements \JsonSerializable
{
    /**
     * 抖音侧状态(在线状态)
     * @var int
     */
    protected ?int $awemeItemStatus = null;

    /**
     * 通用标签id，i64前端丢精度
     * @var array<string,string[]>
     */
    protected ?array $commonTagIds = null;

    /**
     * @var \Oceanengine\Models\StarMcnProviderGetTaskItemListV2ResponseDataItemsInnerItemInfoCoreUser
     */
    protected ?\Oceanengine\Models\StarMcnProviderGetTaskItemListV2ResponseDataItemsInnerItemInfoCoreUser $coreUser = null;

    /**
     * 3: string head_image_uri,
     * @var int
     */
    protected ?int $createTime = null;

    /**
     * @var \Oceanengine\Models\StarMcnProviderGetTaskItemListV2ResponseDataItemsInnerItemInfoData
     */
    protected ?\Oceanengine\Models\StarMcnProviderGetTaskItemListV2ResponseDataItemsInnerItemInfoData $data = null;

    /**
     * 直播投稿的直播状态，直播的时长
     * @var int
     */
    protected ?int $duration = null;

    /**
     * @var int
     */
    protected ?int $itemId = null;

    /**
     * 广告素材ID
     * @var int
     */
    protected ?int $legoMid = null;

    /**
     * 发布时间
     * @var int
     */
    protected ?int $releaseTime = null;

    /**
     * @var string
     */
    protected ?string $title = null;

    /**
     * @var string
     */
    protected ?string $url = null;

    /**
     * 视频上传渠道
     * @var string
     */
    protected ?string $videoParticipateProviderChannel = null;

    /**
     * 抖音侧状态(在线状态)
     * @return int
     */
    public function getAwemeItemStatus(): ?int
    {
        return $this->awemeItemStatus;
    }

    /**
     * 抖音侧状态(在线状态)
     * @param int $awemeItemStatus
     * @return self
     */
    public function setAwemeItemStatus(?int $awemeItemStatus): self
    {
        $this->awemeItemStatus = $awemeItemStatus;
        return $this;
    }

    /**
     * 通用标签id，i64前端丢精度
     * @return array<string,string[]>
     */
    public function getCommonTagIds(): ?array
    {
        return $this->commonTagIds;
    }

    /**
     * 通用标签id，i64前端丢精度
     * @param array<string,string[]> $commonTagIds
     * @return self
     */
    public function setCommonTagIds(?array $commonTagIds): self
    {
        $this->commonTagIds = $commonTagIds;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarMcnProviderGetTaskItemListV2ResponseDataItemsInnerItemInfoCoreUser
     */
    public function getCoreUser(): ?\Oceanengine\Models\StarMcnProviderGetTaskItemListV2ResponseDataItemsInnerItemInfoCoreUser
    {
        return $this->coreUser;
    }

    /**
     * @param \Oceanengine\Models\StarMcnProviderGetTaskItemListV2ResponseDataItemsInnerItemInfoCoreUser $coreUser
     * @return self
     */
    public function setCoreUser(?\Oceanengine\Models\StarMcnProviderGetTaskItemListV2ResponseDataItemsInnerItemInfoCoreUser $coreUser): self
    {
        $this->coreUser = $coreUser;
        return $this;
    }

    /**
     * 3: string head_image_uri,
     * @return int
     */
    public function getCreateTime(): ?int
    {
        return $this->createTime;
    }

    /**
     * 3: string head_image_uri,
     * @param int $createTime
     * @return self
     */
    public function setCreateTime(?int $createTime): self
    {
        $this->createTime = $createTime;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarMcnProviderGetTaskItemListV2ResponseDataItemsInnerItemInfoData
     */
    public function getData(): ?\Oceanengine\Models\StarMcnProviderGetTaskItemListV2ResponseDataItemsInnerItemInfoData
    {
        return $this->data;
    }

    /**
     * @param \Oceanengine\Models\StarMcnProviderGetTaskItemListV2ResponseDataItemsInnerItemInfoData $data
     * @return self
     */
    public function setData(?\Oceanengine\Models\StarMcnProviderGetTaskItemListV2ResponseDataItemsInnerItemInfoData $data): self
    {
        $this->data = $data;
        return $this;
    }

    /**
     * 直播投稿的直播状态，直播的时长
     * @return int
     */
    public function getDuration(): ?int
    {
        return $this->duration;
    }

    /**
     * 直播投稿的直播状态，直播的时长
     * @param int $duration
     * @return self
     */
    public function setDuration(?int $duration): self
    {
        $this->duration = $duration;
        return $this;
    }

    /**
     * @return int
     */
    public function getItemId(): ?int
    {
        return $this->itemId;
    }

    /**
     * @param int $itemId
     * @return self
     */
    public function setItemId(?int $itemId): self
    {
        $this->itemId = $itemId;
        return $this;
    }

    /**
     * 广告素材ID
     * @return int
     */
    public function getLegoMid(): ?int
    {
        return $this->legoMid;
    }

    /**
     * 广告素材ID
     * @param int $legoMid
     * @return self
     */
    public function setLegoMid(?int $legoMid): self
    {
        $this->legoMid = $legoMid;
        return $this;
    }

    /**
     * 发布时间
     * @return int
     */
    public function getReleaseTime(): ?int
    {
        return $this->releaseTime;
    }

    /**
     * 发布时间
     * @param int $releaseTime
     * @return self
     */
    public function setReleaseTime(?int $releaseTime): self
    {
        $this->releaseTime = $releaseTime;
        return $this;
    }

    /**
     * @return string
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return self
     */
    public function setTitle(?string $title): self
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return string
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

    /**
     * @param string $url
     * @return self
     */
    public function setUrl(?string $url): self
    {
        $this->url = $url;
        return $this;
    }

    /**
     * 视频上传渠道
     * @return string
     */
    public function getVideoParticipateProviderChannel(): ?string
    {
        return $this->videoParticipateProviderChannel;
    }

    /**
     * 视频上传渠道
     * @param string $videoParticipateProviderChannel
     * @return self
     */
    public function setVideoParticipateProviderChannel(?string $videoParticipateProviderChannel): self
    {
        $this->videoParticipateProviderChannel = $videoParticipateProviderChannel;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->awemeItemStatus !== null) {
            $result['aweme_item_status'] = $this->awemeItemStatus;
        }
        if ($this->commonTagIds !== null) {
            $result['common_tag_ids'] = $this->commonTagIds;
        }
        if ($this->coreUser !== null) {
            $result['core_user'] = $this->coreUser;
        }
        if ($this->createTime !== null) {
            $result['create_time'] = $this->createTime;
        }
        if ($this->data !== null) {
            $result['data'] = $this->data;
        }
        if ($this->duration !== null) {
            $result['duration'] = $this->duration;
        }
        if ($this->itemId !== null) {
            $result['item_id'] = $this->itemId;
        }
        if ($this->legoMid !== null) {
            $result['lego_mid'] = $this->legoMid;
        }
        if ($this->releaseTime !== null) {
            $result['release_time'] = $this->releaseTime;
        }
        if ($this->title !== null) {
            $result['title'] = $this->title;
        }
        if ($this->url !== null) {
            $result['url'] = $this->url;
        }
        if ($this->videoParticipateProviderChannel !== null) {
            $result['video_participate_provider_channel'] = $this->videoParticipateProviderChannel;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['aweme_item_status'] ?? null) !== null) {
            $obj->awemeItemStatus = (int) $v;
        }
        if (($v = $data['common_tag_ids'] ?? null) !== null && is_array($v)) {
            $obj->commonTagIds = $v;
        }
        if (($v = $data['core_user'] ?? null) !== null && is_array($v)) {
            $obj->coreUser = \Oceanengine\Models\StarMcnProviderGetTaskItemListV2ResponseDataItemsInnerItemInfoCoreUser::fromArray($v);
        }
        if (($v = $data['create_time'] ?? null) !== null) {
            $obj->createTime = (int) $v;
        }
        if (($v = $data['data'] ?? null) !== null && is_array($v)) {
            $obj->data = \Oceanengine\Models\StarMcnProviderGetTaskItemListV2ResponseDataItemsInnerItemInfoData::fromArray($v);
        }
        if (($v = $data['duration'] ?? null) !== null) {
            $obj->duration = (int) $v;
        }
        if (($v = $data['item_id'] ?? null) !== null) {
            $obj->itemId = (int) $v;
        }
        if (($v = $data['lego_mid'] ?? null) !== null) {
            $obj->legoMid = (int) $v;
        }
        if (($v = $data['release_time'] ?? null) !== null) {
            $obj->releaseTime = (int) $v;
        }
        if (($v = $data['title'] ?? null) !== null) {
            $obj->title = (string) $v;
        }
        if (($v = $data['url'] ?? null) !== null) {
            $obj->url = (string) $v;
        }
        if (($v = $data['video_participate_provider_channel'] ?? null) !== null) {
            $obj->videoParticipateProviderChannel = (string) $v;
        }
        return $obj;
    }
}
