<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class YuntuAudienceLabelCreateV30Request implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\YuntuAudienceLabelCreateV30RequestCalculateRule
     */
    protected ?\Oceanengine\Models\YuntuAudienceLabelCreateV30RequestCalculateRule $calculateRule = null;

    /**
     * @var \Oceanengine\Models\YuntuAudienceLabelCreateV30DataSource
     */
    protected ?string $dataSource = null;

    /**
     * 标签描述。非必填，若选择传入，则字符数上限为100。
     * @var string
     */
    protected ?string $description = null;

    /**
     * 行业ID，需传入当前用户在当前品牌下拥有权限的、数值最小的行业ID。行业信息及行业ID可通过“品牌元信息”接口获取。
     * @var int
     */
    protected ?int $industryId = null;

    /**
     * 标签名称，需要创建的人群标签名称。标签名称不能为纯数字，字符长度上限为20，名称前后不能存在空格。
     * @var string
     */
    protected ?string $name = null;

    /**
     * 服务商id
     * @var int
     */
    protected ?int $serviceProviderId = null;

    /**
     * 当前用户名称，可通过“品牌元信息”接口获取。
     * @var string
     */
    protected ?string $userDisplayName = null;

    /**
     * @var \Oceanengine\Models\YuntuAudienceLabelCreateV30ValidDay
     */
    protected ?string $validDay = null;

    /**
     * 品牌id
     * @var int
     */
    protected ?int $yuntuBrandId = null;

    /**
     * @return \Oceanengine\Models\YuntuAudienceLabelCreateV30RequestCalculateRule
     */
    public function getCalculateRule(): ?\Oceanengine\Models\YuntuAudienceLabelCreateV30RequestCalculateRule
    {
        return $this->calculateRule;
    }

    /**
     * @param \Oceanengine\Models\YuntuAudienceLabelCreateV30RequestCalculateRule $calculateRule
     * @return self
     */
    public function setCalculateRule(?\Oceanengine\Models\YuntuAudienceLabelCreateV30RequestCalculateRule $calculateRule): self
    {
        $this->calculateRule = $calculateRule;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\YuntuAudienceLabelCreateV30DataSource
     */
    public function getDataSource(): ?string
    {
        return $this->dataSource;
    }

    /**
     * @param \Oceanengine\Models\YuntuAudienceLabelCreateV30DataSource $dataSource
     * @return self
     */
    public function setDataSource(?string $dataSource): self
    {
        $this->dataSource = $dataSource;
        return $this;
    }

    /**
     * 标签描述。非必填，若选择传入，则字符数上限为100。
     * @return string
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * 标签描述。非必填，若选择传入，则字符数上限为100。
     * @param string $description
     * @return self
     */
    public function setDescription(?string $description): self
    {
        $this->description = $description;
        return $this;
    }

    /**
     * 行业ID，需传入当前用户在当前品牌下拥有权限的、数值最小的行业ID。行业信息及行业ID可通过“品牌元信息”接口获取。
     * @return int
     */
    public function getIndustryId(): ?int
    {
        return $this->industryId;
    }

    /**
     * 行业ID，需传入当前用户在当前品牌下拥有权限的、数值最小的行业ID。行业信息及行业ID可通过“品牌元信息”接口获取。
     * @param int $industryId
     * @return self
     */
    public function setIndustryId(?int $industryId): self
    {
        $this->industryId = $industryId;
        return $this;
    }

    /**
     * 标签名称，需要创建的人群标签名称。标签名称不能为纯数字，字符长度上限为20，名称前后不能存在空格。
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * 标签名称，需要创建的人群标签名称。标签名称不能为纯数字，字符长度上限为20，名称前后不能存在空格。
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
     * 当前用户名称，可通过“品牌元信息”接口获取。
     * @return string
     */
    public function getUserDisplayName(): ?string
    {
        return $this->userDisplayName;
    }

    /**
     * 当前用户名称，可通过“品牌元信息”接口获取。
     * @param string $userDisplayName
     * @return self
     */
    public function setUserDisplayName(?string $userDisplayName): self
    {
        $this->userDisplayName = $userDisplayName;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\YuntuAudienceLabelCreateV30ValidDay
     */
    public function getValidDay(): ?string
    {
        return $this->validDay;
    }

    /**
     * @param \Oceanengine\Models\YuntuAudienceLabelCreateV30ValidDay $validDay
     * @return self
     */
    public function setValidDay(?string $validDay): self
    {
        $this->validDay = $validDay;
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
        if ($this->calculateRule !== null) {
            $result['calculate_rule'] = $this->calculateRule;
        }
        if ($this->dataSource !== null) {
            $result['data_source'] = $this->dataSource;
        }
        if ($this->description !== null) {
            $result['description'] = $this->description;
        }
        if ($this->industryId !== null) {
            $result['industry_id'] = $this->industryId;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->serviceProviderId !== null) {
            $result['service_provider_id'] = $this->serviceProviderId;
        }
        if ($this->userDisplayName !== null) {
            $result['user_display_name'] = $this->userDisplayName;
        }
        if ($this->validDay !== null) {
            $result['valid_day'] = $this->validDay;
        }
        if ($this->yuntuBrandId !== null) {
            $result['yuntu_brand_id'] = $this->yuntuBrandId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['calculate_rule'] ?? null) !== null && is_array($v)) {
            $obj->calculateRule = \Oceanengine\Models\YuntuAudienceLabelCreateV30RequestCalculateRule::fromArray($v);
        }
        if (($v = $data['data_source'] ?? null) !== null) {
            $obj->dataSource = (string) $v;
        }
        if (($v = $data['description'] ?? null) !== null) {
            $obj->description = (string) $v;
        }
        if (($v = $data['industry_id'] ?? null) !== null) {
            $obj->industryId = (int) $v;
        }
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        if (($v = $data['service_provider_id'] ?? null) !== null) {
            $obj->serviceProviderId = (int) $v;
        }
        if (($v = $data['user_display_name'] ?? null) !== null) {
            $obj->userDisplayName = (string) $v;
        }
        if (($v = $data['valid_day'] ?? null) !== null) {
            $obj->validDay = (string) $v;
        }
        if (($v = $data['yuntu_brand_id'] ?? null) !== null) {
            $obj->yuntuBrandId = (int) $v;
        }
        return $obj;
    }
}
