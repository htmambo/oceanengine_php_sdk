<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanOverallLiveCreateV10Request implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * 抖音号id
     * @var int
     */
    protected ?int $awemeId = null;

    /**
     * @var \Oceanengine\Models\QianchuanOverallLiveCreateV10RequestCreativeSetting
     */
    protected ?\Oceanengine\Models\QianchuanOverallLiveCreateV10RequestCreativeSetting $creativeSetting = null;

    /**
     * @var \Oceanengine\Models\QianchuanOverallLiveCreateV10RequestDeliverySetting
     */
    protected ?\Oceanengine\Models\QianchuanOverallLiveCreateV10RequestDeliverySetting $deliverySetting = null;

    /**
     * @var \Oceanengine\Models\QianchuanOverallLiveCreateV10MarketingGoal
     */
    protected ?string $marketingGoal = null;

    /**
     * @var string
     */
    protected ?string $name = null;

    /**
     * @var \Oceanengine\Models\QianchuanOverallLiveCreateV10RequestProgrammaticCreativeMediaList
     */
    protected ?\Oceanengine\Models\QianchuanOverallLiveCreateV10RequestProgrammaticCreativeMediaList $programmaticCreativeMediaList = null;

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
     * 抖音号id
     * @return int
     */
    public function getAwemeId(): ?int
    {
        return $this->awemeId;
    }

    /**
     * 抖音号id
     * @param int $awemeId
     * @return self
     */
    public function setAwemeId(?int $awemeId): self
    {
        $this->awemeId = $awemeId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanOverallLiveCreateV10RequestCreativeSetting
     */
    public function getCreativeSetting(): ?\Oceanengine\Models\QianchuanOverallLiveCreateV10RequestCreativeSetting
    {
        return $this->creativeSetting;
    }

    /**
     * @param \Oceanengine\Models\QianchuanOverallLiveCreateV10RequestCreativeSetting $creativeSetting
     * @return self
     */
    public function setCreativeSetting(?\Oceanengine\Models\QianchuanOverallLiveCreateV10RequestCreativeSetting $creativeSetting): self
    {
        $this->creativeSetting = $creativeSetting;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanOverallLiveCreateV10RequestDeliverySetting
     */
    public function getDeliverySetting(): ?\Oceanengine\Models\QianchuanOverallLiveCreateV10RequestDeliverySetting
    {
        return $this->deliverySetting;
    }

    /**
     * @param \Oceanengine\Models\QianchuanOverallLiveCreateV10RequestDeliverySetting $deliverySetting
     * @return self
     */
    public function setDeliverySetting(?\Oceanengine\Models\QianchuanOverallLiveCreateV10RequestDeliverySetting $deliverySetting): self
    {
        $this->deliverySetting = $deliverySetting;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanOverallLiveCreateV10MarketingGoal
     */
    public function getMarketingGoal(): ?string
    {
        return $this->marketingGoal;
    }

    /**
     * @param \Oceanengine\Models\QianchuanOverallLiveCreateV10MarketingGoal $marketingGoal
     * @return self
     */
    public function setMarketingGoal(?string $marketingGoal): self
    {
        $this->marketingGoal = $marketingGoal;
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
     * @return \Oceanengine\Models\QianchuanOverallLiveCreateV10RequestProgrammaticCreativeMediaList
     */
    public function getProgrammaticCreativeMediaList(): ?\Oceanengine\Models\QianchuanOverallLiveCreateV10RequestProgrammaticCreativeMediaList
    {
        return $this->programmaticCreativeMediaList;
    }

    /**
     * @param \Oceanengine\Models\QianchuanOverallLiveCreateV10RequestProgrammaticCreativeMediaList $programmaticCreativeMediaList
     * @return self
     */
    public function setProgrammaticCreativeMediaList(?\Oceanengine\Models\QianchuanOverallLiveCreateV10RequestProgrammaticCreativeMediaList $programmaticCreativeMediaList): self
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
        if ($this->advertiserId !== null) {
            $result['advertiser_id'] = $this->advertiserId;
        }
        if ($this->awemeId !== null) {
            $result['aweme_id'] = $this->awemeId;
        }
        if ($this->creativeSetting !== null) {
            $result['creative_setting'] = $this->creativeSetting;
        }
        if ($this->deliverySetting !== null) {
            $result['delivery_setting'] = $this->deliverySetting;
        }
        if ($this->marketingGoal !== null) {
            $result['marketing_goal'] = $this->marketingGoal;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->programmaticCreativeMediaList !== null) {
            $result['programmatic_creative_media_list'] = $this->programmaticCreativeMediaList;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['aweme_id'] ?? null) !== null) {
            $obj->awemeId = (int) $v;
        }
        if (($v = $data['creative_setting'] ?? null) !== null && is_array($v)) {
            $obj->creativeSetting = \Oceanengine\Models\QianchuanOverallLiveCreateV10RequestCreativeSetting::fromArray($v);
        }
        if (($v = $data['delivery_setting'] ?? null) !== null && is_array($v)) {
            $obj->deliverySetting = \Oceanengine\Models\QianchuanOverallLiveCreateV10RequestDeliverySetting::fromArray($v);
        }
        if (($v = $data['marketing_goal'] ?? null) !== null) {
            $obj->marketingGoal = (string) $v;
        }
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        if (($v = $data['programmatic_creative_media_list'] ?? null) !== null && is_array($v)) {
            $obj->programmaticCreativeMediaList = \Oceanengine\Models\QianchuanOverallLiveCreateV10RequestProgrammaticCreativeMediaList::fromArray($v);
        }
        return $obj;
    }
}
