<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class YuntuBrandInfoGetV30ResponseData implements \JsonSerializable
{
    /**
     * 云图品牌虚拟 adv_id
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * 行业信息列表，创建人群包及创建人群标签时使用。
     * @var \Oceanengine\Models\YuntuBrandInfoGetV30ResponseDataIndustryInfosInner[]
     */
    protected ?array $industryInfos = null;

    /**
     * 用户名称，创建人群标签时使用。
     * @var string
     */
    protected ?string $userDisplayName = null;

    /**
     * 云图品牌虚拟 adv_id
     * @return int
     */
    public function getAdvertiserId(): ?int
    {
        return $this->advertiserId;
    }

    /**
     * 云图品牌虚拟 adv_id
     * @param int $advertiserId
     * @return self
     */
    public function setAdvertiserId(?int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 行业信息列表，创建人群包及创建人群标签时使用。
     * @return \Oceanengine\Models\YuntuBrandInfoGetV30ResponseDataIndustryInfosInner[]
     */
    public function getIndustryInfos(): ?array
    {
        return $this->industryInfos;
    }

    /**
     * 行业信息列表，创建人群包及创建人群标签时使用。
     * @param \Oceanengine\Models\YuntuBrandInfoGetV30ResponseDataIndustryInfosInner[] $industryInfos
     * @return self
     */
    public function setIndustryInfos(?array $industryInfos): self
    {
        $this->industryInfos = $industryInfos;
        return $this;
    }

    /**
     * 用户名称，创建人群标签时使用。
     * @return string
     */
    public function getUserDisplayName(): ?string
    {
        return $this->userDisplayName;
    }

    /**
     * 用户名称，创建人群标签时使用。
     * @param string $userDisplayName
     * @return self
     */
    public function setUserDisplayName(?string $userDisplayName): self
    {
        $this->userDisplayName = $userDisplayName;
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
        if ($this->industryInfos !== null) {
            $result['industry_infos'] = $this->industryInfos;
        }
        if ($this->userDisplayName !== null) {
            $result['user_display_name'] = $this->userDisplayName;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['industry_infos'] ?? null) !== null && is_array($v)) {
            $obj->industryInfos = array_map(fn ($vv) => \Oceanengine\Models\YuntuBrandInfoGetV30ResponseDataIndustryInfosInner::fromArray($vv), $v);
        }
        if (($v = $data['user_display_name'] ?? null) !== null) {
            $obj->userDisplayName = (string) $v;
        }
        return $obj;
    }
}
