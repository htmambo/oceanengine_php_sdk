<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandMaAccountListV30ResponseDataAccountsInner implements \JsonSerializable
{
    /**
     * 广告主ID
     * @var string
     */
    protected ?string $advertiserId = null;

    /**
     * 广告主名称
     * @var string
     */
    protected ?string $advertiserName = null;

    /**
     * 广告主状态：4-正常；其它值都可以当做异常
     * @var int
     */
    protected ?int $advertiserStatus = null;

    /**
     * @var \Oceanengine\Models\BrandMaAccountListV30ResponseDataAccountsInnerDeliveryInfo
     */
    protected ?\Oceanengine\Models\BrandMaAccountListV30ResponseDataAccountsInnerDeliveryInfo $deliveryInfo = null;

    /**
     * 对公验证到期时间（毫秒）。如果当前时间超过这个时间，那就是到期了。
     * @var int
     */
    protected ?int $publicAuthExpireTimestampMs = null;

    /**
     * 广告主ID
     * @return string
     */
    public function getAdvertiserId(): ?string
    {
        return $this->advertiserId;
    }

    /**
     * 广告主ID
     * @param string $advertiserId
     * @return self
     */
    public function setAdvertiserId(?string $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 广告主名称
     * @return string
     */
    public function getAdvertiserName(): ?string
    {
        return $this->advertiserName;
    }

    /**
     * 广告主名称
     * @param string $advertiserName
     * @return self
     */
    public function setAdvertiserName(?string $advertiserName): self
    {
        $this->advertiserName = $advertiserName;
        return $this;
    }

    /**
     * 广告主状态：4-正常；其它值都可以当做异常
     * @return int
     */
    public function getAdvertiserStatus(): ?int
    {
        return $this->advertiserStatus;
    }

    /**
     * 广告主状态：4-正常；其它值都可以当做异常
     * @param int $advertiserStatus
     * @return self
     */
    public function setAdvertiserStatus(?int $advertiserStatus): self
    {
        $this->advertiserStatus = $advertiserStatus;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandMaAccountListV30ResponseDataAccountsInnerDeliveryInfo
     */
    public function getDeliveryInfo(): ?\Oceanengine\Models\BrandMaAccountListV30ResponseDataAccountsInnerDeliveryInfo
    {
        return $this->deliveryInfo;
    }

    /**
     * @param \Oceanengine\Models\BrandMaAccountListV30ResponseDataAccountsInnerDeliveryInfo $deliveryInfo
     * @return self
     */
    public function setDeliveryInfo(?\Oceanengine\Models\BrandMaAccountListV30ResponseDataAccountsInnerDeliveryInfo $deliveryInfo): self
    {
        $this->deliveryInfo = $deliveryInfo;
        return $this;
    }

    /**
     * 对公验证到期时间（毫秒）。如果当前时间超过这个时间，那就是到期了。
     * @return int
     */
    public function getPublicAuthExpireTimestampMs(): ?int
    {
        return $this->publicAuthExpireTimestampMs;
    }

    /**
     * 对公验证到期时间（毫秒）。如果当前时间超过这个时间，那就是到期了。
     * @param int $publicAuthExpireTimestampMs
     * @return self
     */
    public function setPublicAuthExpireTimestampMs(?int $publicAuthExpireTimestampMs): self
    {
        $this->publicAuthExpireTimestampMs = $publicAuthExpireTimestampMs;
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
        if ($this->advertiserStatus !== null) {
            $result['advertiser_status'] = $this->advertiserStatus;
        }
        if ($this->deliveryInfo !== null) {
            $result['delivery_info'] = $this->deliveryInfo;
        }
        if ($this->publicAuthExpireTimestampMs !== null) {
            $result['public_auth_expire_timestamp_ms'] = $this->publicAuthExpireTimestampMs;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (string) $v;
        }
        if (($v = $data['advertiser_name'] ?? null) !== null) {
            $obj->advertiserName = (string) $v;
        }
        if (($v = $data['advertiser_status'] ?? null) !== null) {
            $obj->advertiserStatus = (int) $v;
        }
        if (($v = $data['delivery_info'] ?? null) !== null && is_array($v)) {
            $obj->deliveryInfo = \Oceanengine\Models\BrandMaAccountListV30ResponseDataAccountsInnerDeliveryInfo::fromArray($v);
        }
        if (($v = $data['public_auth_expire_timestamp_ms'] ?? null) !== null) {
            $obj->publicAuthExpireTimestampMs = (int) $v;
        }
        return $obj;
    }
}
