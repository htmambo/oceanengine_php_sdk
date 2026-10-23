<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class YuntuAudienceInfoDeleteV30Request implements \JsonSerializable
{
    /**
     * 广告主ID，集品牌虚拟adv_id
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * 人群包ID
     * @var int
     */
    protected ?int $customAudienceId = null;

    /**
     * 服务商id
     * @var int
     */
    protected ?int $serviceProviderId = null;

    /**
     * 品牌id
     * @var int
     */
    protected ?int $yuntuBrandId = null;

    /**
     * 广告主ID，集品牌虚拟adv_id
     * @return int
     */
    public function getAdvertiserId(): ?int
    {
        return $this->advertiserId;
    }

    /**
     * 广告主ID，集品牌虚拟adv_id
     * @param int $advertiserId
     * @return self
     */
    public function setAdvertiserId(?int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 人群包ID
     * @return int
     */
    public function getCustomAudienceId(): ?int
    {
        return $this->customAudienceId;
    }

    /**
     * 人群包ID
     * @param int $customAudienceId
     * @return self
     */
    public function setCustomAudienceId(?int $customAudienceId): self
    {
        $this->customAudienceId = $customAudienceId;
        return $this;
    }

    /**
     * 服务商id
     * @return int
     */
    public function getServiceProviderId(): ?int
    {
        return $this->serviceProviderId;
    }

    /**
     * 服务商id
     * @param int $serviceProviderId
     * @return self
     */
    public function setServiceProviderId(?int $serviceProviderId): self
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * 品牌id
     * @return int
     */
    public function getYuntuBrandId(): ?int
    {
        return $this->yuntuBrandId;
    }

    /**
     * 品牌id
     * @param int $yuntuBrandId
     * @return self
     */
    public function setYuntuBrandId(?int $yuntuBrandId): self
    {
        $this->yuntuBrandId = $yuntuBrandId;
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
        if ($this->customAudienceId !== null) {
            $result['custom_audience_id'] = $this->customAudienceId;
        }
        if ($this->serviceProviderId !== null) {
            $result['service_provider_id'] = $this->serviceProviderId;
        }
        if ($this->yuntuBrandId !== null) {
            $result['yuntu_brand_id'] = $this->yuntuBrandId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['custom_audience_id'] ?? null) !== null) {
            $obj->customAudienceId = (int) $v;
        }
        if (($v = $data['service_provider_id'] ?? null) !== null) {
            $obj->serviceProviderId = (int) $v;
        }
        if (($v = $data['yuntu_brand_id'] ?? null) !== null) {
            $obj->yuntuBrandId = (int) $v;
        }
        return $obj;
    }
}
