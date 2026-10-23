<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class CreativeGetV2ResponseDataListInner implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $adId = null;

    /**
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * @var int
     */
    protected ?int $awemeItemId = null;

    /**
     * @var string
     */
    protected ?string $creativeCreateTime = null;

    /**
     * @var int
     */
    protected ?int $creativeId = null;

    /**
     * @var string
     */
    protected ?string $creativeModifyTime = null;

    /**
     * @var int[]
     */
    protected ?array $creativeWordIds = null;

    /**
     * @var string
     */
    protected ?string $imageId = null;

    /**
     * @var string[]
     */
    protected ?array $imageIds = null;

    /**
     * @var \Oceanengine\Models\CreativeGetV2DataListImageMode
     */
    protected ?string $imageMode = null;

    /**
     * @var \Oceanengine\Models\CreativeGetV2ResponseDataListInnerMaterialsInner[]
     */
    protected ?array $materials = null;

    /**
     * @var \Oceanengine\Models\CreativeGetV2DataListOptStatus
     */
    protected ?string $optStatus = null;

    /**
     * @var \Oceanengine\Models\CreativeGetV2DataListStatus
     */
    protected ?string $status = null;

    /**
     * @var string
     */
    protected ?string $thirdPartyId = null;

    /**
     * @var string
     */
    protected ?string $title = null;

    /**
     * @var string
     */
    protected ?string $videoId = null;

    /**
     * @return int
     */
    public function getAdId(): ?int
    {
        return $this->adId;
    }

    /**
     * @param int $adId
     * @return self
     */
    public function setAdId(?int $adId): self
    {
        $this->adId = $adId;
        return $this;
    }

    /**
     * @return int
     */
    public function getAdvertiserId(): ?int
    {
        return $this->advertiserId;
    }

    /**
     * @param int $advertiserId
     * @return self
     */
    public function setAdvertiserId(?int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * @return int
     */
    public function getAwemeItemId(): ?int
    {
        return $this->awemeItemId;
    }

    /**
     * @param int $awemeItemId
     * @return self
     */
    public function setAwemeItemId(?int $awemeItemId): self
    {
        $this->awemeItemId = $awemeItemId;
        return $this;
    }

    /**
     * @return string
     */
    public function getCreativeCreateTime(): ?string
    {
        return $this->creativeCreateTime;
    }

    /**
     * @param string $creativeCreateTime
     * @return self
     */
    public function setCreativeCreateTime(?string $creativeCreateTime): self
    {
        $this->creativeCreateTime = $creativeCreateTime;
        return $this;
    }

    /**
     * @return int
     */
    public function getCreativeId(): ?int
    {
        return $this->creativeId;
    }

    /**
     * @param int $creativeId
     * @return self
     */
    public function setCreativeId(?int $creativeId): self
    {
        $this->creativeId = $creativeId;
        return $this;
    }

    /**
     * @return string
     */
    public function getCreativeModifyTime(): ?string
    {
        return $this->creativeModifyTime;
    }

    /**
     * @param string $creativeModifyTime
     * @return self
     */
    public function setCreativeModifyTime(?string $creativeModifyTime): self
    {
        $this->creativeModifyTime = $creativeModifyTime;
        return $this;
    }

    /**
     * @return int[]
     */
    public function getCreativeWordIds(): ?array
    {
        return $this->creativeWordIds;
    }

    /**
     * @param int[] $creativeWordIds
     * @return self
     */
    public function setCreativeWordIds(?array $creativeWordIds): self
    {
        $this->creativeWordIds = $creativeWordIds;
        return $this;
    }

    /**
     * @return string
     */
    public function getImageId(): ?string
    {
        return $this->imageId;
    }

    /**
     * @param string $imageId
     * @return self
     */
    public function setImageId(?string $imageId): self
    {
        $this->imageId = $imageId;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getImageIds(): ?array
    {
        return $this->imageIds;
    }

    /**
     * @param string[] $imageIds
     * @return self
     */
    public function setImageIds(?array $imageIds): self
    {
        $this->imageIds = $imageIds;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CreativeGetV2DataListImageMode
     */
    public function getImageMode(): ?string
    {
        return $this->imageMode;
    }

    /**
     * @param \Oceanengine\Models\CreativeGetV2DataListImageMode $imageMode
     * @return self
     */
    public function setImageMode(?string $imageMode): self
    {
        $this->imageMode = $imageMode;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CreativeGetV2ResponseDataListInnerMaterialsInner[]
     */
    public function getMaterials(): ?array
    {
        return $this->materials;
    }

    /**
     * @param \Oceanengine\Models\CreativeGetV2ResponseDataListInnerMaterialsInner[] $materials
     * @return self
     */
    public function setMaterials(?array $materials): self
    {
        $this->materials = $materials;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CreativeGetV2DataListOptStatus
     */
    public function getOptStatus(): ?string
    {
        return $this->optStatus;
    }

    /**
     * @param \Oceanengine\Models\CreativeGetV2DataListOptStatus $optStatus
     * @return self
     */
    public function setOptStatus(?string $optStatus): self
    {
        $this->optStatus = $optStatus;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CreativeGetV2DataListStatus
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param \Oceanengine\Models\CreativeGetV2DataListStatus $status
     * @return self
     */
    public function setStatus(?string $status): self
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return string
     */
    public function getThirdPartyId(): ?string
    {
        return $this->thirdPartyId;
    }

    /**
     * @param string $thirdPartyId
     * @return self
     */
    public function setThirdPartyId(?string $thirdPartyId): self
    {
        $this->thirdPartyId = $thirdPartyId;
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
    public function getVideoId(): ?string
    {
        return $this->videoId;
    }

    /**
     * @param string $videoId
     * @return self
     */
    public function setVideoId(?string $videoId): self
    {
        $this->videoId = $videoId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->adId !== null) {
            $result['ad_id'] = $this->adId;
        }
        if ($this->advertiserId !== null) {
            $result['advertiser_id'] = $this->advertiserId;
        }
        if ($this->awemeItemId !== null) {
            $result['aweme_item_id'] = $this->awemeItemId;
        }
        if ($this->creativeCreateTime !== null) {
            $result['creative_create_time'] = $this->creativeCreateTime;
        }
        if ($this->creativeId !== null) {
            $result['creative_id'] = $this->creativeId;
        }
        if ($this->creativeModifyTime !== null) {
            $result['creative_modify_time'] = $this->creativeModifyTime;
        }
        if ($this->creativeWordIds !== null) {
            $result['creative_word_ids'] = $this->creativeWordIds;
        }
        if ($this->imageId !== null) {
            $result['image_id'] = $this->imageId;
        }
        if ($this->imageIds !== null) {
            $result['image_ids'] = $this->imageIds;
        }
        if ($this->imageMode !== null) {
            $result['image_mode'] = $this->imageMode;
        }
        if ($this->materials !== null) {
            $result['materials'] = $this->materials;
        }
        if ($this->optStatus !== null) {
            $result['opt_status'] = $this->optStatus;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        if ($this->thirdPartyId !== null) {
            $result['third_party_id'] = $this->thirdPartyId;
        }
        if ($this->title !== null) {
            $result['title'] = $this->title;
        }
        if ($this->videoId !== null) {
            $result['video_id'] = $this->videoId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['ad_id'] ?? null) !== null) {
            $obj->adId = (int) $v;
        }
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['aweme_item_id'] ?? null) !== null) {
            $obj->awemeItemId = (int) $v;
        }
        if (($v = $data['creative_create_time'] ?? null) !== null) {
            $obj->creativeCreateTime = (string) $v;
        }
        if (($v = $data['creative_id'] ?? null) !== null) {
            $obj->creativeId = (int) $v;
        }
        if (($v = $data['creative_modify_time'] ?? null) !== null) {
            $obj->creativeModifyTime = (string) $v;
        }
        if (($v = $data['creative_word_ids'] ?? null) !== null && is_array($v)) {
            $obj->creativeWordIds = $v;
        }
        if (($v = $data['image_id'] ?? null) !== null) {
            $obj->imageId = (string) $v;
        }
        if (($v = $data['image_ids'] ?? null) !== null && is_array($v)) {
            $obj->imageIds = $v;
        }
        if (($v = $data['image_mode'] ?? null) !== null) {
            $obj->imageMode = (string) $v;
        }
        if (($v = $data['materials'] ?? null) !== null && is_array($v)) {
            $obj->materials = array_map(fn ($vv) => \Oceanengine\Models\CreativeGetV2ResponseDataListInnerMaterialsInner::fromArray($vv), $v);
        }
        if (($v = $data['opt_status'] ?? null) !== null) {
            $obj->optStatus = (string) $v;
        }
        if (($v = $data['status'] ?? null) !== null) {
            $obj->status = (string) $v;
        }
        if (($v = $data['third_party_id'] ?? null) !== null) {
            $obj->thirdPartyId = (string) $v;
        }
        if (($v = $data['title'] ?? null) !== null) {
            $obj->title = (string) $v;
        }
        if (($v = $data['video_id'] ?? null) !== null) {
            $obj->videoId = (string) $v;
        }
        return $obj;
    }
}
