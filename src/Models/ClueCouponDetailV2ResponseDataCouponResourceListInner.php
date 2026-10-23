<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ClueCouponDetailV2ResponseDataCouponResourceListInner implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $androidLink = null;

    /**
     * @var string
     */
    protected ?string $auditMsg = null;

    /**
     * @var string
     */
    protected ?string $code = null;

    /**
     * @var string
     */
    protected ?string $codeReferUrl = null;

    /**
     * @var \Oceanengine\Models\ClueCouponDetailV2DataCouponResourceListCodeType
     */
    protected ?string $codeType = null;

    /**
     * @var string
     */
    protected ?string $condition = null;

    /**
     * @var int
     */
    protected ?int $discount = null;

    /**
     * @var \Oceanengine\Models\ClueCouponDetailV2ResponseDataCouponResourceListInnerGiftListInner[]
     */
    protected ?array $giftList = null;

    /**
     * @var string
     */
    protected ?string $headImageUrl = null;

    /**
     * @var \Oceanengine\Models\ClueCouponDetailV2DataCouponResourceListIndustryType
     */
    protected ?string $industryType = null;

    /**
     * @var string
     */
    protected ?string $iosLink = null;

    /**
     * @var string
     */
    protected ?string $link = null;

    /**
     * @var string
     */
    protected ?string $logoImageUrl = null;

    /**
     * @var int
     */
    protected ?int $maxAmount = null;

    /**
     * @var string
     */
    protected ?string $merchantName = null;

    /**
     * @var int
     */
    protected ?int $minAmount = null;

    /**
     * @var string
     */
    protected ?string $notification = null;

    /**
     * @var int
     */
    protected ?int $reliefAmount = null;

    /**
     * @var int
     */
    protected ?int $resourceId = null;

    /**
     * @var \Oceanengine\Models\ClueCouponDetailV2DataCouponResourceListResourceType
     */
    protected ?string $resourceType = null;

    /**
     * @var string
     */
    protected ?string $serviceNum = null;

    /**
     * @var int
     */
    protected ?int $stock = null;

    /**
     * @var int[]
     */
    protected ?array $storeIds = null;

    /**
     * @var string
     */
    protected ?string $title = null;

    /**
     * @var string
     */
    protected ?string $useType = null;

    /**
     * @var int
     */
    protected ?int $validDays = null;

    /**
     * @var string
     */
    protected ?string $validEnd = null;

    /**
     * @var string
     */
    protected ?string $validStart = null;

    /**
     * @return string
     */
    public function getAndroidLink(): ?string
    {
        return $this->androidLink;
    }

    /**
     * @param string $androidLink
     * @return self
     */
    public function setAndroidLink(?string $androidLink): self
    {
        $this->androidLink = $androidLink;
        return $this;
    }

    /**
     * @return string
     */
    public function getAuditMsg(): ?string
    {
        return $this->auditMsg;
    }

    /**
     * @param string $auditMsg
     * @return self
     */
    public function setAuditMsg(?string $auditMsg): self
    {
        $this->auditMsg = $auditMsg;
        return $this;
    }

    /**
     * @return string
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
     * @param string $code
     * @return self
     */
    public function setCode(?string $code): self
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @return string
     */
    public function getCodeReferUrl(): ?string
    {
        return $this->codeReferUrl;
    }

    /**
     * @param string $codeReferUrl
     * @return self
     */
    public function setCodeReferUrl(?string $codeReferUrl): self
    {
        $this->codeReferUrl = $codeReferUrl;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ClueCouponDetailV2DataCouponResourceListCodeType
     */
    public function getCodeType(): ?string
    {
        return $this->codeType;
    }

    /**
     * @param \Oceanengine\Models\ClueCouponDetailV2DataCouponResourceListCodeType $codeType
     * @return self
     */
    public function setCodeType(?string $codeType): self
    {
        $this->codeType = $codeType;
        return $this;
    }

    /**
     * @return string
     */
    public function getCondition(): ?string
    {
        return $this->condition;
    }

    /**
     * @param string $condition
     * @return self
     */
    public function setCondition(?string $condition): self
    {
        $this->condition = $condition;
        return $this;
    }

    /**
     * @return int
     */
    public function getDiscount(): ?int
    {
        return $this->discount;
    }

    /**
     * @param int $discount
     * @return self
     */
    public function setDiscount(?int $discount): self
    {
        $this->discount = $discount;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ClueCouponDetailV2ResponseDataCouponResourceListInnerGiftListInner[]
     */
    public function getGiftList(): ?array
    {
        return $this->giftList;
    }

    /**
     * @param \Oceanengine\Models\ClueCouponDetailV2ResponseDataCouponResourceListInnerGiftListInner[] $giftList
     * @return self
     */
    public function setGiftList(?array $giftList): self
    {
        $this->giftList = $giftList;
        return $this;
    }

    /**
     * @return string
     */
    public function getHeadImageUrl(): ?string
    {
        return $this->headImageUrl;
    }

    /**
     * @param string $headImageUrl
     * @return self
     */
    public function setHeadImageUrl(?string $headImageUrl): self
    {
        $this->headImageUrl = $headImageUrl;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ClueCouponDetailV2DataCouponResourceListIndustryType
     */
    public function getIndustryType(): ?string
    {
        return $this->industryType;
    }

    /**
     * @param \Oceanengine\Models\ClueCouponDetailV2DataCouponResourceListIndustryType $industryType
     * @return self
     */
    public function setIndustryType(?string $industryType): self
    {
        $this->industryType = $industryType;
        return $this;
    }

    /**
     * @return string
     */
    public function getIosLink(): ?string
    {
        return $this->iosLink;
    }

    /**
     * @param string $iosLink
     * @return self
     */
    public function setIosLink(?string $iosLink): self
    {
        $this->iosLink = $iosLink;
        return $this;
    }

    /**
     * @return string
     */
    public function getLink(): ?string
    {
        return $this->link;
    }

    /**
     * @param string $link
     * @return self
     */
    public function setLink(?string $link): self
    {
        $this->link = $link;
        return $this;
    }

    /**
     * @return string
     */
    public function getLogoImageUrl(): ?string
    {
        return $this->logoImageUrl;
    }

    /**
     * @param string $logoImageUrl
     * @return self
     */
    public function setLogoImageUrl(?string $logoImageUrl): self
    {
        $this->logoImageUrl = $logoImageUrl;
        return $this;
    }

    /**
     * @return int
     */
    public function getMaxAmount(): ?int
    {
        return $this->maxAmount;
    }

    /**
     * @param int $maxAmount
     * @return self
     */
    public function setMaxAmount(?int $maxAmount): self
    {
        $this->maxAmount = $maxAmount;
        return $this;
    }

    /**
     * @return string
     */
    public function getMerchantName(): ?string
    {
        return $this->merchantName;
    }

    /**
     * @param string $merchantName
     * @return self
     */
    public function setMerchantName(?string $merchantName): self
    {
        $this->merchantName = $merchantName;
        return $this;
    }

    /**
     * @return int
     */
    public function getMinAmount(): ?int
    {
        return $this->minAmount;
    }

    /**
     * @param int $minAmount
     * @return self
     */
    public function setMinAmount(?int $minAmount): self
    {
        $this->minAmount = $minAmount;
        return $this;
    }

    /**
     * @return string
     */
    public function getNotification(): ?string
    {
        return $this->notification;
    }

    /**
     * @param string $notification
     * @return self
     */
    public function setNotification(?string $notification): self
    {
        $this->notification = $notification;
        return $this;
    }

    /**
     * @return int
     */
    public function getReliefAmount(): ?int
    {
        return $this->reliefAmount;
    }

    /**
     * @param int $reliefAmount
     * @return self
     */
    public function setReliefAmount(?int $reliefAmount): self
    {
        $this->reliefAmount = $reliefAmount;
        return $this;
    }

    /**
     * @return int
     */
    public function getResourceId(): ?int
    {
        return $this->resourceId;
    }

    /**
     * @param int $resourceId
     * @return self
     */
    public function setResourceId(?int $resourceId): self
    {
        $this->resourceId = $resourceId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ClueCouponDetailV2DataCouponResourceListResourceType
     */
    public function getResourceType(): ?string
    {
        return $this->resourceType;
    }

    /**
     * @param \Oceanengine\Models\ClueCouponDetailV2DataCouponResourceListResourceType $resourceType
     * @return self
     */
    public function setResourceType(?string $resourceType): self
    {
        $this->resourceType = $resourceType;
        return $this;
    }

    /**
     * @return string
     */
    public function getServiceNum(): ?string
    {
        return $this->serviceNum;
    }

    /**
     * @param string $serviceNum
     * @return self
     */
    public function setServiceNum(?string $serviceNum): self
    {
        $this->serviceNum = $serviceNum;
        return $this;
    }

    /**
     * @return int
     */
    public function getStock(): ?int
    {
        return $this->stock;
    }

    /**
     * @param int $stock
     * @return self
     */
    public function setStock(?int $stock): self
    {
        $this->stock = $stock;
        return $this;
    }

    /**
     * @return int[]
     */
    public function getStoreIds(): ?array
    {
        return $this->storeIds;
    }

    /**
     * @param int[] $storeIds
     * @return self
     */
    public function setStoreIds(?array $storeIds): self
    {
        $this->storeIds = $storeIds;
        return $this;
    }

    /**
     * @return string
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return self
     */
    public function setTitle(?string $title): self
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return string
     */
    public function getUseType(): ?string
    {
        return $this->useType;
    }

    /**
     * @param string $useType
     * @return self
     */
    public function setUseType(?string $useType): self
    {
        $this->useType = $useType;
        return $this;
    }

    /**
     * @return int
     */
    public function getValidDays(): ?int
    {
        return $this->validDays;
    }

    /**
     * @param int $validDays
     * @return self
     */
    public function setValidDays(?int $validDays): self
    {
        $this->validDays = $validDays;
        return $this;
    }

    /**
     * @return string
     */
    public function getValidEnd(): ?string
    {
        return $this->validEnd;
    }

    /**
     * @param string $validEnd
     * @return self
     */
    public function setValidEnd(?string $validEnd): self
    {
        $this->validEnd = $validEnd;
        return $this;
    }

    /**
     * @return string
     */
    public function getValidStart(): ?string
    {
        return $this->validStart;
    }

    /**
     * @param string $validStart
     * @return self
     */
    public function setValidStart(?string $validStart): self
    {
        $this->validStart = $validStart;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->androidLink !== null) {
            $result['android_link'] = $this->androidLink;
        }
        if ($this->auditMsg !== null) {
            $result['audit_msg'] = $this->auditMsg;
        }
        if ($this->code !== null) {
            $result['code'] = $this->code;
        }
        if ($this->codeReferUrl !== null) {
            $result['code_refer_url'] = $this->codeReferUrl;
        }
        if ($this->codeType !== null) {
            $result['code_type'] = $this->codeType;
        }
        if ($this->condition !== null) {
            $result['condition'] = $this->condition;
        }
        if ($this->discount !== null) {
            $result['discount'] = $this->discount;
        }
        if ($this->giftList !== null) {
            $result['gift_list'] = $this->giftList;
        }
        if ($this->headImageUrl !== null) {
            $result['head_image_url'] = $this->headImageUrl;
        }
        if ($this->industryType !== null) {
            $result['industry_type'] = $this->industryType;
        }
        if ($this->iosLink !== null) {
            $result['ios_link'] = $this->iosLink;
        }
        if ($this->link !== null) {
            $result['link'] = $this->link;
        }
        if ($this->logoImageUrl !== null) {
            $result['logo_image_url'] = $this->logoImageUrl;
        }
        if ($this->maxAmount !== null) {
            $result['max_amount'] = $this->maxAmount;
        }
        if ($this->merchantName !== null) {
            $result['merchant_name'] = $this->merchantName;
        }
        if ($this->minAmount !== null) {
            $result['min_amount'] = $this->minAmount;
        }
        if ($this->notification !== null) {
            $result['notification'] = $this->notification;
        }
        if ($this->reliefAmount !== null) {
            $result['relief_amount'] = $this->reliefAmount;
        }
        if ($this->resourceId !== null) {
            $result['resource_id'] = $this->resourceId;
        }
        if ($this->resourceType !== null) {
            $result['resource_type'] = $this->resourceType;
        }
        if ($this->serviceNum !== null) {
            $result['service_num'] = $this->serviceNum;
        }
        if ($this->stock !== null) {
            $result['stock'] = $this->stock;
        }
        if ($this->storeIds !== null) {
            $result['store_ids'] = $this->storeIds;
        }
        if ($this->title !== null) {
            $result['title'] = $this->title;
        }
        if ($this->useType !== null) {
            $result['use_type'] = $this->useType;
        }
        if ($this->validDays !== null) {
            $result['valid_days'] = $this->validDays;
        }
        if ($this->validEnd !== null) {
            $result['valid_end'] = $this->validEnd;
        }
        if ($this->validStart !== null) {
            $result['valid_start'] = $this->validStart;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['android_link'] ?? null) !== null) {
            $obj->androidLink = (string) $v;
        }
        if (($v = $data['audit_msg'] ?? null) !== null) {
            $obj->auditMsg = (string) $v;
        }
        if (($v = $data['code'] ?? null) !== null) {
            $obj->code = (string) $v;
        }
        if (($v = $data['code_refer_url'] ?? null) !== null) {
            $obj->codeReferUrl = (string) $v;
        }
        if (($v = $data['code_type'] ?? null) !== null) {
            $obj->codeType = (string) $v;
        }
        if (($v = $data['condition'] ?? null) !== null) {
            $obj->condition = (string) $v;
        }
        if (($v = $data['discount'] ?? null) !== null) {
            $obj->discount = (int) $v;
        }
        if (($v = $data['gift_list'] ?? null) !== null && is_array($v)) {
            $obj->giftList = array_map(fn ($vv) => \Oceanengine\Models\ClueCouponDetailV2ResponseDataCouponResourceListInnerGiftListInner::fromArray($vv), $v);
        }
        if (($v = $data['head_image_url'] ?? null) !== null) {
            $obj->headImageUrl = (string) $v;
        }
        if (($v = $data['industry_type'] ?? null) !== null) {
            $obj->industryType = (string) $v;
        }
        if (($v = $data['ios_link'] ?? null) !== null) {
            $obj->iosLink = (string) $v;
        }
        if (($v = $data['link'] ?? null) !== null) {
            $obj->link = (string) $v;
        }
        if (($v = $data['logo_image_url'] ?? null) !== null) {
            $obj->logoImageUrl = (string) $v;
        }
        if (($v = $data['max_amount'] ?? null) !== null) {
            $obj->maxAmount = (int) $v;
        }
        if (($v = $data['merchant_name'] ?? null) !== null) {
            $obj->merchantName = (string) $v;
        }
        if (($v = $data['min_amount'] ?? null) !== null) {
            $obj->minAmount = (int) $v;
        }
        if (($v = $data['notification'] ?? null) !== null) {
            $obj->notification = (string) $v;
        }
        if (($v = $data['relief_amount'] ?? null) !== null) {
            $obj->reliefAmount = (int) $v;
        }
        if (($v = $data['resource_id'] ?? null) !== null) {
            $obj->resourceId = (int) $v;
        }
        if (($v = $data['resource_type'] ?? null) !== null) {
            $obj->resourceType = (string) $v;
        }
        if (($v = $data['service_num'] ?? null) !== null) {
            $obj->serviceNum = (string) $v;
        }
        if (($v = $data['stock'] ?? null) !== null) {
            $obj->stock = (int) $v;
        }
        if (($v = $data['store_ids'] ?? null) !== null && is_array($v)) {
            $obj->storeIds = $v;
        }
        if (($v = $data['title'] ?? null) !== null) {
            $obj->title = (string) $v;
        }
        if (($v = $data['use_type'] ?? null) !== null) {
            $obj->useType = (string) $v;
        }
        if (($v = $data['valid_days'] ?? null) !== null) {
            $obj->validDays = (int) $v;
        }
        if (($v = $data['valid_end'] ?? null) !== null) {
            $obj->validEnd = (string) $v;
        }
        if (($v = $data['valid_start'] ?? null) !== null) {
            $obj->validStart = (string) $v;
        }
        return $obj;
    }
}
