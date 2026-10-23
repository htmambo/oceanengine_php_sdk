<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanOverallAwemeListV10ResponseDataBindAwemeUserInfosInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\QianchuanOverallAwemeListV10ResponseDataBindAwemeUserInfosInnerAllianceInfo
     */
    protected ?\Oceanengine\Models\QianchuanOverallAwemeListV10ResponseDataBindAwemeUserInfosInnerAllianceInfo $allianceInfo = null;

    /**
     * 授权类型
     * @var \Oceanengine\Models\QianchuanOverallAwemeListV10DataBindAwemeUserInfosAuthTypes[]
     */
    protected ?array $authTypes = null;

    /**
     * @var \Oceanengine\Models\QianchuanOverallAwemeListV10ResponseDataBindAwemeUserInfosInnerAwemeUserInfo
     */
    protected ?\Oceanengine\Models\QianchuanOverallAwemeListV10ResponseDataBindAwemeUserInfosInnerAwemeUserInfo $awemeUserInfo = null;

    /**
     * 抖音号是否可申请
     * @var bool
     */
    protected ?bool $canApplyUniprom = null;

    /**
     * 抖音号是否可管理
     * @var bool
     */
    protected ?bool $canControlUniprom = null;

    /**
     * @var \Oceanengine\Models\QianchuanOverallAwemeListV10ResponseDataBindAwemeUserInfosInnerCommissionInfo
     */
    protected ?\Oceanengine\Models\QianchuanOverallAwemeListV10ResponseDataBindAwemeUserInfosInnerCommissionInfo $commissionInfo = null;

    /**
     * 是否有全域授权
     * @var bool
     */
    protected ?bool $hasAuthorized = null;

    /**
     * 是否拥有电商权限
     * @var bool
     */
    protected ?bool $hasShopPermission = null;

    /**
     * 是否是c号
     * @var bool
     */
    protected ?bool $isAwemeC = null;

    /**
     * 商品ROI2是否不可用
     * @var bool
     */
    protected ?bool $isProductUniPromDisabled = null;

    /**
     * @var \Oceanengine\Models\QianchuanOverallAwemeListV10DataBindAwemeUserInfosMultiAwemeUniPromAuthStatus
     */
    protected ?string $multiAwemeUniPromAuthStatus = null;

    /**
     * 商品不可用原因
     * @var \Oceanengine\Models\QianchuanOverallAwemeListV10DataBindAwemeUserInfosProductDisableReasons[]
     */
    protected ?array $productDisableReasons = null;

    /**
     * @var \Oceanengine\Models\QianchuanOverallAwemeListV10ResponseDataBindAwemeUserInfosInnerProductInfo
     */
    protected ?\Oceanengine\Models\QianchuanOverallAwemeListV10ResponseDataBindAwemeUserInfosInnerProductInfo $productInfo = null;

    /**
     * @var \Oceanengine\Models\QianchuanOverallAwemeListV10ResponseDataBindAwemeUserInfosInnerProductUniPromInfo
     */
    protected ?\Oceanengine\Models\QianchuanOverallAwemeListV10ResponseDataBindAwemeUserInfosInnerProductUniPromInfo $productUniPromInfo = null;

    /**
     * @var \Oceanengine\Models\QianchuanOverallAwemeListV10ResponseDataBindAwemeUserInfosInnerProductUniPromLimitInfo
     */
    protected ?\Oceanengine\Models\QianchuanOverallAwemeListV10ResponseDataBindAwemeUserInfosInnerProductUniPromLimitInfo $productUniPromLimitInfo = null;

    /**
     * @return \Oceanengine\Models\QianchuanOverallAwemeListV10ResponseDataBindAwemeUserInfosInnerAllianceInfo
     */
    public function getAllianceInfo(): ?\Oceanengine\Models\QianchuanOverallAwemeListV10ResponseDataBindAwemeUserInfosInnerAllianceInfo
    {
        return $this->allianceInfo;
    }

    /**
     * @param \Oceanengine\Models\QianchuanOverallAwemeListV10ResponseDataBindAwemeUserInfosInnerAllianceInfo $allianceInfo
     * @return self
     */
    public function setAllianceInfo(?\Oceanengine\Models\QianchuanOverallAwemeListV10ResponseDataBindAwemeUserInfosInnerAllianceInfo $allianceInfo): self
    {
        $this->allianceInfo = $allianceInfo;
        return $this;
    }

    /**
     * 授权类型
     * @return \Oceanengine\Models\QianchuanOverallAwemeListV10DataBindAwemeUserInfosAuthTypes[]
     */
    public function getAuthTypes(): ?array
    {
        return $this->authTypes;
    }

    /**
     * 授权类型
     * @param \Oceanengine\Models\QianchuanOverallAwemeListV10DataBindAwemeUserInfosAuthTypes[] $authTypes
     * @return self
     */
    public function setAuthTypes(?array $authTypes): self
    {
        $this->authTypes = $authTypes;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanOverallAwemeListV10ResponseDataBindAwemeUserInfosInnerAwemeUserInfo
     */
    public function getAwemeUserInfo(): ?\Oceanengine\Models\QianchuanOverallAwemeListV10ResponseDataBindAwemeUserInfosInnerAwemeUserInfo
    {
        return $this->awemeUserInfo;
    }

    /**
     * @param \Oceanengine\Models\QianchuanOverallAwemeListV10ResponseDataBindAwemeUserInfosInnerAwemeUserInfo $awemeUserInfo
     * @return self
     */
    public function setAwemeUserInfo(?\Oceanengine\Models\QianchuanOverallAwemeListV10ResponseDataBindAwemeUserInfosInnerAwemeUserInfo $awemeUserInfo): self
    {
        $this->awemeUserInfo = $awemeUserInfo;
        return $this;
    }

    /**
     * 抖音号是否可申请
     * @return bool
     */
    public function getCanApplyUniprom(): ?bool
    {
        return $this->canApplyUniprom;
    }

    /**
     * 抖音号是否可申请
     * @param bool $canApplyUniprom
     * @return self
     */
    public function setCanApplyUniprom(?bool $canApplyUniprom): self
    {
        $this->canApplyUniprom = $canApplyUniprom;
        return $this;
    }

    /**
     * 抖音号是否可管理
     * @return bool
     */
    public function getCanControlUniprom(): ?bool
    {
        return $this->canControlUniprom;
    }

    /**
     * 抖音号是否可管理
     * @param bool $canControlUniprom
     * @return self
     */
    public function setCanControlUniprom(?bool $canControlUniprom): self
    {
        $this->canControlUniprom = $canControlUniprom;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanOverallAwemeListV10ResponseDataBindAwemeUserInfosInnerCommissionInfo
     */
    public function getCommissionInfo(): ?\Oceanengine\Models\QianchuanOverallAwemeListV10ResponseDataBindAwemeUserInfosInnerCommissionInfo
    {
        return $this->commissionInfo;
    }

    /**
     * @param \Oceanengine\Models\QianchuanOverallAwemeListV10ResponseDataBindAwemeUserInfosInnerCommissionInfo $commissionInfo
     * @return self
     */
    public function setCommissionInfo(?\Oceanengine\Models\QianchuanOverallAwemeListV10ResponseDataBindAwemeUserInfosInnerCommissionInfo $commissionInfo): self
    {
        $this->commissionInfo = $commissionInfo;
        return $this;
    }

    /**
     * 是否有全域授权
     * @return bool
     */
    public function getHasAuthorized(): ?bool
    {
        return $this->hasAuthorized;
    }

    /**
     * 是否有全域授权
     * @param bool $hasAuthorized
     * @return self
     */
    public function setHasAuthorized(?bool $hasAuthorized): self
    {
        $this->hasAuthorized = $hasAuthorized;
        return $this;
    }

    /**
     * 是否拥有电商权限
     * @return bool
     */
    public function getHasShopPermission(): ?bool
    {
        return $this->hasShopPermission;
    }

    /**
     * 是否拥有电商权限
     * @param bool $hasShopPermission
     * @return self
     */
    public function setHasShopPermission(?bool $hasShopPermission): self
    {
        $this->hasShopPermission = $hasShopPermission;
        return $this;
    }

    /**
     * 是否是c号
     * @return bool
     */
    public function getIsAwemeC(): ?bool
    {
        return $this->isAwemeC;
    }

    /**
     * 是否是c号
     * @param bool $isAwemeC
     * @return self
     */
    public function setIsAwemeC(?bool $isAwemeC): self
    {
        $this->isAwemeC = $isAwemeC;
        return $this;
    }

    /**
     * 商品ROI2是否不可用
     * @return bool
     */
    public function getIsProductUniPromDisabled(): ?bool
    {
        return $this->isProductUniPromDisabled;
    }

    /**
     * 商品ROI2是否不可用
     * @param bool $isProductUniPromDisabled
     * @return self
     */
    public function setIsProductUniPromDisabled(?bool $isProductUniPromDisabled): self
    {
        $this->isProductUniPromDisabled = $isProductUniPromDisabled;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanOverallAwemeListV10DataBindAwemeUserInfosMultiAwemeUniPromAuthStatus
     */
    public function getMultiAwemeUniPromAuthStatus(): ?string
    {
        return $this->multiAwemeUniPromAuthStatus;
    }

    /**
     * @param \Oceanengine\Models\QianchuanOverallAwemeListV10DataBindAwemeUserInfosMultiAwemeUniPromAuthStatus $multiAwemeUniPromAuthStatus
     * @return self
     */
    public function setMultiAwemeUniPromAuthStatus(?string $multiAwemeUniPromAuthStatus): self
    {
        $this->multiAwemeUniPromAuthStatus = $multiAwemeUniPromAuthStatus;
        return $this;
    }

    /**
     * 商品不可用原因
     * @return \Oceanengine\Models\QianchuanOverallAwemeListV10DataBindAwemeUserInfosProductDisableReasons[]
     */
    public function getProductDisableReasons(): ?array
    {
        return $this->productDisableReasons;
    }

    /**
     * 商品不可用原因
     * @param \Oceanengine\Models\QianchuanOverallAwemeListV10DataBindAwemeUserInfosProductDisableReasons[] $productDisableReasons
     * @return self
     */
    public function setProductDisableReasons(?array $productDisableReasons): self
    {
        $this->productDisableReasons = $productDisableReasons;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanOverallAwemeListV10ResponseDataBindAwemeUserInfosInnerProductInfo
     */
    public function getProductInfo(): ?\Oceanengine\Models\QianchuanOverallAwemeListV10ResponseDataBindAwemeUserInfosInnerProductInfo
    {
        return $this->productInfo;
    }

    /**
     * @param \Oceanengine\Models\QianchuanOverallAwemeListV10ResponseDataBindAwemeUserInfosInnerProductInfo $productInfo
     * @return self
     */
    public function setProductInfo(?\Oceanengine\Models\QianchuanOverallAwemeListV10ResponseDataBindAwemeUserInfosInnerProductInfo $productInfo): self
    {
        $this->productInfo = $productInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanOverallAwemeListV10ResponseDataBindAwemeUserInfosInnerProductUniPromInfo
     */
    public function getProductUniPromInfo(): ?\Oceanengine\Models\QianchuanOverallAwemeListV10ResponseDataBindAwemeUserInfosInnerProductUniPromInfo
    {
        return $this->productUniPromInfo;
    }

    /**
     * @param \Oceanengine\Models\QianchuanOverallAwemeListV10ResponseDataBindAwemeUserInfosInnerProductUniPromInfo $productUniPromInfo
     * @return self
     */
    public function setProductUniPromInfo(?\Oceanengine\Models\QianchuanOverallAwemeListV10ResponseDataBindAwemeUserInfosInnerProductUniPromInfo $productUniPromInfo): self
    {
        $this->productUniPromInfo = $productUniPromInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanOverallAwemeListV10ResponseDataBindAwemeUserInfosInnerProductUniPromLimitInfo
     */
    public function getProductUniPromLimitInfo(): ?\Oceanengine\Models\QianchuanOverallAwemeListV10ResponseDataBindAwemeUserInfosInnerProductUniPromLimitInfo
    {
        return $this->productUniPromLimitInfo;
    }

    /**
     * @param \Oceanengine\Models\QianchuanOverallAwemeListV10ResponseDataBindAwemeUserInfosInnerProductUniPromLimitInfo $productUniPromLimitInfo
     * @return self
     */
    public function setProductUniPromLimitInfo(?\Oceanengine\Models\QianchuanOverallAwemeListV10ResponseDataBindAwemeUserInfosInnerProductUniPromLimitInfo $productUniPromLimitInfo): self
    {
        $this->productUniPromLimitInfo = $productUniPromLimitInfo;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->allianceInfo !== null) {
            $result['alliance_info'] = $this->allianceInfo;
        }
        if ($this->authTypes !== null) {
            $result['auth_types'] = $this->authTypes;
        }
        if ($this->awemeUserInfo !== null) {
            $result['aweme_user_info'] = $this->awemeUserInfo;
        }
        if ($this->canApplyUniprom !== null) {
            $result['can_apply_uniprom'] = $this->canApplyUniprom;
        }
        if ($this->canControlUniprom !== null) {
            $result['can_control_uniprom'] = $this->canControlUniprom;
        }
        if ($this->commissionInfo !== null) {
            $result['commission_info'] = $this->commissionInfo;
        }
        if ($this->hasAuthorized !== null) {
            $result['has_authorized'] = $this->hasAuthorized;
        }
        if ($this->hasShopPermission !== null) {
            $result['has_shop_permission'] = $this->hasShopPermission;
        }
        if ($this->isAwemeC !== null) {
            $result['is_aweme_c'] = $this->isAwemeC;
        }
        if ($this->isProductUniPromDisabled !== null) {
            $result['is_product_uni_prom_disabled'] = $this->isProductUniPromDisabled;
        }
        if ($this->multiAwemeUniPromAuthStatus !== null) {
            $result['multi_aweme_uni_prom_auth_status'] = $this->multiAwemeUniPromAuthStatus;
        }
        if ($this->productDisableReasons !== null) {
            $result['product_disable_reasons'] = $this->productDisableReasons;
        }
        if ($this->productInfo !== null) {
            $result['product_info'] = $this->productInfo;
        }
        if ($this->productUniPromInfo !== null) {
            $result['product_uni_prom_info'] = $this->productUniPromInfo;
        }
        if ($this->productUniPromLimitInfo !== null) {
            $result['product_uni_prom_limit_info'] = $this->productUniPromLimitInfo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['alliance_info'] ?? null) !== null && is_array($v)) {
            $obj->allianceInfo = \Oceanengine\Models\QianchuanOverallAwemeListV10ResponseDataBindAwemeUserInfosInnerAllianceInfo::fromArray($v);
        }
        if (($v = $data['auth_types'] ?? null) !== null && is_array($v)) {
            $obj->authTypes = $v;
        }
        if (($v = $data['aweme_user_info'] ?? null) !== null && is_array($v)) {
            $obj->awemeUserInfo = \Oceanengine\Models\QianchuanOverallAwemeListV10ResponseDataBindAwemeUserInfosInnerAwemeUserInfo::fromArray($v);
        }
        if (($v = $data['can_apply_uniprom'] ?? null) !== null) {
            $obj->canApplyUniprom = (bool) $v;
        }
        if (($v = $data['can_control_uniprom'] ?? null) !== null) {
            $obj->canControlUniprom = (bool) $v;
        }
        if (($v = $data['commission_info'] ?? null) !== null && is_array($v)) {
            $obj->commissionInfo = \Oceanengine\Models\QianchuanOverallAwemeListV10ResponseDataBindAwemeUserInfosInnerCommissionInfo::fromArray($v);
        }
        if (($v = $data['has_authorized'] ?? null) !== null) {
            $obj->hasAuthorized = (bool) $v;
        }
        if (($v = $data['has_shop_permission'] ?? null) !== null) {
            $obj->hasShopPermission = (bool) $v;
        }
        if (($v = $data['is_aweme_c'] ?? null) !== null) {
            $obj->isAwemeC = (bool) $v;
        }
        if (($v = $data['is_product_uni_prom_disabled'] ?? null) !== null) {
            $obj->isProductUniPromDisabled = (bool) $v;
        }
        if (($v = $data['multi_aweme_uni_prom_auth_status'] ?? null) !== null) {
            $obj->multiAwemeUniPromAuthStatus = (string) $v;
        }
        if (($v = $data['product_disable_reasons'] ?? null) !== null && is_array($v)) {
            $obj->productDisableReasons = $v;
        }
        if (($v = $data['product_info'] ?? null) !== null && is_array($v)) {
            $obj->productInfo = \Oceanengine\Models\QianchuanOverallAwemeListV10ResponseDataBindAwemeUserInfosInnerProductInfo::fromArray($v);
        }
        if (($v = $data['product_uni_prom_info'] ?? null) !== null && is_array($v)) {
            $obj->productUniPromInfo = \Oceanengine\Models\QianchuanOverallAwemeListV10ResponseDataBindAwemeUserInfosInnerProductUniPromInfo::fromArray($v);
        }
        if (($v = $data['product_uni_prom_limit_info'] ?? null) !== null && is_array($v)) {
            $obj->productUniPromLimitInfo = \Oceanengine\Models\QianchuanOverallAwemeListV10ResponseDataBindAwemeUserInfosInnerProductUniPromLimitInfo::fromArray($v);
        }
        return $obj;
    }
}
