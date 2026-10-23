<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarDemandCreateChallengeV2RequestDemandInfo implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\StarDemandCreateChallengeV2RequestDemandInfoAdSyncConf
     */
    protected ?\Oceanengine\Models\StarDemandCreateChallengeV2RequestDemandInfoAdSyncConf $adSyncConf = null;

    /**
     * 附件描述（补充说明，可包含网盘链接，建议用此项）
     * @var string
     */
    protected ?string $attachmentText = null;

    /**
     * 附件（素材参考） 通过上传材料接口上传的文件名列表
     * @var string[]
     */
    protected ?array $attachments = null;

    /**
     * @var string[]
     */
    protected ?array $attatchmentsUrl = null;

    /**
     * 品牌名称 50字内。去品牌库中匹配，若无则返回错误。
     * @var string
     */
    protected ?string $brandName = null;

    /**
     * @var \Oceanengine\Models\StarDemandCreateChallengeV2RequestDemandInfoChallengeRequirement
     */
    protected ?\Oceanengine\Models\StarDemandCreateChallengeV2RequestDemandInfoChallengeRequirement $challengeRequirement = null;

    /**
     * 组件点击监测链接 https开头的URL
     * @var string
     */
    protected ?string $componentClickMonitorUrl = null;

    /**
     * @var \Oceanengine\Models\StarDemandCreateChallengeV2RequestDemandInfoComponentInfo
     */
    protected ?\Oceanengine\Models\StarDemandCreateChallengeV2RequestDemandInfoComponentInfo $componentInfo = null;

    /**
     * 联系人电话 电话号码校验
     * @var string
     */
    protected ?string $contactName = null;

    /**
     * 联系人姓名 20字内
     * @var string
     */
    protected ?string $contactPhone = null;

    /**
     * 任务名称 60字内
     * @var string
     */
    protected ?string $demandName = null;

    /**
     * @var int
     */
    protected ?int $expirationTime = null;

    /**
     * @var int
     */
    protected ?int $expirationTimeEnd = null;

    /**
     * ip活动ID
     * @var int
     */
    protected ?int $ipActId = null;

    /**
     * 视频曝光监测链接 https开头的URL
     * @var string
     */
    protected ?string $itemShowMonitorUrl = null;

    /**
     * @var \Oceanengine\Models\StarDemandCreateChallengeV2RequestDemandInfoObjectFieldInfo
     */
    protected ?\Oceanengine\Models\StarDemandCreateChallengeV2RequestDemandInfoObjectFieldInfo $objectFieldInfo = null;

    /**
     * 所属类目 类目文本，特定品牌下需要
     * @var string[]
     */
    protected ?array $productCategory = null;

    /**
     * 产品所属行业 [一级行业, 二级行业]
     * @var string[]
     */
    protected ?array $productIndustry = null;

    /**
     * 产品介绍 500字以内
     * @var string
     */
    protected ?string $productInformation = null;

    /**
     * 商品链接
     * @var string
     */
    protected ?string $productLink = null;

    /**
     * 产品名称 40字内
     * @var string
     */
    protected ?string $productName = null;

    /**
     * 项目ID
     * @var int
     */
    protected ?int $projectId = null;

    /**
     * 营销目标 为以下之一 品牌传播 应用下载 电商卖货 影视宣传 门店推广 线索收集 破圈种草
     * @var string
     */
    protected ?string $promotionTarget = null;

    /**
     * @return \Oceanengine\Models\StarDemandCreateChallengeV2RequestDemandInfoAdSyncConf
     */
    public function getAdSyncConf(): ?\Oceanengine\Models\StarDemandCreateChallengeV2RequestDemandInfoAdSyncConf
    {
        return $this->adSyncConf;
    }

    /**
     * @param \Oceanengine\Models\StarDemandCreateChallengeV2RequestDemandInfoAdSyncConf $adSyncConf
     * @return self
     */
    public function setAdSyncConf(?\Oceanengine\Models\StarDemandCreateChallengeV2RequestDemandInfoAdSyncConf $adSyncConf): self
    {
        $this->adSyncConf = $adSyncConf;
        return $this;
    }

    /**
     * 附件描述（补充说明，可包含网盘链接，建议用此项）
     * @return string
     */
    public function getAttachmentText(): ?string
    {
        return $this->attachmentText;
    }

    /**
     * 附件描述（补充说明，可包含网盘链接，建议用此项）
     * @param string $attachmentText
     * @return self
     */
    public function setAttachmentText(?string $attachmentText): self
    {
        $this->attachmentText = $attachmentText;
        return $this;
    }

    /**
     * 附件（素材参考） 通过上传材料接口上传的文件名列表
     * @return string[]
     */
    public function getAttachments(): ?array
    {
        return $this->attachments;
    }

    /**
     * 附件（素材参考） 通过上传材料接口上传的文件名列表
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
     * 品牌名称 50字内。去品牌库中匹配，若无则返回错误。
     * @return string
     */
    public function getBrandName(): ?string
    {
        return $this->brandName;
    }

    /**
     * 品牌名称 50字内。去品牌库中匹配，若无则返回错误。
     * @param string $brandName
     * @return self
     */
    public function setBrandName(?string $brandName): self
    {
        $this->brandName = $brandName;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarDemandCreateChallengeV2RequestDemandInfoChallengeRequirement
     */
    public function getChallengeRequirement(): ?\Oceanengine\Models\StarDemandCreateChallengeV2RequestDemandInfoChallengeRequirement
    {
        return $this->challengeRequirement;
    }

    /**
     * @param \Oceanengine\Models\StarDemandCreateChallengeV2RequestDemandInfoChallengeRequirement $challengeRequirement
     * @return self
     */
    public function setChallengeRequirement(?\Oceanengine\Models\StarDemandCreateChallengeV2RequestDemandInfoChallengeRequirement $challengeRequirement): self
    {
        $this->challengeRequirement = $challengeRequirement;
        return $this;
    }

    /**
     * 组件点击监测链接 https开头的URL
     * @return string
     */
    public function getComponentClickMonitorUrl(): ?string
    {
        return $this->componentClickMonitorUrl;
    }

    /**
     * 组件点击监测链接 https开头的URL
     * @param string $componentClickMonitorUrl
     * @return self
     */
    public function setComponentClickMonitorUrl(?string $componentClickMonitorUrl): self
    {
        $this->componentClickMonitorUrl = $componentClickMonitorUrl;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarDemandCreateChallengeV2RequestDemandInfoComponentInfo
     */
    public function getComponentInfo(): ?\Oceanengine\Models\StarDemandCreateChallengeV2RequestDemandInfoComponentInfo
    {
        return $this->componentInfo;
    }

    /**
     * @param \Oceanengine\Models\StarDemandCreateChallengeV2RequestDemandInfoComponentInfo $componentInfo
     * @return self
     */
    public function setComponentInfo(?\Oceanengine\Models\StarDemandCreateChallengeV2RequestDemandInfoComponentInfo $componentInfo): self
    {
        $this->componentInfo = $componentInfo;
        return $this;
    }

    /**
     * 联系人电话 电话号码校验
     * @return string
     */
    public function getContactName(): ?string
    {
        return $this->contactName;
    }

    /**
     * 联系人电话 电话号码校验
     * @param string $contactName
     * @return self
     */
    public function setContactName(?string $contactName): self
    {
        $this->contactName = $contactName;
        return $this;
    }

    /**
     * 联系人姓名 20字内
     * @return string
     */
    public function getContactPhone(): ?string
    {
        return $this->contactPhone;
    }

    /**
     * 联系人姓名 20字内
     * @param string $contactPhone
     * @return self
     */
    public function setContactPhone(?string $contactPhone): self
    {
        $this->contactPhone = $contactPhone;
        return $this;
    }

    /**
     * 任务名称 60字内
     * @return string
     */
    public function getDemandName(): ?string
    {
        return $this->demandName;
    }

    /**
     * 任务名称 60字内
     * @param string $demandName
     * @return self
     */
    public function setDemandName(?string $demandName): self
    {
        $this->demandName = $demandName;
        return $this;
    }

    /**
     * @return int
     */
    public function getExpirationTime(): ?int
    {
        return $this->expirationTime;
    }

    /**
     * @param int $expirationTime
     * @return self
     */
    public function setExpirationTime(?int $expirationTime): self
    {
        $this->expirationTime = $expirationTime;
        return $this;
    }

    /**
     * @return int
     */
    public function getExpirationTimeEnd(): ?int
    {
        return $this->expirationTimeEnd;
    }

    /**
     * @param int $expirationTimeEnd
     * @return self
     */
    public function setExpirationTimeEnd(?int $expirationTimeEnd): self
    {
        $this->expirationTimeEnd = $expirationTimeEnd;
        return $this;
    }

    /**
     * ip活动ID
     * @return int
     */
    public function getIpActId(): ?int
    {
        return $this->ipActId;
    }

    /**
     * ip活动ID
     * @param int $ipActId
     * @return self
     */
    public function setIpActId(?int $ipActId): self
    {
        $this->ipActId = $ipActId;
        return $this;
    }

    /**
     * 视频曝光监测链接 https开头的URL
     * @return string
     */
    public function getItemShowMonitorUrl(): ?string
    {
        return $this->itemShowMonitorUrl;
    }

    /**
     * 视频曝光监测链接 https开头的URL
     * @param string $itemShowMonitorUrl
     * @return self
     */
    public function setItemShowMonitorUrl(?string $itemShowMonitorUrl): self
    {
        $this->itemShowMonitorUrl = $itemShowMonitorUrl;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarDemandCreateChallengeV2RequestDemandInfoObjectFieldInfo
     */
    public function getObjectFieldInfo(): ?\Oceanengine\Models\StarDemandCreateChallengeV2RequestDemandInfoObjectFieldInfo
    {
        return $this->objectFieldInfo;
    }

    /**
     * @param \Oceanengine\Models\StarDemandCreateChallengeV2RequestDemandInfoObjectFieldInfo $objectFieldInfo
     * @return self
     */
    public function setObjectFieldInfo(?\Oceanengine\Models\StarDemandCreateChallengeV2RequestDemandInfoObjectFieldInfo $objectFieldInfo): self
    {
        $this->objectFieldInfo = $objectFieldInfo;
        return $this;
    }

    /**
     * 所属类目 类目文本，特定品牌下需要
     * @return string[]
     */
    public function getProductCategory(): ?array
    {
        return $this->productCategory;
    }

    /**
     * 所属类目 类目文本，特定品牌下需要
     * @param string[] $productCategory
     * @return self
     */
    public function setProductCategory(?array $productCategory): self
    {
        $this->productCategory = $productCategory;
        return $this;
    }

    /**
     * 产品所属行业 [一级行业, 二级行业]
     * @return string[]
     */
    public function getProductIndustry(): ?array
    {
        return $this->productIndustry;
    }

    /**
     * 产品所属行业 [一级行业, 二级行业]
     * @param string[] $productIndustry
     * @return self
     */
    public function setProductIndustry(?array $productIndustry): self
    {
        $this->productIndustry = $productIndustry;
        return $this;
    }

    /**
     * 产品介绍 500字以内
     * @return string
     */
    public function getProductInformation(): ?string
    {
        return $this->productInformation;
    }

    /**
     * 产品介绍 500字以内
     * @param string $productInformation
     * @return self
     */
    public function setProductInformation(?string $productInformation): self
    {
        $this->productInformation = $productInformation;
        return $this;
    }

    /**
     * 商品链接
     * @return string
     */
    public function getProductLink(): ?string
    {
        return $this->productLink;
    }

    /**
     * 商品链接
     * @param string $productLink
     * @return self
     */
    public function setProductLink(?string $productLink): self
    {
        $this->productLink = $productLink;
        return $this;
    }

    /**
     * 产品名称 40字内
     * @return string
     */
    public function getProductName(): ?string
    {
        return $this->productName;
    }

    /**
     * 产品名称 40字内
     * @param string $productName
     * @return self
     */
    public function setProductName(?string $productName): self
    {
        $this->productName = $productName;
        return $this;
    }

    /**
     * 项目ID
     * @return int
     */
    public function getProjectId(): ?int
    {
        return $this->projectId;
    }

    /**
     * 项目ID
     * @param int $projectId
     * @return self
     */
    public function setProjectId(?int $projectId): self
    {
        $this->projectId = $projectId;
        return $this;
    }

    /**
     * 营销目标 为以下之一 品牌传播 应用下载 电商卖货 影视宣传 门店推广 线索收集 破圈种草
     * @return string
     */
    public function getPromotionTarget(): ?string
    {
        return $this->promotionTarget;
    }

    /**
     * 营销目标 为以下之一 品牌传播 应用下载 电商卖货 影视宣传 门店推广 线索收集 破圈种草
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
        if ($this->demandName !== null) {
            $result['demand_name'] = $this->demandName;
        }
        if ($this->expirationTime !== null) {
            $result['expiration_time'] = $this->expirationTime;
        }
        if ($this->expirationTimeEnd !== null) {
            $result['expiration_time_end'] = $this->expirationTimeEnd;
        }
        if ($this->ipActId !== null) {
            $result['ip_act_id'] = $this->ipActId;
        }
        if ($this->itemShowMonitorUrl !== null) {
            $result['item_show_monitor_url'] = $this->itemShowMonitorUrl;
        }
        if ($this->objectFieldInfo !== null) {
            $result['object_field_info'] = $this->objectFieldInfo;
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
        if ($this->productLink !== null) {
            $result['product_link'] = $this->productLink;
        }
        if ($this->productName !== null) {
            $result['product_name'] = $this->productName;
        }
        if ($this->projectId !== null) {
            $result['project_id'] = $this->projectId;
        }
        if ($this->promotionTarget !== null) {
            $result['promotion_target'] = $this->promotionTarget;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['ad_sync_conf'] ?? null) !== null && is_array($v)) {
            $obj->adSyncConf = \Oceanengine\Models\StarDemandCreateChallengeV2RequestDemandInfoAdSyncConf::fromArray($v);
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
            $obj->challengeRequirement = \Oceanengine\Models\StarDemandCreateChallengeV2RequestDemandInfoChallengeRequirement::fromArray($v);
        }
        if (($v = $data['component_click_monitor_url'] ?? null) !== null) {
            $obj->componentClickMonitorUrl = (string) $v;
        }
        if (($v = $data['component_info'] ?? null) !== null && is_array($v)) {
            $obj->componentInfo = \Oceanengine\Models\StarDemandCreateChallengeV2RequestDemandInfoComponentInfo::fromArray($v);
        }
        if (($v = $data['contact_name'] ?? null) !== null) {
            $obj->contactName = (string) $v;
        }
        if (($v = $data['contact_phone'] ?? null) !== null) {
            $obj->contactPhone = (string) $v;
        }
        if (($v = $data['demand_name'] ?? null) !== null) {
            $obj->demandName = (string) $v;
        }
        if (($v = $data['expiration_time'] ?? null) !== null) {
            $obj->expirationTime = (int) $v;
        }
        if (($v = $data['expiration_time_end'] ?? null) !== null) {
            $obj->expirationTimeEnd = (int) $v;
        }
        if (($v = $data['ip_act_id'] ?? null) !== null) {
            $obj->ipActId = (int) $v;
        }
        if (($v = $data['item_show_monitor_url'] ?? null) !== null) {
            $obj->itemShowMonitorUrl = (string) $v;
        }
        if (($v = $data['object_field_info'] ?? null) !== null && is_array($v)) {
            $obj->objectFieldInfo = \Oceanengine\Models\StarDemandCreateChallengeV2RequestDemandInfoObjectFieldInfo::fromArray($v);
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
        if (($v = $data['product_link'] ?? null) !== null) {
            $obj->productLink = (string) $v;
        }
        if (($v = $data['product_name'] ?? null) !== null) {
            $obj->productName = (string) $v;
        }
        if (($v = $data['project_id'] ?? null) !== null) {
            $obj->projectId = (int) $v;
        }
        if (($v = $data['promotion_target'] ?? null) !== null) {
            $obj->promotionTarget = (string) $v;
        }
        return $obj;
    }
}
