<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class YuntuAudienceInfoCreateV30Request implements \JsonSerializable
{
    /**
     * 广告主ID，即品牌虚拟adv_id
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * 运算池列表
     * @var \Oceanengine\Models\YuntuAudienceInfoCreateV30RequestCalculatePoolsInner[]
     */
    protected ?array $calculatePools = null;

    /**
     * 人群包过期日期 YYYY-MM-DD
     * @var string
     */
    protected ?string $expireDate = null;

    /**
     * 人群包名称
     * @var string
     */
    protected ?string $name = null;

    /**
     * 服务商id
     * @var int
     */
    protected ?int $serviceProviderId = null;

    /**
     * @var int
     */
    protected ?int $yuntuBrandId = null;

    /**
     * 广告主ID，即品牌虚拟adv_id
     * @return int
     */
    public function getAdvertiserId(): ?int
    {
        return $this->advertiserId;
    }

    /**
     * 广告主ID，即品牌虚拟adv_id
     * @param int $advertiserId
     * @return self
     */
    public function setAdvertiserId(?int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 运算池列表
     * @return \Oceanengine\Models\YuntuAudienceInfoCreateV30RequestCalculatePoolsInner[]
     */
    public function getCalculatePools(): ?array
    {
        return $this->calculatePools;
    }

    /**
     * 运算池列表
     * @param \Oceanengine\Models\YuntuAudienceInfoCreateV30RequestCalculatePoolsInner[] $calculatePools
     * @return self
     */
    public function setCalculatePools(?array $calculatePools): self
    {
        $this->calculatePools = $calculatePools;
        return $this;
    }

    /**
     * 人群包过期日期 YYYY-MM-DD
     * @return string
     */
    public function getExpireDate(): ?string
    {
        return $this->expireDate;
    }

    /**
     * 人群包过期日期 YYYY-MM-DD
     * @param string $expireDate
     * @return self
     */
    public function setExpireDate(?string $expireDate): self
    {
        $this->expireDate = $expireDate;
        return $this;
    }

    /**
     * 人群包名称
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * 人群包名称
     * @param string $name
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
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
     * @return int
     */
    public function getYuntuBrandId(): ?int
    {
        return $this->yuntuBrandId;
    }

    /**
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
        if ($this->calculatePools !== null) {
            $result['calculate_pools'] = $this->calculatePools;
        }
        if ($this->expireDate !== null) {
            $result['expire_date'] = $this->expireDate;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
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
        if (($v = $data['calculate_pools'] ?? null) !== null && is_array($v)) {
            $obj->calculatePools = array_map(fn ($vv) => \Oceanengine\Models\YuntuAudienceInfoCreateV30RequestCalculatePoolsInner::fromArray($vv), $v);
        }
        if (($v = $data['expire_date'] ?? null) !== null) {
            $obj->expireDate = (string) $v;
        }
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
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
