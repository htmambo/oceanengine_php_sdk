<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarChallengeInfoV2ResponseDataTaskInfoListInnerDemandInfo implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $acceptExpirationDay = null;

    /**
     * @var \Oceanengine\Models\StarChallengeInfoV2ResponseDataTaskInfoListInnerDemandInfoAdSyncConf
     */
    protected ?\Oceanengine\Models\StarChallengeInfoV2ResponseDataTaskInfoListInnerDemandInfoAdSyncConf $adSyncConf = null;

    /**
     * @var string
     */
    protected ?string $attachmentText = null;

    /**
     * @var string[]
     */
    protected ?array $attachments = null;

    /**
     * @var string[]
     */
    protected ?array $attatchmentsUrl = null;

    /**
     * @var string
     */
    protected ?string $brandName = null;

    /**
     * @var \Oceanengine\Models\StarChallengeInfoV2ResponseDataTaskInfoListInnerDemandInfoChallengeRequirement
     */
    protected ?\Oceanengine\Models\StarChallengeInfoV2ResponseDataTaskInfoListInnerDemandInfoChallengeRequirement $challengeRequirement = null;

    /**
     * @var string
     */
    protected ?string $componentClickMonitorUrl = null;

    /**
     * @var \Oceanengine\Models\StarChallengeInfoV2ResponseDataTaskInfoListInnerDemandInfoComponentInfo
     */
    protected ?\Oceanengine\Models\StarChallengeInfoV2ResponseDataTaskInfoListInnerDemandInfoComponentInfo $componentInfo = null;

    /**
     * @var string
     */
    protected ?string $contactName = null;

    /**
     * @var string
     */
    protected ?string $contactPhone = null;

    /**
     * @var \Oceanengine\Models\StarChallengeInfoV2ResponseDataTaskInfoListInnerDemandInfoCustomizeInfo
     */
    protected ?\Oceanengine\Models\StarChallengeInfoV2ResponseDataTaskInfoListInnerDemandInfoCustomizeInfo $customizeInfo = null;

    /**
     * @var string
     */
    protected ?string $demandName = null;

    /**
     * @var \Oceanengine\Models\StarChallengeInfoV2ResponseDataTaskInfoListInnerDemandInfoDemandRequirement
     */
    protected ?\Oceanengine\Models\StarChallengeInfoV2ResponseDataTaskInfoListInnerDemandInfoDemandRequirement $demandRequirement = null;

    /**
     * @var int
     */
    protected ?int $expectRemainTime = null;

    /**
     * @var string
     */
    protected ?string $goodsLink = null;

    /**
     * @var int
     */
    protected ?int $ignoreScript = null;

    /**
     * @var string
     */
    protected ?string $itemShowMonitorUrl = null;

    /**
     * @var string[]
     */
    protected ?array $productCategory = null;

    /**
     * @var string[]
     */
    protected ?array $productIndustry = null;

    /**
     * @var string
     */
    protected ?string $productInformation = null;

    /**
     * @var string
     */
    protected ?string $productName = null;

    /**
     * @var string
     */
    protected ?string $promotionTarget = null;

    /**
     * @return int
     */
    public function getAcceptExpirationDay(): ?int
    {
        return $this->acceptExpirationDay;
    }

    /**
     * @param int $acceptExpirationDay
     * @return self
     */
    public function setAcceptExpirationDay(?int $acceptExpirationDay): self
    {
        $this->acceptExpirationDay = $acceptExpirationDay;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarChallengeInfoV2ResponseDataTaskInfoListInnerDemandInfoAdSyncConf
     */
    public function getAdSyncConf(): ?\Oceanengine\Models\StarChallengeInfoV2ResponseDataTaskInfoListInnerDemandInfoAdSyncConf
    {
        return $this->adSyncConf;
    }

    /**
     * @param \Oceanengine\Models\StarChallengeInfoV2ResponseDataTaskInfoListInnerDemandInfoAdSyncConf $adSyncConf
     * @return self
     */
    public function setAdSyncConf(?\Oceanengine\Models\StarChallengeInfoV2ResponseDataTaskInfoListInnerDemandInfoAdSyncConf $adSyncConf): self
    {
        $this->adSyncConf = $adSyncConf;
        return $this;
    }

    /**
     * @return string
     */
    public function getAttachmentText(): ?string
    {
        return $this->attachmentText;
    }

    /**
     * @param string $attachmentText
     * @return self
     */
    public function setAttachmentText(?string $attachmentText): self
    {
        $this->attachmentText = $attachmentText;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getAttachments(): ?array
    {
        return $this->attachments;
    }

    /**
     * @param string[] $attachments
     * @return self
     */
    public function setAttachments(?array $attachments): self
    {
        $this->attachments = $attachments;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getAttatchmentsUrl(): ?array
    {
        return $this->attatchmentsUrl;
    }

    /**
     * @param string[] $attatchmentsUrl
     * @return self
     */
    public function setAttatchmentsUrl(?array $attatchmentsUrl): self
    {
        $this->attatchmentsUrl = $attatchmentsUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getBrandName(): ?string
    {
        return $this->brandName;
    }

    /**
     * @param string $brandName
     * @return self
     */
    public function setBrandName(?string $brandName): self
    {
        $this->brandName = $brandName;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarChallengeInfoV2ResponseDataTaskInfoListInnerDemandInfoChallengeRequirement
     */
    public function getChallengeRequirement(): ?\Oceanengine\Models\StarChallengeInfoV2ResponseDataTaskInfoListInnerDemandInfoChallengeRequirement
    {
        return $this->challengeRequirement;
    }

    /**
     * @param \Oceanengine\Models\StarChallengeInfoV2ResponseDataTaskInfoListInnerDemandInfoChallengeRequirement $challengeRequirement
     * @return self
     */
    public function setChallengeRequirement(?\Oceanengine\Models\StarChallengeInfoV2ResponseDataTaskInfoListInnerDemandInfoChallengeRequirement $challengeRequirement): self
    {
        $this->challengeRequirement = $challengeRequirement;
        return $this;
    }

    /**
     * @return string
     */
    public function getComponentClickMonitorUrl(): ?string
    {
        return $this->componentClickMonitorUrl;
    }

    /**
     * @param string $componentClickMonitorUrl
     * @return self
     */
    public function setComponentClickMonitorUrl(?string $componentClickMonitorUrl): self
    {
        $this->componentClickMonitorUrl = $componentClickMonitorUrl;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarChallengeInfoV2ResponseDataTaskInfoListInnerDemandInfoComponentInfo
     */
    public function getComponentInfo(): ?\Oceanengine\Models\StarChallengeInfoV2ResponseDataTaskInfoListInnerDemandInfoComponentInfo
    {
        return $this->componentInfo;
    }

    /**
     * @param \Oceanengine\Models\StarChallengeInfoV2ResponseDataTaskInfoListInnerDemandInfoComponentInfo $componentInfo
     * @return self
     */
    public function setComponentInfo(?\Oceanengine\Models\StarChallengeInfoV2ResponseDataTaskInfoListInnerDemandInfoComponentInfo $componentInfo): self
    {
        $this->componentInfo = $componentInfo;
        return $this;
    }

    /**
     * @return string
     */
    public function getContactName(): ?string
    {
        return $this->contactName;
    }

    /**
     * @param string $contactName
     * @return self
     */
    public function setContactName(?string $contactName): self
    {
        $this->contactName = $contactName;
        return $this;
    }

    /**
     * @return string
     */
    public function getContactPhone(): ?string
    {
        return $this->contactPhone;
    }

    /**
     * @param string $contactPhone
     * @return self
     */
    public function setContactPhone(?string $contactPhone): self
    {
        $this->contactPhone = $contactPhone;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarChallengeInfoV2ResponseDataTaskInfoListInnerDemandInfoCustomizeInfo
     */
    public function getCustomizeInfo(): ?\Oceanengine\Models\StarChallengeInfoV2ResponseDataTaskInfoListInnerDemandInfoCustomizeInfo
    {
        return $this->customizeInfo;
    }

    /**
     * @param \Oceanengine\Models\StarChallengeInfoV2ResponseDataTaskInfoListInnerDemandInfoCustomizeInfo $customizeInfo
     * @return self
     */
    public function setCustomizeInfo(?\Oceanengine\Models\StarChallengeInfoV2ResponseDataTaskInfoListInnerDemandInfoCustomizeInfo $customizeInfo): self
    {
        $this->customizeInfo = $customizeInfo;
        return $this;
    }

    /**
     * @return string
     */
    public function getDemandName(): ?string
    {
        return $this->demandName;
    }

    /**
     * @param string $demandName
     * @return self
     */
    public function setDemandName(?string $demandName): self
    {
        $this->demandName = $demandName;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarChallengeInfoV2ResponseDataTaskInfoListInnerDemandInfoDemandRequirement
     */
    public function getDemandRequirement(): ?\Oceanengine\Models\StarChallengeInfoV2ResponseDataTaskInfoListInnerDemandInfoDemandRequirement
    {
        return $this->demandRequirement;
    }

    /**
     * @param \Oceanengine\Models\StarChallengeInfoV2ResponseDataTaskInfoListInnerDemandInfoDemandRequirement $demandRequirement
     * @return self
     */
    public function setDemandRequirement(?\Oceanengine\Models\StarChallengeInfoV2ResponseDataTaskInfoListInnerDemandInfoDemandRequirement $demandRequirement): self
    {
        $this->demandRequirement = $demandRequirement;
        return $this;
    }

    /**
     * @return int
     */
    public function getExpectRemainTime(): ?int
    {
        return $this->expectRemainTime;
    }

    /**
     * @param int $expectRemainTime
     * @return self
     */
    public function setExpectRemainTime(?int $expectRemainTime): self
    {
        $this->expectRemainTime = $expectRemainTime;
        return $this;
    }

    /**
     * @return string
     */
    public function getGoodsLink(): ?string
    {
        return $this->goodsLink;
    }

    /**
     * @param string $goodsLink
     * @return self
     */
    public function setGoodsLink(?string $goodsLink): self
    {
        $this->goodsLink = $goodsLink;
        return $this;
    }

    /**
     * @return int
     */
    public function getIgnoreScript(): ?int
    {
        return $this->ignoreScript;
    }

    /**
     * @param int $ignoreScript
     * @return self
     */
    public function setIgnoreScript(?int $ignoreScript): self
    {
        $this->ignoreScript = $ignoreScript;
        return $this;
    }

    /**
     * @return string
     */
    public function getItemShowMonitorUrl(): ?string
    {
        return $this->itemShowMonitorUrl;
    }

    /**
     * @param string $itemShowMonitorUrl
     * @return self
     */
    public function setItemShowMonitorUrl(?string $itemShowMonitorUrl): self
    {
        $this->itemShowMonitorUrl = $itemShowMonitorUrl;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getProductCategory(): ?array
    {
        return $this->productCategory;
    }

    /**
     * @param string[] $productCategory
     * @return self
     */
    public function setProductCategory(?array $productCategory): self
    {
        $this->productCategory = $productCategory;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getProductIndustry(): ?array
    {
        return $this->productIndustry;
    }

    /**
     * @param string[] $productIndustry
     * @return self
     */
    public function setProductIndustry(?array $productIndustry): self
    {
        $this->productIndustry = $productIndustry;
        return $this;
    }

    /**
     * @return string
     */
    public function getProductInformation(): ?string
    {
        return $this->productInformation;
    }

    /**
     * @param string $productInformation
     * @return self
     */
    public function setProductInformation(?string $productInformation): self
    {
        $this->productInformation = $productInformation;
        return $this;
    }

    /**
     * @return string
     */
    public function getProductName(): ?string
    {
        return $this->productName;
    }

    /**
     * @param string $productName
     * @return self
     */
    public function setProductName(?string $productName): self
    {
        $this->productName = $productName;
        return $this;
    }

    /**
     * @return string
     */
    public function getPromotionTarget(): ?string
    {
        return $this->promotionTarget;
    }

    /**
     * @param string $promotionTarget
     * @return self
     */
    public function setPromotionTarget(?string $promotionTarget): self
    {
        $this->promotionTarget = $promotionTarget;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->acceptExpirationDay !== null) {
            $result['accept_expiration_day'] = $this->acceptExpirationDay;
        }
        if ($this->adSyncConf !== null) {
            $result['ad_sync_conf'] = $this->adSyncConf;
        }
        if ($this->attachmentText !== null) {
            $result['attachment_text'] = $this->attachmentText;
        }
        if ($this->attachments !== null) {
            $result['attachments'] = $this->attachments;
        }
        if ($this->attatchmentsUrl !== null) {
            $result['attatchments_url'] = $this->attatchmentsUrl;
        }
        if ($this->brandName !== null) {
            $result['brand_name'] = $this->brandName;
        }
        if ($this->challengeRequirement !== null) {
            $result['challenge_requirement'] = $this->challengeRequirement;
        }
        if ($this->componentClickMonitorUrl !== null) {
            $result['component_click_monitor_url'] = $this->componentClickMonitorUrl;
        }
        if ($this->componentInfo !== null) {
            $result['component_info'] = $this->componentInfo;
        }
        if ($this->contactName !== null) {
            $result['contact_name'] = $this->contactName;
        }
        if ($this->contactPhone !== null) {
            $result['contact_phone'] = $this->contactPhone;
        }
        if ($this->customizeInfo !== null) {
            $result['customize_info'] = $this->customizeInfo;
        }
        if ($this->demandName !== null) {
            $result['demand_name'] = $this->demandName;
        }
        if ($this->demandRequirement !== null) {
            $result['demand_requirement'] = $this->demandRequirement;
        }
        if ($this->expectRemainTime !== null) {
            $result['expect_remain_time'] = $this->expectRemainTime;
        }
        if ($this->goodsLink !== null) {
            $result['goods_link'] = $this->goodsLink;
        }
        if ($this->ignoreScript !== null) {
            $result['ignore_script'] = $this->ignoreScript;
        }
        if ($this->itemShowMonitorUrl !== null) {
            $result['item_show_monitor_url'] = $this->itemShowMonitorUrl;
        }
        if ($this->productCategory !== null) {
            $result['product_category'] = $this->productCategory;
        }
        if ($this->productIndustry !== null) {
            $result['product_industry'] = $this->productIndustry;
        }
        if ($this->productInformation !== null) {
            $result['product_information'] = $this->productInformation;
        }
        if ($this->productName !== null) {
            $result['product_name'] = $this->productName;
        }
        if ($this->promotionTarget !== null) {
            $result['promotion_target'] = $this->promotionTarget;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['accept_expiration_day'] ?? null) !== null) {
            $obj->acceptExpirationDay = (int) $v;
        }
        if (($v = $data['ad_sync_conf'] ?? null) !== null && is_array($v)) {
            $obj->adSyncConf = \Oceanengine\Models\StarChallengeInfoV2ResponseDataTaskInfoListInnerDemandInfoAdSyncConf::fromArray($v);
        }
        if (($v = $data['attachment_text'] ?? null) !== null) {
            $obj->attachmentText = (string) $v;
        }
        if (($v = $data['attachments'] ?? null) !== null && is_array($v)) {
            $obj->attachments = $v;
        }
        if (($v = $data['attatchments_url'] ?? null) !== null && is_array($v)) {
            $obj->attatchmentsUrl = $v;
        }
        if (($v = $data['brand_name'] ?? null) !== null) {
            $obj->brandName = (string) $v;
        }
        if (($v = $data['challenge_requirement'] ?? null) !== null && is_array($v)) {
            $obj->challengeRequirement = \Oceanengine\Models\StarChallengeInfoV2ResponseDataTaskInfoListInnerDemandInfoChallengeRequirement::fromArray($v);
        }
        if (($v = $data['component_click_monitor_url'] ?? null) !== null) {
            $obj->componentClickMonitorUrl = (string) $v;
        }
        if (($v = $data['component_info'] ?? null) !== null && is_array($v)) {
            $obj->componentInfo = \Oceanengine\Models\StarChallengeInfoV2ResponseDataTaskInfoListInnerDemandInfoComponentInfo::fromArray($v);
        }
        if (($v = $data['contact_name'] ?? null) !== null) {
            $obj->contactName = (string) $v;
        }
        if (($v = $data['contact_phone'] ?? null) !== null) {
            $obj->contactPhone = (string) $v;
        }
        if (($v = $data['customize_info'] ?? null) !== null && is_array($v)) {
            $obj->customizeInfo = \Oceanengine\Models\StarChallengeInfoV2ResponseDataTaskInfoListInnerDemandInfoCustomizeInfo::fromArray($v);
        }
        if (($v = $data['demand_name'] ?? null) !== null) {
            $obj->demandName = (string) $v;
        }
        if (($v = $data['demand_requirement'] ?? null) !== null && is_array($v)) {
            $obj->demandRequirement = \Oceanengine\Models\StarChallengeInfoV2ResponseDataTaskInfoListInnerDemandInfoDemandRequirement::fromArray($v);
        }
        if (($v = $data['expect_remain_time'] ?? null) !== null) {
            $obj->expectRemainTime = (int) $v;
        }
        if (($v = $data['goods_link'] ?? null) !== null) {
            $obj->goodsLink = (string) $v;
        }
        if (($v = $data['ignore_script'] ?? null) !== null) {
            $obj->ignoreScript = (int) $v;
        }
        if (($v = $data['item_show_monitor_url'] ?? null) !== null) {
            $obj->itemShowMonitorUrl = (string) $v;
        }
        if (($v = $data['product_category'] ?? null) !== null && is_array($v)) {
            $obj->productCategory = $v;
        }
        if (($v = $data['product_industry'] ?? null) !== null && is_array($v)) {
            $obj->productIndustry = $v;
        }
        if (($v = $data['product_information'] ?? null) !== null) {
            $obj->productInformation = (string) $v;
        }
        if (($v = $data['product_name'] ?? null) !== null) {
            $obj->productName = (string) $v;
        }
        if (($v = $data['promotion_target'] ?? null) !== null) {
            $obj->promotionTarget = (string) $v;
        }
        return $obj;
    }
}
