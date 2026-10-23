<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AnalyticsAttributionV30RequestContextAd implements \JsonSerializable
{
    /**
     * 广告计划id；若您可以确定当前订单来自对应广告计划id，则可以上报此字段获得更加精准的归因结果
     * @var int
     */
    protected ?int $adId = null;

    /**
     * 广告账户id；同上，若您可以确定当前订单来自对应广告账户id，则可以上报此字段获得更加精准的归因结果
     * @var int[]
     */
    protected ?array $advertiserIds = null;

    /**
     * false: 客户未归因，上报为需要巨量引擎归因的事件
     * @var bool
     */
    protected ?bool $attributed = null;

    /**
     * 广告组id；同上，若您可以确定当前订单来自对应广告组id，则可以上报此字段获得更加精准的归因结果
     * @var int
     */
    protected ?int $campaignId = null;

    /**
     * 点击时间，指用户点击页面跳转时间，上报秒级时间戳
     * @var int
     */
    protected ?int $clickTime = null;

    /**
     * 客户id；若您可以确定当前订单来自对应客户id，则可以上报此字段获得更加精准的归因结果
     * @var int[]
     */
    protected ?array $customerIds = null;

    /**
     * 广告计划id；若您可以确定当前订单来自对应广告计划id，则可以上报此字段获得更加精准的归因结果
     * @return int
     */
    public function getAdId(): ?int
    {
        return $this->adId;
    }

    /**
     * 广告计划id；若您可以确定当前订单来自对应广告计划id，则可以上报此字段获得更加精准的归因结果
     * @param int $adId
     * @return self
     */
    public function setAdId(?int $adId): self
    {
        $this->adId = $adId;
        return $this;
    }

    /**
     * 广告账户id；同上，若您可以确定当前订单来自对应广告账户id，则可以上报此字段获得更加精准的归因结果
     * @return int[]
     */
    public function getAdvertiserIds(): ?array
    {
        return $this->advertiserIds;
    }

    /**
     * 广告账户id；同上，若您可以确定当前订单来自对应广告账户id，则可以上报此字段获得更加精准的归因结果
     * @param int[] $advertiserIds
     * @return self
     */
    public function setAdvertiserIds(?array $advertiserIds): self
    {
        $this->advertiserIds = $advertiserIds;
        return $this;
    }

    /**
     * false: 客户未归因，上报为需要巨量引擎归因的事件
     * @return bool
     */
    public function getAttributed(): ?bool
    {
        return $this->attributed;
    }

    /**
     * false: 客户未归因，上报为需要巨量引擎归因的事件
     * @param bool $attributed
     * @return self
     */
    public function setAttributed(?bool $attributed): self
    {
        $this->attributed = $attributed;
        return $this;
    }

    /**
     * 广告组id；同上，若您可以确定当前订单来自对应广告组id，则可以上报此字段获得更加精准的归因结果
     * @return int
     */
    public function getCampaignId(): ?int
    {
        return $this->campaignId;
    }

    /**
     * 广告组id；同上，若您可以确定当前订单来自对应广告组id，则可以上报此字段获得更加精准的归因结果
     * @param int $campaignId
     * @return self
     */
    public function setCampaignId(?int $campaignId): self
    {
        $this->campaignId = $campaignId;
        return $this;
    }

    /**
     * 点击时间，指用户点击页面跳转时间，上报秒级时间戳
     * @return int
     */
    public function getClickTime(): ?int
    {
        return $this->clickTime;
    }

    /**
     * 点击时间，指用户点击页面跳转时间，上报秒级时间戳
     * @param int $clickTime
     * @return self
     */
    public function setClickTime(?int $clickTime): self
    {
        $this->clickTime = $clickTime;
        return $this;
    }

    /**
     * 客户id；若您可以确定当前订单来自对应客户id，则可以上报此字段获得更加精准的归因结果
     * @return int[]
     */
    public function getCustomerIds(): ?array
    {
        return $this->customerIds;
    }

    /**
     * 客户id；若您可以确定当前订单来自对应客户id，则可以上报此字段获得更加精准的归因结果
     * @param int[] $customerIds
     * @return self
     */
    public function setCustomerIds(?array $customerIds): self
    {
        $this->customerIds = $customerIds;
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
        if ($this->advertiserIds !== null) {
            $result['advertiser_ids'] = $this->advertiserIds;
        }
        if ($this->attributed !== null) {
            $result['attributed'] = $this->attributed;
        }
        if ($this->campaignId !== null) {
            $result['campaign_id'] = $this->campaignId;
        }
        if ($this->clickTime !== null) {
            $result['click_time'] = $this->clickTime;
        }
        if ($this->customerIds !== null) {
            $result['customer_ids'] = $this->customerIds;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['ad_id'] ?? null) !== null) {
            $obj->adId = (int) $v;
        }
        if (($v = $data['advertiser_ids'] ?? null) !== null && is_array($v)) {
            $obj->advertiserIds = $v;
        }
        if (($v = $data['attributed'] ?? null) !== null) {
            $obj->attributed = (bool) $v;
        }
        if (($v = $data['campaign_id'] ?? null) !== null) {
            $obj->campaignId = (int) $v;
        }
        if (($v = $data['click_time'] ?? null) !== null) {
            $obj->clickTime = (int) $v;
        }
        if (($v = $data['customer_ids'] ?? null) !== null && is_array($v)) {
            $obj->customerIds = $v;
        }
        return $obj;
    }
}
