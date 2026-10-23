<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanAwemeOrderGetV10ResponseDataListInner implements \JsonSerializable
{
    /**
     * 计划id，未支付的订单无计划id
     * @var int
     */
    protected ?int $adId = null;

    /**
     * @var \Oceanengine\Models\QianchuanAwemeOrderGetV10ResponseDataListInnerAwemeInfo
     */
    protected ?\Oceanengine\Models\QianchuanAwemeOrderGetV10ResponseDataListInnerAwemeInfo $awemeInfo = null;

    /**
     * @var \Oceanengine\Models\QianchuanAwemeOrderGetV10ResponseDataListInnerDeliverySetting
     */
    protected ?\Oceanengine\Models\QianchuanAwemeOrderGetV10ResponseDataListInnerDeliverySetting $deliverySetting = null;

    /**
     * @var \Oceanengine\Models\QianchuanAwemeOrderGetV10DataListMarketingGoal
     */
    protected ?string $marketingGoal = null;

    /**
     * 订单创建时间（下单时间）
     * @var string
     */
    protected ?string $orderCreateTime = null;

    /**
     * 订单id
     * @var int
     */
    protected ?int $orderId = null;

    /**
     * @var \Oceanengine\Models\QianchuanAwemeOrderGetV10ResponseDataListInnerRoomInfo
     */
    protected ?\Oceanengine\Models\QianchuanAwemeOrderGetV10ResponseDataListInnerRoomInfo $roomInfo = null;

    /**
     * @var \Oceanengine\Models\QianchuanAwemeOrderGetV10DataListStatus
     */
    protected ?string $status = null;

    /**
     * @var \Oceanengine\Models\QianchuanAwemeOrderGetV10ResponseDataListInnerVideoInfo
     */
    protected ?\Oceanengine\Models\QianchuanAwemeOrderGetV10ResponseDataListInnerVideoInfo $videoInfo = null;

    /**
     * 计划id，未支付的订单无计划id
     * @return int
     */
    public function getAdId(): ?int
    {
        return $this->adId;
    }

    /**
     * 计划id，未支付的订单无计划id
     * @param int $adId
     * @return self
     */
    public function setAdId(?int $adId): self
    {
        $this->adId = $adId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAwemeOrderGetV10ResponseDataListInnerAwemeInfo
     */
    public function getAwemeInfo(): ?\Oceanengine\Models\QianchuanAwemeOrderGetV10ResponseDataListInnerAwemeInfo
    {
        return $this->awemeInfo;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAwemeOrderGetV10ResponseDataListInnerAwemeInfo $awemeInfo
     * @return self
     */
    public function setAwemeInfo(?\Oceanengine\Models\QianchuanAwemeOrderGetV10ResponseDataListInnerAwemeInfo $awemeInfo): self
    {
        $this->awemeInfo = $awemeInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAwemeOrderGetV10ResponseDataListInnerDeliverySetting
     */
    public function getDeliverySetting(): ?\Oceanengine\Models\QianchuanAwemeOrderGetV10ResponseDataListInnerDeliverySetting
    {
        return $this->deliverySetting;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAwemeOrderGetV10ResponseDataListInnerDeliverySetting $deliverySetting
     * @return self
     */
    public function setDeliverySetting(?\Oceanengine\Models\QianchuanAwemeOrderGetV10ResponseDataListInnerDeliverySetting $deliverySetting): self
    {
        $this->deliverySetting = $deliverySetting;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAwemeOrderGetV10DataListMarketingGoal
     */
    public function getMarketingGoal(): ?string
    {
        return $this->marketingGoal;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAwemeOrderGetV10DataListMarketingGoal $marketingGoal
     * @return self
     */
    public function setMarketingGoal(?string $marketingGoal): self
    {
        $this->marketingGoal = $marketingGoal;
        return $this;
    }

    /**
     * 订单创建时间（下单时间）
     * @return string
     */
    public function getOrderCreateTime(): ?string
    {
        return $this->orderCreateTime;
    }

    /**
     * 订单创建时间（下单时间）
     * @param string $orderCreateTime
     * @return self
     */
    public function setOrderCreateTime(?string $orderCreateTime): self
    {
        $this->orderCreateTime = $orderCreateTime;
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
     * @return \Oceanengine\Models\QianchuanAwemeOrderGetV10ResponseDataListInnerRoomInfo
     */
    public function getRoomInfo(): ?\Oceanengine\Models\QianchuanAwemeOrderGetV10ResponseDataListInnerRoomInfo
    {
        return $this->roomInfo;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAwemeOrderGetV10ResponseDataListInnerRoomInfo $roomInfo
     * @return self
     */
    public function setRoomInfo(?\Oceanengine\Models\QianchuanAwemeOrderGetV10ResponseDataListInnerRoomInfo $roomInfo): self
    {
        $this->roomInfo = $roomInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAwemeOrderGetV10DataListStatus
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAwemeOrderGetV10DataListStatus $status
     * @return self
     */
    public function setStatus(?string $status): self
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAwemeOrderGetV10ResponseDataListInnerVideoInfo
     */
    public function getVideoInfo(): ?\Oceanengine\Models\QianchuanAwemeOrderGetV10ResponseDataListInnerVideoInfo
    {
        return $this->videoInfo;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAwemeOrderGetV10ResponseDataListInnerVideoInfo $videoInfo
     * @return self
     */
    public function setVideoInfo(?\Oceanengine\Models\QianchuanAwemeOrderGetV10ResponseDataListInnerVideoInfo $videoInfo): self
    {
        $this->videoInfo = $videoInfo;
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
        if ($this->awemeInfo !== null) {
            $result['aweme_info'] = $this->awemeInfo;
        }
        if ($this->deliverySetting !== null) {
            $result['delivery_setting'] = $this->deliverySetting;
        }
        if ($this->marketingGoal !== null) {
            $result['marketing_goal'] = $this->marketingGoal;
        }
        if ($this->orderCreateTime !== null) {
            $result['order_create_time'] = $this->orderCreateTime;
        }
        if ($this->orderId !== null) {
            $result['order_id'] = $this->orderId;
        }
        if ($this->roomInfo !== null) {
            $result['room_info'] = $this->roomInfo;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        if ($this->videoInfo !== null) {
            $result['video_info'] = $this->videoInfo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['ad_id'] ?? null) !== null) {
            $obj->adId = (int) $v;
        }
        if (($v = $data['aweme_info'] ?? null) !== null && is_array($v)) {
            $obj->awemeInfo = \Oceanengine\Models\QianchuanAwemeOrderGetV10ResponseDataListInnerAwemeInfo::fromArray($v);
        }
        if (($v = $data['delivery_setting'] ?? null) !== null && is_array($v)) {
            $obj->deliverySetting = \Oceanengine\Models\QianchuanAwemeOrderGetV10ResponseDataListInnerDeliverySetting::fromArray($v);
        }
        if (($v = $data['marketing_goal'] ?? null) !== null) {
            $obj->marketingGoal = (string) $v;
        }
        if (($v = $data['order_create_time'] ?? null) !== null) {
            $obj->orderCreateTime = (string) $v;
        }
        if (($v = $data['order_id'] ?? null) !== null) {
            $obj->orderId = (int) $v;
        }
        if (($v = $data['room_info'] ?? null) !== null && is_array($v)) {
            $obj->roomInfo = \Oceanengine\Models\QianchuanAwemeOrderGetV10ResponseDataListInnerRoomInfo::fromArray($v);
        }
        if (($v = $data['status'] ?? null) !== null) {
            $obj->status = (string) $v;
        }
        if (($v = $data['video_info'] ?? null) !== null && is_array($v)) {
            $obj->videoInfo = \Oceanengine\Models\QianchuanAwemeOrderGetV10ResponseDataListInnerVideoInfo::fromArray($v);
        }
        return $obj;
    }
}
