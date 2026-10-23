<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class CreativeGetV2Filtering implements \JsonSerializable
{
    /**
     * 按照ad_id过滤
     * @var int
     */
    protected ?int $adId = null;

    /**
     * 按照campaign_id过滤
     * @var int
     */
    protected ?int $campaignId = null;

    /**
     * 广告创意创建时间，格式yyyy-MM-dd，表示过滤出当天创建的广告创意
     * @var string
     */
    protected ?string $creativeCreateTime = null;

    /**
     * 按照creative_id过滤，最多传100个。创意ID需属于当前广告主，否则会报错
     * @var int[]
     */
    protected ?array $creativeIds = null;

    /**
     * 广告创意更新时间，格式yyyy-MM-dd，表示过滤出当天更新的广告创意
     * @var string
     */
    protected ?string $creativeModifyTime = null;

    /**
     * 按照creative_title过滤，支持模糊搜索。支持的最大长度为30
     * @var string
     */
    protected ?string $creativeTitle = null;

    /**
     * @var \Oceanengine\Models\CreativeGetV2FilteringImageMode
     */
    protected ?string $imageMode = null;

    /**
     * @var \Oceanengine\Models\CreativeGetV2FilteringLandingType
     */
    protected ?string $landingType = null;

    /**
     * @var \Oceanengine\Models\CreativeGetV2FilteringPricing
     */
    protected ?string $pricing = null;

    /**
     * 按照创意状态过滤，默认为返回“所有不包含已删除”，如果要返回所有包含已删除有对应枚举表示，[【附录-广告创意状态】](https://ad.oceanengine.com/openapi/doc/index.html?id=1696710760171535)
     * @var string
     */
    protected ?string $status = null;

    /**
     * 按照ad_id过滤
     * @return int
     */
    public function getAdId(): ?int
    {
        return $this->adId;
    }

    /**
     * 按照ad_id过滤
     * @param int $adId
     * @return self
     */
    public function setAdId(?int $adId): self
    {
        $this->adId = $adId;
        return $this;
    }

    /**
     * 按照campaign_id过滤
     * @return int
     */
    public function getCampaignId(): ?int
    {
        return $this->campaignId;
    }

    /**
     * 按照campaign_id过滤
     * @param int $campaignId
     * @return self
     */
    public function setCampaignId(?int $campaignId): self
    {
        $this->campaignId = $campaignId;
        return $this;
    }

    /**
     * 广告创意创建时间，格式yyyy-MM-dd，表示过滤出当天创建的广告创意
     * @return string
     */
    public function getCreativeCreateTime(): ?string
    {
        return $this->creativeCreateTime;
    }

    /**
     * 广告创意创建时间，格式yyyy-MM-dd，表示过滤出当天创建的广告创意
     * @param string $creativeCreateTime
     * @return self
     */
    public function setCreativeCreateTime(?string $creativeCreateTime): self
    {
        $this->creativeCreateTime = $creativeCreateTime;
        return $this;
    }

    /**
     * 按照creative_id过滤，最多传100个。创意ID需属于当前广告主，否则会报错
     * @return int[]
     */
    public function getCreativeIds(): ?array
    {
        return $this->creativeIds;
    }

    /**
     * 按照creative_id过滤，最多传100个。创意ID需属于当前广告主，否则会报错
     * @param int[] $creativeIds
     * @return self
     */
    public function setCreativeIds(?array $creativeIds): self
    {
        $this->creativeIds = $creativeIds;
        return $this;
    }

    /**
     * 广告创意更新时间，格式yyyy-MM-dd，表示过滤出当天更新的广告创意
     * @return string
     */
    public function getCreativeModifyTime(): ?string
    {
        return $this->creativeModifyTime;
    }

    /**
     * 广告创意更新时间，格式yyyy-MM-dd，表示过滤出当天更新的广告创意
     * @param string $creativeModifyTime
     * @return self
     */
    public function setCreativeModifyTime(?string $creativeModifyTime): self
    {
        $this->creativeModifyTime = $creativeModifyTime;
        return $this;
    }

    /**
     * 按照creative_title过滤，支持模糊搜索。支持的最大长度为30
     * @return string
     */
    public function getCreativeTitle(): ?string
    {
        return $this->creativeTitle;
    }

    /**
     * 按照creative_title过滤，支持模糊搜索。支持的最大长度为30
     * @param string $creativeTitle
     * @return self
     */
    public function setCreativeTitle(?string $creativeTitle): self
    {
        $this->creativeTitle = $creativeTitle;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CreativeGetV2FilteringImageMode
     */
    public function getImageMode(): ?string
    {
        return $this->imageMode;
    }

    /**
     * @param \Oceanengine\Models\CreativeGetV2FilteringImageMode $imageMode
     * @return self
     */
    public function setImageMode(?string $imageMode): self
    {
        $this->imageMode = $imageMode;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CreativeGetV2FilteringLandingType
     */
    public function getLandingType(): ?string
    {
        return $this->landingType;
    }

    /**
     * @param \Oceanengine\Models\CreativeGetV2FilteringLandingType $landingType
     * @return self
     */
    public function setLandingType(?string $landingType): self
    {
        $this->landingType = $landingType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CreativeGetV2FilteringPricing
     */
    public function getPricing(): ?string
    {
        return $this->pricing;
    }

    /**
     * @param \Oceanengine\Models\CreativeGetV2FilteringPricing $pricing
     * @return self
     */
    public function setPricing(?string $pricing): self
    {
        $this->pricing = $pricing;
        return $this;
    }

    /**
     * 按照创意状态过滤，默认为返回“所有不包含已删除”，如果要返回所有包含已删除有对应枚举表示，[【附录-广告创意状态】](https://ad.oceanengine.com/openapi/doc/index.html?id=1696710760171535)
     * @return string
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * 按照创意状态过滤，默认为返回“所有不包含已删除”，如果要返回所有包含已删除有对应枚举表示，[【附录-广告创意状态】](https://ad.oceanengine.com/openapi/doc/index.html?id=1696710760171535)
     * @param string $status
     * @return self
     */
    public function setStatus(?string $status): self
    {
        $this->status = $status;
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
        if ($this->campaignId !== null) {
            $result['campaign_id'] = $this->campaignId;
        }
        if ($this->creativeCreateTime !== null) {
            $result['creative_create_time'] = $this->creativeCreateTime;
        }
        if ($this->creativeIds !== null) {
            $result['creative_ids'] = $this->creativeIds;
        }
        if ($this->creativeModifyTime !== null) {
            $result['creative_modify_time'] = $this->creativeModifyTime;
        }
        if ($this->creativeTitle !== null) {
            $result['creative_title'] = $this->creativeTitle;
        }
        if ($this->imageMode !== null) {
            $result['image_mode'] = $this->imageMode;
        }
        if ($this->landingType !== null) {
            $result['landing_type'] = $this->landingType;
        }
        if ($this->pricing !== null) {
            $result['pricing'] = $this->pricing;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['ad_id'] ?? null) !== null) {
            $obj->adId = (int) $v;
        }
        if (($v = $data['campaign_id'] ?? null) !== null) {
            $obj->campaignId = (int) $v;
        }
        if (($v = $data['creative_create_time'] ?? null) !== null) {
            $obj->creativeCreateTime = (string) $v;
        }
        if (($v = $data['creative_ids'] ?? null) !== null && is_array($v)) {
            $obj->creativeIds = $v;
        }
        if (($v = $data['creative_modify_time'] ?? null) !== null) {
            $obj->creativeModifyTime = (string) $v;
        }
        if (($v = $data['creative_title'] ?? null) !== null) {
            $obj->creativeTitle = (string) $v;
        }
        if (($v = $data['image_mode'] ?? null) !== null) {
            $obj->imageMode = (string) $v;
        }
        if (($v = $data['landing_type'] ?? null) !== null) {
            $obj->landingType = (string) $v;
        }
        if (($v = $data['pricing'] ?? null) !== null) {
            $obj->pricing = (string) $v;
        }
        if (($v = $data['status'] ?? null) !== null) {
            $obj->status = (string) $v;
        }
        return $obj;
    }
}
