<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AdvertiserDeliveryPkgGetV30ResponseDataDeliveryPkg implements \JsonSerializable
{
    /**
     * 来自【推广产品资质规则配置查询接口】，行业的资质规则中的config_id
     * @var int
     */
    protected ?int $configId = null;

    /**
     * 一级到三级行业id
     * @var int[]
     */
    protected ?array $industryId = null;

    /**
     * 一级到三级行业名称
     * @var string[]
     */
    protected ?array $industryName = null;

    /**
     * @var \Oceanengine\Models\AdvertiserDeliveryPkgGetV30ResponseDataDeliveryPkgNecessaryCombine
     */
    protected ?\Oceanengine\Models\AdvertiserDeliveryPkgGetV30ResponseDataDeliveryPkgNecessaryCombine $necessaryCombine = null;

    /**
     * @var \Oceanengine\Models\AdvertiserDeliveryPkgGetV30ResponseDataDeliveryPkgPermission
     */
    protected ?\Oceanengine\Models\AdvertiserDeliveryPkgGetV30ResponseDataDeliveryPkgPermission $permission = null;

    /**
     * 推广产品组id
     * @var int
     */
    protected ?int $pkgId = null;

    /**
     * 用户提交的推广产品名称
     * @var string
     */
    protected ?string $productName = null;

    /**
     * @var \Oceanengine\Models\AdvertiserDeliveryPkgGetV30DataDeliveryPkgStatus
     */
    protected ?string $status = null;

    /**
     * 选填资质模块
     * @var \Oceanengine\Models\AdvertiserDeliveryPkgGetV30ResponseDataDeliveryPkgUnnecessaryCombinesInner[]
     */
    protected ?array $unnecessaryCombines = null;

    /**
     * 来自【推广产品资质规则配置查询接口】，行业的资质规则中的config_id
     * @return int
     */
    public function getConfigId(): ?int
    {
        return $this->configId;
    }

    /**
     * 来自【推广产品资质规则配置查询接口】，行业的资质规则中的config_id
     * @param int $configId
     * @return self
     */
    public function setConfigId(?int $configId): self
    {
        $this->configId = $configId;
        return $this;
    }

    /**
     * 一级到三级行业id
     * @return int[]
     */
    public function getIndustryId(): ?array
    {
        return $this->industryId;
    }

    /**
     * 一级到三级行业id
     * @param int[] $industryId
     * @return self
     */
    public function setIndustryId(?array $industryId): self
    {
        $this->industryId = $industryId;
        return $this;
    }

    /**
     * 一级到三级行业名称
     * @return string[]
     */
    public function getIndustryName(): ?array
    {
        return $this->industryName;
    }

    /**
     * 一级到三级行业名称
     * @param string[] $industryName
     * @return self
     */
    public function setIndustryName(?array $industryName): self
    {
        $this->industryName = $industryName;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AdvertiserDeliveryPkgGetV30ResponseDataDeliveryPkgNecessaryCombine
     */
    public function getNecessaryCombine(): ?\Oceanengine\Models\AdvertiserDeliveryPkgGetV30ResponseDataDeliveryPkgNecessaryCombine
    {
        return $this->necessaryCombine;
    }

    /**
     * @param \Oceanengine\Models\AdvertiserDeliveryPkgGetV30ResponseDataDeliveryPkgNecessaryCombine $necessaryCombine
     * @return self
     */
    public function setNecessaryCombine(?\Oceanengine\Models\AdvertiserDeliveryPkgGetV30ResponseDataDeliveryPkgNecessaryCombine $necessaryCombine): self
    {
        $this->necessaryCombine = $necessaryCombine;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AdvertiserDeliveryPkgGetV30ResponseDataDeliveryPkgPermission
     */
    public function getPermission(): ?\Oceanengine\Models\AdvertiserDeliveryPkgGetV30ResponseDataDeliveryPkgPermission
    {
        return $this->permission;
    }

    /**
     * @param \Oceanengine\Models\AdvertiserDeliveryPkgGetV30ResponseDataDeliveryPkgPermission $permission
     * @return self
     */
    public function setPermission(?\Oceanengine\Models\AdvertiserDeliveryPkgGetV30ResponseDataDeliveryPkgPermission $permission): self
    {
        $this->permission = $permission;
        return $this;
    }

    /**
     * 推广产品组id
     * @return int
     */
    public function getPkgId(): ?int
    {
        return $this->pkgId;
    }

    /**
     * 推广产品组id
     * @param int $pkgId
     * @return self
     */
    public function setPkgId(?int $pkgId): self
    {
        $this->pkgId = $pkgId;
        return $this;
    }

    /**
     * 用户提交的推广产品名称
     * @return string
     */
    public function getProductName(): ?string
    {
        return $this->productName;
    }

    /**
     * 用户提交的推广产品名称
     * @param string $productName
     * @return self
     */
    public function setProductName(?string $productName): self
    {
        $this->productName = $productName;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AdvertiserDeliveryPkgGetV30DataDeliveryPkgStatus
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param \Oceanengine\Models\AdvertiserDeliveryPkgGetV30DataDeliveryPkgStatus $status
     * @return self
     */
    public function setStatus(?string $status): self
    {
        $this->status = $status;
        return $this;
    }

    /**
     * 选填资质模块
     * @return \Oceanengine\Models\AdvertiserDeliveryPkgGetV30ResponseDataDeliveryPkgUnnecessaryCombinesInner[]
     */
    public function getUnnecessaryCombines(): ?array
    {
        return $this->unnecessaryCombines;
    }

    /**
     * 选填资质模块
     * @param \Oceanengine\Models\AdvertiserDeliveryPkgGetV30ResponseDataDeliveryPkgUnnecessaryCombinesInner[] $unnecessaryCombines
     * @return self
     */
    public function setUnnecessaryCombines(?array $unnecessaryCombines): self
    {
        $this->unnecessaryCombines = $unnecessaryCombines;
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
        if ($this->industryId !== null) {
            $result['industry_id'] = $this->industryId;
        }
        if ($this->industryName !== null) {
            $result['industry_name'] = $this->industryName;
        }
        if ($this->necessaryCombine !== null) {
            $result['necessary_combine'] = $this->necessaryCombine;
        }
        if ($this->permission !== null) {
            $result['permission'] = $this->permission;
        }
        if ($this->pkgId !== null) {
            $result['pkg_id'] = $this->pkgId;
        }
        if ($this->productName !== null) {
            $result['product_name'] = $this->productName;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        if ($this->unnecessaryCombines !== null) {
            $result['unnecessary_combines'] = $this->unnecessaryCombines;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['config_id'] ?? null) !== null) {
            $obj->configId = (int) $v;
        }
        if (($v = $data['industry_id'] ?? null) !== null && is_array($v)) {
            $obj->industryId = $v;
        }
        if (($v = $data['industry_name'] ?? null) !== null && is_array($v)) {
            $obj->industryName = $v;
        }
        if (($v = $data['necessary_combine'] ?? null) !== null && is_array($v)) {
            $obj->necessaryCombine = \Oceanengine\Models\AdvertiserDeliveryPkgGetV30ResponseDataDeliveryPkgNecessaryCombine::fromArray($v);
        }
        if (($v = $data['permission'] ?? null) !== null && is_array($v)) {
            $obj->permission = \Oceanengine\Models\AdvertiserDeliveryPkgGetV30ResponseDataDeliveryPkgPermission::fromArray($v);
        }
        if (($v = $data['pkg_id'] ?? null) !== null) {
            $obj->pkgId = (int) $v;
        }
        if (($v = $data['product_name'] ?? null) !== null) {
            $obj->productName = (string) $v;
        }
        if (($v = $data['status'] ?? null) !== null) {
            $obj->status = (string) $v;
        }
        if (($v = $data['unnecessary_combines'] ?? null) !== null && is_array($v)) {
            $obj->unnecessaryCombines = array_map(fn ($vv) => \Oceanengine\Models\AdvertiserDeliveryPkgGetV30ResponseDataDeliveryPkgUnnecessaryCombinesInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
