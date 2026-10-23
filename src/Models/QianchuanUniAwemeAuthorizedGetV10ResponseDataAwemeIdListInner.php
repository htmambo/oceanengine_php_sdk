<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanUniAwemeAuthorizedGetV10ResponseDataAwemeIdListInner implements \JsonSerializable
{
    /**
     * @var bool
     */
    protected ?bool $anchorForbidden = null;

    /**
     * @var \Oceanengine\Models\QianchuanUniAwemeAuthorizedGetV10DataAwemeIdListAuthType[]
     */
    protected ?array $authType = null;

    /**
     * @var string
     */
    protected ?string $awemeAvatar = null;

    /**
     * @var int
     */
    protected ?int $awemeId = null;

    /**
     * @var string
     */
    protected ?string $awemeName = null;

    /**
     * @var string
     */
    protected ?string $awemeShowId = null;

    /**
     * @var bool
     */
    protected ?bool $canApplyUniprom = null;

    /**
     * @var bool
     */
    protected ?bool $canControlUniprom = null;

    /**
     * @var bool
     */
    protected ?bool $hasAuthorized = null;

    /**
     * @var bool
     */
    protected ?bool $hasLivePermission = null;

    /**
     * @var bool
     */
    protected ?bool $hasRoi2DeliveryLimit = null;

    /**
     * @var bool
     */
    protected ?bool $hasRoi2GroupCreated = null;

    /**
     * @var bool
     */
    protected ?bool $hasShopPermission = null;

    /**
     * @var bool
     */
    protected ?bool $isAllowMall = null;

    /**
     * 是否抖音c号
     * @var bool
     */
    protected ?bool $isAwemeC = null;

    /**
     * @var bool
     */
    protected ?bool $isLiveUniPromDisabled = null;

    /**
     * @var bool
     */
    protected ?bool $isProductUniPromDisabled = null;

    /**
     * @var \Oceanengine\Models\QianchuanUniAwemeAuthorizedGetV10DataAwemeIdListLiveDisableReasons[]
     */
    protected ?array $liveDisableReasons = null;

    /**
     * @var \Oceanengine\Models\QianchuanUniAwemeAuthorizedGetV10DataAwemeIdListLiveUniPromApplyType
     */
    protected ?string $liveUniPromApplyType = null;

    /**
     * @var \Oceanengine\Models\QianchuanUniAwemeAuthorizedGetV10DataAwemeIdListProductDisableReasons[]
     */
    protected ?array $productDisableReasons = null;

    /**
     * @var \Oceanengine\Models\QianchuanUniAwemeAuthorizedGetV10DataAwemeIdListProductUniPromApplyType
     */
    protected ?string $productUniPromApplyType = null;

    /**
     * @return bool
     */
    public function getAnchorForbidden(): ?bool
    {
        return $this->anchorForbidden;
    }

    /**
     * @param bool $anchorForbidden
     * @return self
     */
    public function setAnchorForbidden(?bool $anchorForbidden): self
    {
        $this->anchorForbidden = $anchorForbidden;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanUniAwemeAuthorizedGetV10DataAwemeIdListAuthType[]
     */
    public function getAuthType(): ?array
    {
        return $this->authType;
    }

    /**
     * @param \Oceanengine\Models\QianchuanUniAwemeAuthorizedGetV10DataAwemeIdListAuthType[] $authType
     * @return self
     */
    public function setAuthType(?array $authType): self
    {
        $this->authType = $authType;
        return $this;
    }

    /**
     * @return string
     */
    public function getAwemeAvatar(): ?string
    {
        return $this->awemeAvatar;
    }

    /**
     * @param string $awemeAvatar
     * @return self
     */
    public function setAwemeAvatar(?string $awemeAvatar): self
    {
        $this->awemeAvatar = $awemeAvatar;
        return $this;
    }

    /**
     * @return int
     */
    public function getAwemeId(): ?int
    {
        return $this->awemeId;
    }

    /**
     * @param int $awemeId
     * @return self
     */
    public function setAwemeId(?int $awemeId): self
    {
        $this->awemeId = $awemeId;
        return $this;
    }

    /**
     * @return string
     */
    public function getAwemeName(): ?string
    {
        return $this->awemeName;
    }

    /**
     * @param string $awemeName
     * @return self
     */
    public function setAwemeName(?string $awemeName): self
    {
        $this->awemeName = $awemeName;
        return $this;
    }

    /**
     * @return string
     */
    public function getAwemeShowId(): ?string
    {
        return $this->awemeShowId;
    }

    /**
     * @param string $awemeShowId
     * @return self
     */
    public function setAwemeShowId(?string $awemeShowId): self
    {
        $this->awemeShowId = $awemeShowId;
        return $this;
    }

    /**
     * @return bool
     */
    public function getCanApplyUniprom(): ?bool
    {
        return $this->canApplyUniprom;
    }

    /**
     * @param bool $canApplyUniprom
     * @return self
     */
    public function setCanApplyUniprom(?bool $canApplyUniprom): self
    {
        $this->canApplyUniprom = $canApplyUniprom;
        return $this;
    }

    /**
     * @return bool
     */
    public function getCanControlUniprom(): ?bool
    {
        return $this->canControlUniprom;
    }

    /**
     * @param bool $canControlUniprom
     * @return self
     */
    public function setCanControlUniprom(?bool $canControlUniprom): self
    {
        $this->canControlUniprom = $canControlUniprom;
        return $this;
    }

    /**
     * @return bool
     */
    public function getHasAuthorized(): ?bool
    {
        return $this->hasAuthorized;
    }

    /**
     * @param bool $hasAuthorized
     * @return self
     */
    public function setHasAuthorized(?bool $hasAuthorized): self
    {
        $this->hasAuthorized = $hasAuthorized;
        return $this;
    }

    /**
     * @return bool
     */
    public function getHasLivePermission(): ?bool
    {
        return $this->hasLivePermission;
    }

    /**
     * @param bool $hasLivePermission
     * @return self
     */
    public function setHasLivePermission(?bool $hasLivePermission): self
    {
        $this->hasLivePermission = $hasLivePermission;
        return $this;
    }

    /**
     * @return bool
     */
    public function getHasRoi2DeliveryLimit(): ?bool
    {
        return $this->hasRoi2DeliveryLimit;
    }

    /**
     * @param bool $hasRoi2DeliveryLimit
     * @return self
     */
    public function setHasRoi2DeliveryLimit(?bool $hasRoi2DeliveryLimit): self
    {
        $this->hasRoi2DeliveryLimit = $hasRoi2DeliveryLimit;
        return $this;
    }

    /**
     * @return bool
     */
    public function getHasRoi2GroupCreated(): ?bool
    {
        return $this->hasRoi2GroupCreated;
    }

    /**
     * @param bool $hasRoi2GroupCreated
     * @return self
     */
    public function setHasRoi2GroupCreated(?bool $hasRoi2GroupCreated): self
    {
        $this->hasRoi2GroupCreated = $hasRoi2GroupCreated;
        return $this;
    }

    /**
     * @return bool
     */
    public function getHasShopPermission(): ?bool
    {
        return $this->hasShopPermission;
    }

    /**
     * @param bool $hasShopPermission
     * @return self
     */
    public function setHasShopPermission(?bool $hasShopPermission): self
    {
        $this->hasShopPermission = $hasShopPermission;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsAllowMall(): ?bool
    {
        return $this->isAllowMall;
    }

    /**
     * @param bool $isAllowMall
     * @return self
     */
    public function setIsAllowMall(?bool $isAllowMall): self
    {
        $this->isAllowMall = $isAllowMall;
        return $this;
    }

    /**
     * 是否抖音c号
     * @return bool
     */
    public function getIsAwemeC(): ?bool
    {
        return $this->isAwemeC;
    }

    /**
     * 是否抖音c号
     * @param bool $isAwemeC
     * @return self
     */
    public function setIsAwemeC(?bool $isAwemeC): self
    {
        $this->isAwemeC = $isAwemeC;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsLiveUniPromDisabled(): ?bool
    {
        return $this->isLiveUniPromDisabled;
    }

    /**
     * @param bool $isLiveUniPromDisabled
     * @return self
     */
    public function setIsLiveUniPromDisabled(?bool $isLiveUniPromDisabled): self
    {
        $this->isLiveUniPromDisabled = $isLiveUniPromDisabled;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsProductUniPromDisabled(): ?bool
    {
        return $this->isProductUniPromDisabled;
    }

    /**
     * @param bool $isProductUniPromDisabled
     * @return self
     */
    public function setIsProductUniPromDisabled(?bool $isProductUniPromDisabled): self
    {
        $this->isProductUniPromDisabled = $isProductUniPromDisabled;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanUniAwemeAuthorizedGetV10DataAwemeIdListLiveDisableReasons[]
     */
    public function getLiveDisableReasons(): ?array
    {
        return $this->liveDisableReasons;
    }

    /**
     * @param \Oceanengine\Models\QianchuanUniAwemeAuthorizedGetV10DataAwemeIdListLiveDisableReasons[] $liveDisableReasons
     * @return self
     */
    public function setLiveDisableReasons(?array $liveDisableReasons): self
    {
        $this->liveDisableReasons = $liveDisableReasons;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanUniAwemeAuthorizedGetV10DataAwemeIdListLiveUniPromApplyType
     */
    public function getLiveUniPromApplyType(): ?string
    {
        return $this->liveUniPromApplyType;
    }

    /**
     * @param \Oceanengine\Models\QianchuanUniAwemeAuthorizedGetV10DataAwemeIdListLiveUniPromApplyType $liveUniPromApplyType
     * @return self
     */
    public function setLiveUniPromApplyType(?string $liveUniPromApplyType): self
    {
        $this->liveUniPromApplyType = $liveUniPromApplyType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanUniAwemeAuthorizedGetV10DataAwemeIdListProductDisableReasons[]
     */
    public function getProductDisableReasons(): ?array
    {
        return $this->productDisableReasons;
    }

    /**
     * @param \Oceanengine\Models\QianchuanUniAwemeAuthorizedGetV10DataAwemeIdListProductDisableReasons[] $productDisableReasons
     * @return self
     */
    public function setProductDisableReasons(?array $productDisableReasons): self
    {
        $this->productDisableReasons = $productDisableReasons;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanUniAwemeAuthorizedGetV10DataAwemeIdListProductUniPromApplyType
     */
    public function getProductUniPromApplyType(): ?string
    {
        return $this->productUniPromApplyType;
    }

    /**
     * @param \Oceanengine\Models\QianchuanUniAwemeAuthorizedGetV10DataAwemeIdListProductUniPromApplyType $productUniPromApplyType
     * @return self
     */
    public function setProductUniPromApplyType(?string $productUniPromApplyType): self
    {
        $this->productUniPromApplyType = $productUniPromApplyType;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->anchorForbidden !== null) {
            $result['anchor_forbidden'] = $this->anchorForbidden;
        }
        if ($this->authType !== null) {
            $result['auth_type'] = $this->authType;
        }
        if ($this->awemeAvatar !== null) {
            $result['aweme_avatar'] = $this->awemeAvatar;
        }
        if ($this->awemeId !== null) {
            $result['aweme_id'] = $this->awemeId;
        }
        if ($this->awemeName !== null) {
            $result['aweme_name'] = $this->awemeName;
        }
        if ($this->awemeShowId !== null) {
            $result['aweme_show_id'] = $this->awemeShowId;
        }
        if ($this->canApplyUniprom !== null) {
            $result['can_apply_uniprom'] = $this->canApplyUniprom;
        }
        if ($this->canControlUniprom !== null) {
            $result['can_control_uniprom'] = $this->canControlUniprom;
        }
        if ($this->hasAuthorized !== null) {
            $result['has_authorized'] = $this->hasAuthorized;
        }
        if ($this->hasLivePermission !== null) {
            $result['has_live_permission'] = $this->hasLivePermission;
        }
        if ($this->hasRoi2DeliveryLimit !== null) {
            $result['has_roi2_delivery_limit'] = $this->hasRoi2DeliveryLimit;
        }
        if ($this->hasRoi2GroupCreated !== null) {
            $result['has_roi2_group_created'] = $this->hasRoi2GroupCreated;
        }
        if ($this->hasShopPermission !== null) {
            $result['has_shop_permission'] = $this->hasShopPermission;
        }
        if ($this->isAllowMall !== null) {
            $result['is_allow_mall'] = $this->isAllowMall;
        }
        if ($this->isAwemeC !== null) {
            $result['is_aweme_c'] = $this->isAwemeC;
        }
        if ($this->isLiveUniPromDisabled !== null) {
            $result['is_live_uni_prom_disabled'] = $this->isLiveUniPromDisabled;
        }
        if ($this->isProductUniPromDisabled !== null) {
            $result['is_product_uni_prom_disabled'] = $this->isProductUniPromDisabled;
        }
        if ($this->liveDisableReasons !== null) {
            $result['live_disable_reasons'] = $this->liveDisableReasons;
        }
        if ($this->liveUniPromApplyType !== null) {
            $result['live_uni_prom_apply_type'] = $this->liveUniPromApplyType;
        }
        if ($this->productDisableReasons !== null) {
            $result['product_disable_reasons'] = $this->productDisableReasons;
        }
        if ($this->productUniPromApplyType !== null) {
            $result['product_uni_prom_apply_type'] = $this->productUniPromApplyType;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['anchor_forbidden'] ?? null) !== null) {
            $obj->anchorForbidden = (bool) $v;
        }
        if (($v = $data['auth_type'] ?? null) !== null && is_array($v)) {
            $obj->authType = $v;
        }
        if (($v = $data['aweme_avatar'] ?? null) !== null) {
            $obj->awemeAvatar = (string) $v;
        }
        if (($v = $data['aweme_id'] ?? null) !== null) {
            $obj->awemeId = (int) $v;
        }
        if (($v = $data['aweme_name'] ?? null) !== null) {
            $obj->awemeName = (string) $v;
        }
        if (($v = $data['aweme_show_id'] ?? null) !== null) {
            $obj->awemeShowId = (string) $v;
        }
        if (($v = $data['can_apply_uniprom'] ?? null) !== null) {
            $obj->canApplyUniprom = (bool) $v;
        }
        if (($v = $data['can_control_uniprom'] ?? null) !== null) {
            $obj->canControlUniprom = (bool) $v;
        }
        if (($v = $data['has_authorized'] ?? null) !== null) {
            $obj->hasAuthorized = (bool) $v;
        }
        if (($v = $data['has_live_permission'] ?? null) !== null) {
            $obj->hasLivePermission = (bool) $v;
        }
        if (($v = $data['has_roi2_delivery_limit'] ?? null) !== null) {
            $obj->hasRoi2DeliveryLimit = (bool) $v;
        }
        if (($v = $data['has_roi2_group_created'] ?? null) !== null) {
            $obj->hasRoi2GroupCreated = (bool) $v;
        }
        if (($v = $data['has_shop_permission'] ?? null) !== null) {
            $obj->hasShopPermission = (bool) $v;
        }
        if (($v = $data['is_allow_mall'] ?? null) !== null) {
            $obj->isAllowMall = (bool) $v;
        }
        if (($v = $data['is_aweme_c'] ?? null) !== null) {
            $obj->isAwemeC = (bool) $v;
        }
        if (($v = $data['is_live_uni_prom_disabled'] ?? null) !== null) {
            $obj->isLiveUniPromDisabled = (bool) $v;
        }
        if (($v = $data['is_product_uni_prom_disabled'] ?? null) !== null) {
            $obj->isProductUniPromDisabled = (bool) $v;
        }
        if (($v = $data['live_disable_reasons'] ?? null) !== null && is_array($v)) {
            $obj->liveDisableReasons = $v;
        }
        if (($v = $data['live_uni_prom_apply_type'] ?? null) !== null) {
            $obj->liveUniPromApplyType = (string) $v;
        }
        if (($v = $data['product_disable_reasons'] ?? null) !== null && is_array($v)) {
            $obj->productDisableReasons = $v;
        }
        if (($v = $data['product_uni_prom_apply_type'] ?? null) !== null) {
            $obj->productUniPromApplyType = (string) $v;
        }
        return $obj;
    }
}
