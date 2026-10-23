<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanUniAwemeAdUpdateV10Request implements \JsonSerializable
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
     * @var \Oceanengine\Models\QianchuanUniAwemeAdUpdateV10RequestCreativeSetting
     */
    protected ?\Oceanengine\Models\QianchuanUniAwemeAdUpdateV10RequestCreativeSetting $creativeSetting = null;

    /**
     * @var \Oceanengine\Models\QianchuanUniAwemeAdUpdateV10RequestDeliverySetting
     */
    protected ?\Oceanengine\Models\QianchuanUniAwemeAdUpdateV10RequestDeliverySetting $deliverySetting = null;

    /**
     * @var \Oceanengine\Models\QianchuanUniAwemeAdUpdateV10RequestMultiProductCreativeListInner[]
     */
    protected ?array $multiProductCreativeList = null;

    /**
     * @var string
     */
    protected ?string $name = null;

    /**
     * @var \Oceanengine\Models\QianchuanUniAwemeAdUpdateV10RequestProductChannelInfoInner[]
     */
    protected ?array $productChannelInfo = null;

    /**
     * @var \Oceanengine\Models\QianchuanUniAwemeAdUpdateV10RequestProgrammaticCreativeMediaList
     */
    protected ?\Oceanengine\Models\QianchuanUniAwemeAdUpdateV10RequestProgrammaticCreativeMediaList $programmaticCreativeMediaList = null;

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
     * @return \Oceanengine\Models\QianchuanUniAwemeAdUpdateV10RequestCreativeSetting
     */
    public function getCreativeSetting(): ?\Oceanengine\Models\QianchuanUniAwemeAdUpdateV10RequestCreativeSetting
    {
        return $this->creativeSetting;
    }

    /**
     * @param \Oceanengine\Models\QianchuanUniAwemeAdUpdateV10RequestCreativeSetting $creativeSetting
     * @return self
     */
    public function setCreativeSetting(?\Oceanengine\Models\QianchuanUniAwemeAdUpdateV10RequestCreativeSetting $creativeSetting): self
    {
        $this->creativeSetting = $creativeSetting;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanUniAwemeAdUpdateV10RequestDeliverySetting
     */
    public function getDeliverySetting(): ?\Oceanengine\Models\QianchuanUniAwemeAdUpdateV10RequestDeliverySetting
    {
        return $this->deliverySetting;
    }

    /**
     * @param \Oceanengine\Models\QianchuanUniAwemeAdUpdateV10RequestDeliverySetting $deliverySetting
     * @return self
     */
    public function setDeliverySetting(?\Oceanengine\Models\QianchuanUniAwemeAdUpdateV10RequestDeliverySetting $deliverySetting): self
    {
        $this->deliverySetting = $deliverySetting;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanUniAwemeAdUpdateV10RequestMultiProductCreativeListInner[]
     */
    public function getMultiProductCreativeList(): ?array
    {
        return $this->multiProductCreativeList;
    }

    /**
     * @param \Oceanengine\Models\QianchuanUniAwemeAdUpdateV10RequestMultiProductCreativeListInner[] $multiProductCreativeList
     * @return self
     */
    public function setMultiProductCreativeList(?array $multiProductCreativeList): self
    {
        $this->multiProductCreativeList = $multiProductCreativeList;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanUniAwemeAdUpdateV10RequestProductChannelInfoInner[]
     */
    public function getProductChannelInfo(): ?array
    {
        return $this->productChannelInfo;
    }

    /**
     * @param \Oceanengine\Models\QianchuanUniAwemeAdUpdateV10RequestProductChannelInfoInner[] $productChannelInfo
     * @return self
     */
    public function setProductChannelInfo(?array $productChannelInfo): self
    {
        $this->productChannelInfo = $productChannelInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanUniAwemeAdUpdateV10RequestProgrammaticCreativeMediaList
     */
    public function getProgrammaticCreativeMediaList(): ?\Oceanengine\Models\QianchuanUniAwemeAdUpdateV10RequestProgrammaticCreativeMediaList
    {
        return $this->programmaticCreativeMediaList;
    }

    /**
     * @param \Oceanengine\Models\QianchuanUniAwemeAdUpdateV10RequestProgrammaticCreativeMediaList $programmaticCreativeMediaList
     * @return self
     */
    public function setProgrammaticCreativeMediaList(?\Oceanengine\Models\QianchuanUniAwemeAdUpdateV10RequestProgrammaticCreativeMediaList $programmaticCreativeMediaList): self
    {
        $this->programmaticCreativeMediaList = $programmaticCreativeMediaList;
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
        if ($this->creativeSetting !== null) {
            $result['creative_setting'] = $this->creativeSetting;
        }
        if ($this->deliverySetting !== null) {
            $result['delivery_setting'] = $this->deliverySetting;
        }
        if ($this->multiProductCreativeList !== null) {
            $result['multi_product_creative_list'] = $this->multiProductCreativeList;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->productChannelInfo !== null) {
            $result['product_channel_info'] = $this->productChannelInfo;
        }
        if ($this->programmaticCreativeMediaList !== null) {
            $result['programmatic_creative_media_list'] = $this->programmaticCreativeMediaList;
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
        if (($v = $data['creative_setting'] ?? null) !== null && is_array($v)) {
            $obj->creativeSetting = \Oceanengine\Models\QianchuanUniAwemeAdUpdateV10RequestCreativeSetting::fromArray($v);
        }
        if (($v = $data['delivery_setting'] ?? null) !== null && is_array($v)) {
            $obj->deliverySetting = \Oceanengine\Models\QianchuanUniAwemeAdUpdateV10RequestDeliverySetting::fromArray($v);
        }
        if (($v = $data['multi_product_creative_list'] ?? null) !== null && is_array($v)) {
            $obj->multiProductCreativeList = array_map(fn ($vv) => \Oceanengine\Models\QianchuanUniAwemeAdUpdateV10RequestMultiProductCreativeListInner::fromArray($vv), $v);
        }
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        if (($v = $data['product_channel_info'] ?? null) !== null && is_array($v)) {
            $obj->productChannelInfo = array_map(fn ($vv) => \Oceanengine\Models\QianchuanUniAwemeAdUpdateV10RequestProductChannelInfoInner::fromArray($vv), $v);
        }
        if (($v = $data['programmatic_creative_media_list'] ?? null) !== null && is_array($v)) {
            $obj->programmaticCreativeMediaList = \Oceanengine\Models\QianchuanUniAwemeAdUpdateV10RequestProgrammaticCreativeMediaList::fromArray($v);
        }
        return $obj;
    }
}
