<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanAwemeOrderCreateV10Request implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * @var \Oceanengine\Models\QianchuanAwemeOrderCreateV10RequestAudience
     */
    protected ?\Oceanengine\Models\QianchuanAwemeOrderCreateV10RequestAudience $audience = null;

    /**
     * 推广对象的抖音id 1. 视频加热和视频加热直播间：传递视频作者的抖音uid 2. 直接加热直播间：传递主播的抖音uid
     * @var int
     */
    protected ?int $awemeId = null;

    /**
     * @var int
     */
    protected ?int $awemeItemId = null;

    /**
     * @var \Oceanengine\Models\QianchuanAwemeOrderCreateV10RequestDeliverySetting
     */
    protected ?\Oceanengine\Models\QianchuanAwemeOrderCreateV10RequestDeliverySetting $deliverySetting = null;

    /**
     * @var \Oceanengine\Models\QianchuanAwemeOrderCreateV10MarketingGoal
     */
    protected ?string $marketingGoal = null;

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
     * @return \Oceanengine\Models\QianchuanAwemeOrderCreateV10RequestAudience
     */
    public function getAudience(): ?\Oceanengine\Models\QianchuanAwemeOrderCreateV10RequestAudience
    {
        return $this->audience;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAwemeOrderCreateV10RequestAudience $audience
     * @return self
     */
    public function setAudience(?\Oceanengine\Models\QianchuanAwemeOrderCreateV10RequestAudience $audience): self
    {
        $this->audience = $audience;
        return $this;
    }

    /**
     * 推广对象的抖音id 1. 视频加热和视频加热直播间：传递视频作者的抖音uid 2. 直接加热直播间：传递主播的抖音uid
     * @return int
     */
    public function getAwemeId(): ?int
    {
        return $this->awemeId;
    }

    /**
     * 推广对象的抖音id 1. 视频加热和视频加热直播间：传递视频作者的抖音uid 2. 直接加热直播间：传递主播的抖音uid
     * @param int $awemeId
     * @return self
     */
    public function setAwemeId(?int $awemeId): self
    {
        $this->awemeId = $awemeId;
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
     * @return \Oceanengine\Models\QianchuanAwemeOrderCreateV10RequestDeliverySetting
     */
    public function getDeliverySetting(): ?\Oceanengine\Models\QianchuanAwemeOrderCreateV10RequestDeliverySetting
    {
        return $this->deliverySetting;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAwemeOrderCreateV10RequestDeliverySetting $deliverySetting
     * @return self
     */
    public function setDeliverySetting(?\Oceanengine\Models\QianchuanAwemeOrderCreateV10RequestDeliverySetting $deliverySetting): self
    {
        $this->deliverySetting = $deliverySetting;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAwemeOrderCreateV10MarketingGoal
     */
    public function getMarketingGoal(): ?string
    {
        return $this->marketingGoal;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAwemeOrderCreateV10MarketingGoal $marketingGoal
     * @return self
     */
    public function setMarketingGoal(?string $marketingGoal): self
    {
        $this->marketingGoal = $marketingGoal;
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
        if ($this->audience !== null) {
            $result['audience'] = $this->audience;
        }
        if ($this->awemeId !== null) {
            $result['aweme_id'] = $this->awemeId;
        }
        if ($this->awemeItemId !== null) {
            $result['aweme_item_id'] = $this->awemeItemId;
        }
        if ($this->deliverySetting !== null) {
            $result['delivery_setting'] = $this->deliverySetting;
        }
        if ($this->marketingGoal !== null) {
            $result['marketing_goal'] = $this->marketingGoal;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['audience'] ?? null) !== null && is_array($v)) {
            $obj->audience = \Oceanengine\Models\QianchuanAwemeOrderCreateV10RequestAudience::fromArray($v);
        }
        if (($v = $data['aweme_id'] ?? null) !== null) {
            $obj->awemeId = (int) $v;
        }
        if (($v = $data['aweme_item_id'] ?? null) !== null) {
            $obj->awemeItemId = (int) $v;
        }
        if (($v = $data['delivery_setting'] ?? null) !== null && is_array($v)) {
            $obj->deliverySetting = \Oceanengine\Models\QianchuanAwemeOrderCreateV10RequestDeliverySetting::fromArray($v);
        }
        if (($v = $data['marketing_goal'] ?? null) !== null) {
            $obj->marketingGoal = (string) $v;
        }
        return $obj;
    }
}
