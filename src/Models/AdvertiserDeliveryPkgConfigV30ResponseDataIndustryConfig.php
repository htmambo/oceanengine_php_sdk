<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AdvertiserDeliveryPkgConfigV30ResponseDataIndustryConfig implements \JsonSerializable
{
    /**
     * 资质规则id
     * @var int
     */
    protected ?int $configId = null;

    /**
     * 第一级到第三级行业id
     * @var int[]
     */
    protected ?array $industryIds = null;

    /**
     * 第一级到第三级行业名称
     * @var string[]
     */
    protected ?array $industryNames = null;

    /**
     * @var \Oceanengine\Models\AdvertiserDeliveryPkgConfigV30DataIndustryConfigIndustryStatus
     */
    protected ?string $industryStatus = null;

    /**
     * 必填资质模块配置
     * @var \Oceanengine\Models\AdvertiserDeliveryPkgConfigV30ResponseDataIndustryConfigNecessariesInner[]
     */
    protected ?array $necessaries = null;

    /**
     * 选填资质模块配置
     * @var \Oceanengine\Models\AdvertiserDeliveryPkgConfigV30ResponseDataIndustryConfigUnnecessariesInner[]
     */
    protected ?array $unnecessaries = null;

    /**
     * 资质规则id
     * @return int
     */
    public function getConfigId(): ?int
    {
        return $this->configId;
    }

    /**
     * 资质规则id
     * @param int $configId
     * @return self
     */
    public function setConfigId(?int $configId): self
    {
        $this->configId = $configId;
        return $this;
    }

    /**
     * 第一级到第三级行业id
     * @return int[]
     */
    public function getIndustryIds(): ?array
    {
        return $this->industryIds;
    }

    /**
     * 第一级到第三级行业id
     * @param int[] $industryIds
     * @return self
     */
    public function setIndustryIds(?array $industryIds): self
    {
        $this->industryIds = $industryIds;
        return $this;
    }

    /**
     * 第一级到第三级行业名称
     * @return string[]
     */
    public function getIndustryNames(): ?array
    {
        return $this->industryNames;
    }

    /**
     * 第一级到第三级行业名称
     * @param string[] $industryNames
     * @return self
     */
    public function setIndustryNames(?array $industryNames): self
    {
        $this->industryNames = $industryNames;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AdvertiserDeliveryPkgConfigV30DataIndustryConfigIndustryStatus
     */
    public function getIndustryStatus(): ?string
    {
        return $this->industryStatus;
    }

    /**
     * @param \Oceanengine\Models\AdvertiserDeliveryPkgConfigV30DataIndustryConfigIndustryStatus $industryStatus
     * @return self
     */
    public function setIndustryStatus(?string $industryStatus): self
    {
        $this->industryStatus = $industryStatus;
        return $this;
    }

    /**
     * 必填资质模块配置
     * @return \Oceanengine\Models\AdvertiserDeliveryPkgConfigV30ResponseDataIndustryConfigNecessariesInner[]
     */
    public function getNecessaries(): ?array
    {
        return $this->necessaries;
    }

    /**
     * 必填资质模块配置
     * @param \Oceanengine\Models\AdvertiserDeliveryPkgConfigV30ResponseDataIndustryConfigNecessariesInner[] $necessaries
     * @return self
     */
    public function setNecessaries(?array $necessaries): self
    {
        $this->necessaries = $necessaries;
        return $this;
    }

    /**
     * 选填资质模块配置
     * @return \Oceanengine\Models\AdvertiserDeliveryPkgConfigV30ResponseDataIndustryConfigUnnecessariesInner[]
     */
    public function getUnnecessaries(): ?array
    {
        return $this->unnecessaries;
    }

    /**
     * 选填资质模块配置
     * @param \Oceanengine\Models\AdvertiserDeliveryPkgConfigV30ResponseDataIndustryConfigUnnecessariesInner[] $unnecessaries
     * @return self
     */
    public function setUnnecessaries(?array $unnecessaries): self
    {
        $this->unnecessaries = $unnecessaries;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->configId !== null) {
            $result['config_id'] = $this->configId;
        }
        if ($this->industryIds !== null) {
            $result['industry_ids'] = $this->industryIds;
        }
        if ($this->industryNames !== null) {
            $result['industry_names'] = $this->industryNames;
        }
        if ($this->industryStatus !== null) {
            $result['industry_status'] = $this->industryStatus;
        }
        if ($this->necessaries !== null) {
            $result['necessaries'] = $this->necessaries;
        }
        if ($this->unnecessaries !== null) {
            $result['unnecessaries'] = $this->unnecessaries;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['config_id'] ?? null) !== null) {
            $obj->configId = (int) $v;
        }
        if (($v = $data['industry_ids'] ?? null) !== null && is_array($v)) {
            $obj->industryIds = $v;
        }
        if (($v = $data['industry_names'] ?? null) !== null && is_array($v)) {
            $obj->industryNames = $v;
        }
        if (($v = $data['industry_status'] ?? null) !== null) {
            $obj->industryStatus = (string) $v;
        }
        if (($v = $data['necessaries'] ?? null) !== null && is_array($v)) {
            $obj->necessaries = array_map(fn ($vv) => \Oceanengine\Models\AdvertiserDeliveryPkgConfigV30ResponseDataIndustryConfigNecessariesInner::fromArray($vv), $v);
        }
        if (($v = $data['unnecessaries'] ?? null) !== null && is_array($v)) {
            $obj->unnecessaries = array_map(fn ($vv) => \Oceanengine\Models\AdvertiserDeliveryPkgConfigV30ResponseDataIndustryConfigUnnecessariesInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
