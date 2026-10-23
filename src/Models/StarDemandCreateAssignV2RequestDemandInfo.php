<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarDemandCreateAssignV2RequestDemandInfo implements \JsonSerializable
{
    /**
     * 接收任务超时时间（天，1≤x≤365）
     * @var int
     */
    protected ?int $acceptExpirationDay = null;

    /**
     * @var \Oceanengine\Models\StarDemandCreateAssignV2RequestDemandInfoAdSyncConf
     */
    protected ?\Oceanengine\Models\StarDemandCreateAssignV2RequestDemandInfoAdSyncConf $adSyncConf = null;

    /**
     * 附件描述（可包含网盘链接，建议用此项）
     * @var string
     */
    protected ?string $attachmentText = null;

    /**
     * 附件 通过上传材料接口上传的文件名列表
     * @var string[]
     */
    protected ?array $attachments = null;

    /**
     * 品牌名称(50字内)
     * @var string
     */
    protected ?string $brandName = null;

    /**
     * @var \Oceanengine\Models\StarDemandCreateAssignV2RequestDemandInfoCarBrandListInner[]
     */
    protected ?array $carBrandList = null;

    /**
     * 营销场景
     * @var int
     */
    protected ?int $carMarketingSceneType = null;

    /**
     * 组件点击监测链接 https开头的URL
     * @var string
     */
    protected ?string $componentClickMonitorUrl = null;

    /**
     * @var \Oceanengine\Models\StarDemandCreateAssignV2RequestDemandInfoComponentInfo
     */
    protected ?\Oceanengine\Models\StarDemandCreateAssignV2RequestDemandInfoComponentInfo $componentInfo = null;

    /**
     * 联系人姓名
     * @var string
     */
    protected ?string $contactName = null;

    /**
     * 联系人电话
     * @var string
     */
    protected ?string $contactPhone = null;

    /**
     * 需求名称（任务名称60字内）
     * @var string
     */
    protected ?string $demandName = null;

    /**
     * @var \Oceanengine\Models\StarDemandCreateAssignV2RequestDemandInfoDemandRequirement
     */
    protected ?\Oceanengine\Models\StarDemandCreateAssignV2RequestDemandInfoDemandRequirement $demandRequirement = null;

    /**
     * 期望（视频）保留时间（天） 0<x≤365整数
     * @var int
     */
    protected ?int $expectRemainTime = null;

    /**
     * 期望发布时间
     * @var int
     */
    protected ?int $expirationTime = null;

    /**
     * 期望最迟发布时间 unix timestamp，发布时间范围长度不可超过30天
     * @var int
     */
    protected ?int $expirationTimeEnd = null;

    /**
     * 是否跳过脚本环节 (0)或不传：不跳过，(1)：跳过
     * @var int
     */
    protected ?int $ignoreScript = null;

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
     * 直播截止时间
     * @var int
     */
    protected ?int $livestreamDeadline = null;

    /**
     * 所属类目
     * @var string[]
     */
    protected ?array $productCategory = null;

    /**
     * 产品所属行业 [一级行业, 二级行业]
     * @var string[]
     */
    protected ?array $productIndustry = null;

    /**
     * 产品介绍(500字内)
     * @var string
     */
    protected ?string $productInformation = null;

    /**
     * 商品链接
     * @var string
     */
    protected ?string $productLink = null;

    /**
     * 产品名称(40字内)
     * @var string
     */
    protected ?string $productName = null;

    /**
     * 项目ID
     * @var int
     */
    protected ?int $projectId = null;

    /**
     * 星智投预审，0或不传为不开启，1为开启
     * @var int
     */
    protected ?int $xingzhitouPreAudit = null;

    /**
     * 云图行业ID，目前仅支持填一个
     * @var int[]
     */
    protected ?array $yuntuIndustryIds = null;

    /**
     * 品牌列表接口中返回的云图品牌ID
     * @var int
     */
    protected ?int $yuntuMainBrand = null;

    /**
     * 接收任务超时时间（天，1≤x≤365）
     * @return int
     */
    public function getAcceptExpirationDay(): ?int
    {
        return $this->acceptExpirationDay;
    }

    /**
     * 接收任务超时时间（天，1≤x≤365）
     * @param int $acceptExpirationDay
     * @return self
     */
    public function setAcceptExpirationDay(?int $acceptExpirationDay): self
    {
        $this->acceptExpirationDay = $acceptExpirationDay;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarDemandCreateAssignV2RequestDemandInfoAdSyncConf
     */
    public function getAdSyncConf(): ?\Oceanengine\Models\StarDemandCreateAssignV2RequestDemandInfoAdSyncConf
    {
        return $this->adSyncConf;
    }

    /**
     * @param \Oceanengine\Models\StarDemandCreateAssignV2RequestDemandInfoAdSyncConf $adSyncConf
     * @return self
     */
    public function setAdSyncConf(?\Oceanengine\Models\StarDemandCreateAssignV2RequestDemandInfoAdSyncConf $adSyncConf): self
    {
        $this->adSyncConf = $adSyncConf;
        return $this;
    }

    /**
     * 附件描述（可包含网盘链接，建议用此项）
     * @return string
     */
    public function getAttachmentText(): ?string
    {
        return $this->attachmentText;
    }

    /**
     * 附件描述（可包含网盘链接，建议用此项）
     * @param string $attachmentText
     * @return self
     */
    public function setAttachmentText(?string $attachmentText): self
    {
        $this->attachmentText = $attachmentText;
        return $this;
    }

    /**
     * 附件 通过上传材料接口上传的文件名列表
     * @return string[]
     */
    public function getAttachments(): ?array
    {
        return $this->attachments;
    }

    /**
     * 附件 通过上传材料接口上传的文件名列表
     * @param string[] $attachments
     * @return self
     */
    public function setAttachments(?array $attachments): self
    {
        $this->attachments = $attachments;
        return $this;
    }

    /**
     * 品牌名称(50字内)
     * @return string
     */
    public function getBrandName(): ?string
    {
        return $this->brandName;
    }

    /**
     * 品牌名称(50字内)
     * @param string $brandName
     * @return self
     */
    public function setBrandName(?string $brandName): self
    {
        $this->brandName = $brandName;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarDemandCreateAssignV2RequestDemandInfoCarBrandListInner[]
     */
    public function getCarBrandList(): ?array
    {
        return $this->carBrandList;
    }

    /**
     * @param \Oceanengine\Models\StarDemandCreateAssignV2RequestDemandInfoCarBrandListInner[] $carBrandList
     * @return self
     */
    public function setCarBrandList(?array $carBrandList): self
    {
        $this->carBrandList = $carBrandList;
        return $this;
    }

    /**
     * 营销场景
     * @return int
     */
    public function getCarMarketingSceneType(): ?int
    {
        return $this->carMarketingSceneType;
    }

    /**
     * 营销场景
     * @param int $carMarketingSceneType
     * @return self
     */
    public function setCarMarketingSceneType(?int $carMarketingSceneType): self
    {
        $this->carMarketingSceneType = $carMarketingSceneType;
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
     * @return \Oceanengine\Models\StarDemandCreateAssignV2RequestDemandInfoComponentInfo
     */
    public function getComponentInfo(): ?\Oceanengine\Models\StarDemandCreateAssignV2RequestDemandInfoComponentInfo
    {
        return $this->componentInfo;
    }

    /**
     * @param \Oceanengine\Models\StarDemandCreateAssignV2RequestDemandInfoComponentInfo $componentInfo
     * @return self
     */
    public function setComponentInfo(?\Oceanengine\Models\StarDemandCreateAssignV2RequestDemandInfoComponentInfo $componentInfo): self
    {
        $this->componentInfo = $componentInfo;
        return $this;
    }

    /**
     * 联系人姓名
     * @return string
     */
    public function getContactName(): ?string
    {
        return $this->contactName;
    }

    /**
     * 联系人姓名
     * @param string $contactName
     * @return self
     */
    public function setContactName(?string $contactName): self
    {
        $this->contactName = $contactName;
        return $this;
    }

    /**
     * 联系人电话
     * @return string
     */
    public function getContactPhone(): ?string
    {
        return $this->contactPhone;
    }

    /**
     * 联系人电话
     * @param string $contactPhone
     * @return self
     */
    public function setContactPhone(?string $contactPhone): self
    {
        $this->contactPhone = $contactPhone;
        return $this;
    }

    /**
     * 需求名称（任务名称60字内）
     * @return string
     */
    public function getDemandName(): ?string
    {
        return $this->demandName;
    }

    /**
     * 需求名称（任务名称60字内）
     * @param string $demandName
     * @return self
     */
    public function setDemandName(?string $demandName): self
    {
        $this->demandName = $demandName;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarDemandCreateAssignV2RequestDemandInfoDemandRequirement
     */
    public function getDemandRequirement(): ?\Oceanengine\Models\StarDemandCreateAssignV2RequestDemandInfoDemandRequirement
    {
        return $this->demandRequirement;
    }

    /**
     * @param \Oceanengine\Models\StarDemandCreateAssignV2RequestDemandInfoDemandRequirement $demandRequirement
     * @return self
     */
    public function setDemandRequirement(?\Oceanengine\Models\StarDemandCreateAssignV2RequestDemandInfoDemandRequirement $demandRequirement): self
    {
        $this->demandRequirement = $demandRequirement;
        return $this;
    }

    /**
     * 期望（视频）保留时间（天） 0<x≤365整数
     * @return int
     */
    public function getExpectRemainTime(): ?int
    {
        return $this->expectRemainTime;
    }

    /**
     * 期望（视频）保留时间（天） 0<x≤365整数
     * @param int $expectRemainTime
     * @return self
     */
    public function setExpectRemainTime(?int $expectRemainTime): self
    {
        $this->expectRemainTime = $expectRemainTime;
        return $this;
    }

    /**
     * 期望发布时间
     * @return int
     */
    public function getExpirationTime(): ?int
    {
        return $this->expirationTime;
    }

    /**
     * 期望发布时间
     * @param int $expirationTime
     * @return self
     */
    public function setExpirationTime(?int $expirationTime): self
    {
        $this->expirationTime = $expirationTime;
        return $this;
    }

    /**
     * 期望最迟发布时间 unix timestamp，发布时间范围长度不可超过30天
     * @return int
     */
    public function getExpirationTimeEnd(): ?int
    {
        return $this->expirationTimeEnd;
    }

    /**
     * 期望最迟发布时间 unix timestamp，发布时间范围长度不可超过30天
     * @param int $expirationTimeEnd
     * @return self
     */
    public function setExpirationTimeEnd(?int $expirationTimeEnd): self
    {
        $this->expirationTimeEnd = $expirationTimeEnd;
        return $this;
    }

    /**
     * 是否跳过脚本环节 (0)或不传：不跳过，(1)：跳过
     * @return int
     */
    public function getIgnoreScript(): ?int
    {
        return $this->ignoreScript;
    }

    /**
     * 是否跳过脚本环节 (0)或不传：不跳过，(1)：跳过
     * @param int $ignoreScript
     * @return self
     */
    public function setIgnoreScript(?int $ignoreScript): self
    {
        $this->ignoreScript = $ignoreScript;
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
     * 直播截止时间
     * @return int
     */
    public function getLivestreamDeadline(): ?int
    {
        return $this->livestreamDeadline;
    }

    /**
     * 直播截止时间
     * @param int $livestreamDeadline
     * @return self
     */
    public function setLivestreamDeadline(?int $livestreamDeadline): self
    {
        $this->livestreamDeadline = $livestreamDeadline;
        return $this;
    }

    /**
     * 所属类目
     * @return string[]
     */
    public function getProductCategory(): ?array
    {
        return $this->productCategory;
    }

    /**
     * 所属类目
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
     * 产品介绍(500字内)
     * @return string
     */
    public function getProductInformation(): ?string
    {
        return $this->productInformation;
    }

    /**
     * 产品介绍(500字内)
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
     * 产品名称(40字内)
     * @return string
     */
    public function getProductName(): ?string
    {
        return $this->productName;
    }

    /**
     * 产品名称(40字内)
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
     * 星智投预审，0或不传为不开启，1为开启
     * @return int
     */
    public function getXingzhitouPreAudit(): ?int
    {
        return $this->xingzhitouPreAudit;
    }

    /**
     * 星智投预审，0或不传为不开启，1为开启
     * @param int $xingzhitouPreAudit
     * @return self
     */
    public function setXingzhitouPreAudit(?int $xingzhitouPreAudit): self
    {
        $this->xingzhitouPreAudit = $xingzhitouPreAudit;
        return $this;
    }

    /**
     * 云图行业ID，目前仅支持填一个
     * @return int[]
     */
    public function getYuntuIndustryIds(): ?array
    {
        return $this->yuntuIndustryIds;
    }

    /**
     * 云图行业ID，目前仅支持填一个
     * @param int[] $yuntuIndustryIds
     * @return self
     */
    public function setYuntuIndustryIds(?array $yuntuIndustryIds): self
    {
        $this->yuntuIndustryIds = $yuntuIndustryIds;
        return $this;
    }

    /**
     * 品牌列表接口中返回的云图品牌ID
     * @return int
     */
    public function getYuntuMainBrand(): ?int
    {
        return $this->yuntuMainBrand;
    }

    /**
     * 品牌列表接口中返回的云图品牌ID
     * @param int $yuntuMainBrand
     * @return self
     */
    public function setYuntuMainBrand(?int $yuntuMainBrand): self
    {
        $this->yuntuMainBrand = $yuntuMainBrand;
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
        if ($this->brandName !== null) {
            $result['brand_name'] = $this->brandName;
        }
        if ($this->carBrandList !== null) {
            $result['car_brand_list'] = $this->carBrandList;
        }
        if ($this->carMarketingSceneType !== null) {
            $result['car_marketing_scene_type'] = $this->carMarketingSceneType;
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
        if ($this->demandRequirement !== null) {
            $result['demand_requirement'] = $this->demandRequirement;
        }
        if ($this->expectRemainTime !== null) {
            $result['expect_remain_time'] = $this->expectRemainTime;
        }
        if ($this->expirationTime !== null) {
            $result['expiration_time'] = $this->expirationTime;
        }
        if ($this->expirationTimeEnd !== null) {
            $result['expiration_time_end'] = $this->expirationTimeEnd;
        }
        if ($this->ignoreScript !== null) {
            $result['ignore_script'] = $this->ignoreScript;
        }
        if ($this->ipActId !== null) {
            $result['ip_act_id'] = $this->ipActId;
        }
        if ($this->itemShowMonitorUrl !== null) {
            $result['item_show_monitor_url'] = $this->itemShowMonitorUrl;
        }
        if ($this->livestreamDeadline !== null) {
            $result['livestream_deadline'] = $this->livestreamDeadline;
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
        if ($this->xingzhitouPreAudit !== null) {
            $result['xingzhitou_pre_audit'] = $this->xingzhitouPreAudit;
        }
        if ($this->yuntuIndustryIds !== null) {
            $result['yuntu_industry_ids'] = $this->yuntuIndustryIds;
        }
        if ($this->yuntuMainBrand !== null) {
            $result['yuntu_main_brand'] = $this->yuntuMainBrand;
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
            $obj->adSyncConf = \Oceanengine\Models\StarDemandCreateAssignV2RequestDemandInfoAdSyncConf::fromArray($v);
        }
        if (($v = $data['attachment_text'] ?? null) !== null) {
            $obj->attachmentText = (string) $v;
        }
        if (($v = $data['attachments'] ?? null) !== null && is_array($v)) {
            $obj->attachments = $v;
        }
        if (($v = $data['brand_name'] ?? null) !== null) {
            $obj->brandName = (string) $v;
        }
        if (($v = $data['car_brand_list'] ?? null) !== null && is_array($v)) {
            $obj->carBrandList = array_map(fn ($vv) => \Oceanengine\Models\StarDemandCreateAssignV2RequestDemandInfoCarBrandListInner::fromArray($vv), $v);
        }
        if (($v = $data['car_marketing_scene_type'] ?? null) !== null) {
            $obj->carMarketingSceneType = (int) $v;
        }
        if (($v = $data['component_click_monitor_url'] ?? null) !== null) {
            $obj->componentClickMonitorUrl = (string) $v;
        }
        if (($v = $data['component_info'] ?? null) !== null && is_array($v)) {
            $obj->componentInfo = \Oceanengine\Models\StarDemandCreateAssignV2RequestDemandInfoComponentInfo::fromArray($v);
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
        if (($v = $data['demand_requirement'] ?? null) !== null && is_array($v)) {
            $obj->demandRequirement = \Oceanengine\Models\StarDemandCreateAssignV2RequestDemandInfoDemandRequirement::fromArray($v);
        }
        if (($v = $data['expect_remain_time'] ?? null) !== null) {
            $obj->expectRemainTime = (int) $v;
        }
        if (($v = $data['expiration_time'] ?? null) !== null) {
            $obj->expirationTime = (int) $v;
        }
        if (($v = $data['expiration_time_end'] ?? null) !== null) {
            $obj->expirationTimeEnd = (int) $v;
        }
        if (($v = $data['ignore_script'] ?? null) !== null) {
            $obj->ignoreScript = (int) $v;
        }
        if (($v = $data['ip_act_id'] ?? null) !== null) {
            $obj->ipActId = (int) $v;
        }
        if (($v = $data['item_show_monitor_url'] ?? null) !== null) {
            $obj->itemShowMonitorUrl = (string) $v;
        }
        if (($v = $data['livestream_deadline'] ?? null) !== null) {
            $obj->livestreamDeadline = (int) $v;
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
        if (($v = $data['xingzhitou_pre_audit'] ?? null) !== null) {
            $obj->xingzhitouPreAudit = (int) $v;
        }
        if (($v = $data['yuntu_industry_ids'] ?? null) !== null && is_array($v)) {
            $obj->yuntuIndustryIds = $v;
        }
        if (($v = $data['yuntu_main_brand'] ?? null) !== null) {
            $obj->yuntuMainBrand = (int) $v;
        }
        return $obj;
    }
}
