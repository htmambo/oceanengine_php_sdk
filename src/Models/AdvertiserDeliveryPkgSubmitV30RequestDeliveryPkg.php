<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AdvertiserDeliveryPkgSubmitV30RequestDeliveryPkg implements \JsonSerializable
{
    /**
     * 来自【推广产品资质规则配置查询接口】，行业的资质规则中的config_id
     * @var int
     */
    protected ?int $configId = null;

    /**
     * @var \Oceanengine\Models\AdvertiserDeliveryPkgSubmitV30RequestDeliveryPkgNecessaryCombine
     */
    protected ?\Oceanengine\Models\AdvertiserDeliveryPkgSubmitV30RequestDeliveryPkgNecessaryCombine $necessaryCombine = null;

    /**
     * 推广产品组id ① 针对新增的场景传0即可  ② 提交推广产品资质时系统会返回生成的pkg_id，针对编辑的场景，再此传入对应需要编辑的pkg_id即可
     * @var int
     */
    protected ?int $pkgId = null;

    /**
     * 推广产品资质的产品名称，字符长度1~128
     * @var string
     */
    protected ?string $productName = null;

    /**
     * 选填资质模块，数组长度0~30
     * @var \Oceanengine\Models\AdvertiserDeliveryPkgSubmitV30RequestDeliveryPkgUnnecessaryCombinesInner[]
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
     * @return \Oceanengine\Models\AdvertiserDeliveryPkgSubmitV30RequestDeliveryPkgNecessaryCombine
     */
    public function getNecessaryCombine(): ?\Oceanengine\Models\AdvertiserDeliveryPkgSubmitV30RequestDeliveryPkgNecessaryCombine
    {
        return $this->necessaryCombine;
    }

    /**
     * @param \Oceanengine\Models\AdvertiserDeliveryPkgSubmitV30RequestDeliveryPkgNecessaryCombine $necessaryCombine
     * @return self
     */
    public function setNecessaryCombine(?\Oceanengine\Models\AdvertiserDeliveryPkgSubmitV30RequestDeliveryPkgNecessaryCombine $necessaryCombine): self
    {
        $this->necessaryCombine = $necessaryCombine;
        return $this;
    }

    /**
     * 推广产品组id ① 针对新增的场景传0即可  ② 提交推广产品资质时系统会返回生成的pkg_id，针对编辑的场景，再此传入对应需要编辑的pkg_id即可
     * @return int
     */
    public function getPkgId(): ?int
    {
        return $this->pkgId;
    }

    /**
     * 推广产品组id ① 针对新增的场景传0即可  ② 提交推广产品资质时系统会返回生成的pkg_id，针对编辑的场景，再此传入对应需要编辑的pkg_id即可
     * @param int $pkgId
     * @return self
     */
    public function setPkgId(?int $pkgId): self
    {
        $this->pkgId = $pkgId;
        return $this;
    }

    /**
     * 推广产品资质的产品名称，字符长度1~128
     * @return string
     */
    public function getProductName(): ?string
    {
        return $this->productName;
    }

    /**
     * 推广产品资质的产品名称，字符长度1~128
     * @param string $productName
     * @return self
     */
    public function setProductName(?string $productName): self
    {
        $this->productName = $productName;
        return $this;
    }

    /**
     * 选填资质模块，数组长度0~30
     * @return \Oceanengine\Models\AdvertiserDeliveryPkgSubmitV30RequestDeliveryPkgUnnecessaryCombinesInner[]
     */
    public function getUnnecessaryCombines(): ?array
    {
        return $this->unnecessaryCombines;
    }

    /**
     * 选填资质模块，数组长度0~30
     * @param \Oceanengine\Models\AdvertiserDeliveryPkgSubmitV30RequestDeliveryPkgUnnecessaryCombinesInner[] $unnecessaryCombines
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
        if ($this->necessaryCombine !== null) {
            $result['necessary_combine'] = $this->necessaryCombine;
        }
        if ($this->pkgId !== null) {
            $result['pkg_id'] = $this->pkgId;
        }
        if ($this->productName !== null) {
            $result['product_name'] = $this->productName;
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
        if (($v = $data['necessary_combine'] ?? null) !== null && is_array($v)) {
            $obj->necessaryCombine = \Oceanengine\Models\AdvertiserDeliveryPkgSubmitV30RequestDeliveryPkgNecessaryCombine::fromArray($v);
        }
        if (($v = $data['pkg_id'] ?? null) !== null) {
            $obj->pkgId = (int) $v;
        }
        if (($v = $data['product_name'] ?? null) !== null) {
            $obj->productName = (string) $v;
        }
        if (($v = $data['unnecessary_combines'] ?? null) !== null && is_array($v)) {
            $obj->unnecessaryCombines = array_map(fn ($vv) => \Oceanengine\Models\AdvertiserDeliveryPkgSubmitV30RequestDeliveryPkgUnnecessaryCombinesInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
