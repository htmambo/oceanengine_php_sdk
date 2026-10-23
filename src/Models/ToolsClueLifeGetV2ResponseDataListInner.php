<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsClueLifeGetV2ResponseDataListInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ToolsClueLifeGetV2DataListActionType
     */
    protected ?string $actionType = null;

    /**
     * @var \Oceanengine\Models\ToolsClueLifeGetV2DataListAdType
     */
    protected ?string $adType = null;

    /**
     * 详细地址
     * @var string
     */
    protected ?string $address = null;

    /**
     * 广告主名
     * @var string
     */
    protected ?string $advertiserName = null;

    /**
     * 年龄
     * @var int
     */
    protected ?int $age = null;

    /**
     * @var \Oceanengine\Models\ToolsClueLifeGetV2DataListAllocationStatus
     */
    protected ?string $allocationStatus = null;

    /**
     * 内容创作者抖音号
     * @var string
     */
    protected ?string $authorAwemeId = null;

    /**
     * 内容创作者昵称
     * @var string
     */
    protected ?string $authorNickname = null;

    /**
     * 内容创作者角色，包括\"商家\",\"职人\",\"达人\",\"星图达人\"
     * @var string
     */
    protected ?string $authorRole = null;

    /**
     * 线索所属城市name
     * @var string
     */
    protected ?string $autoCityName = null;

    /**
     * 线索所属省份name
     * @var string
     */
    protected ?string $autoProvinceName = null;

    /**
     * 图文id
     * @var int
     */
    protected ?int $carouselId = null;

    /**
     * 用户填写城市
     * @var string
     */
    protected ?string $cityName = null;

    /**
     * 线索ID
     * @var string
     */
    protected ?string $clueId = null;

    /**
     * 线索意向，格式 json
     * @var string
     */
    protected ?string $clueIntention = null;

    /**
     * 所属人姓名
     * @var string
     */
    protected ?string $clueOwnerName = null;

    /**
     * 线索返回状态：正常 or 账户状态异常
     * @var string
     */
    protected ?string $clueReturnStatus = null;

    /**
     * @var \Oceanengine\Models\ToolsClueLifeGetV2DataListClueType
     */
    protected ?string $clueType = null;

    /**
     * 营销类型
     * @var int[]
     */
    protected ?array $componentEventTypeTags = null;

    /**
     * 内容ID
     * @var string
     */
    protected ?string $contentId = null;

    /**
     * @var \Oceanengine\Models\ToolsClueLifeGetV2DataListConvertStatus
     */
    protected ?string $convertStatus = null;

    /**
     * 区县，取值同 county_name 命名与飞鱼保持一致
     * @var string
     */
    protected ?string $countryName = null;

    /**
     * 用户填写区县
     * @var string
     */
    protected ?string $countyName = null;

    /**
     * 线索创建时间，如：2020-04-29 00:00:00
     * @var string
     */
    protected ?string $createTimeDetail = null;

    /**
     * 成单金额
     * @var string
     */
    protected ?string $dealSubAmount = null;

    /**
     * @var \Oceanengine\Models\ToolsClueLifeGetV2DataListEffectiveState
     */
    protected ?string $effectiveState = null;

    /**
     * @var \Oceanengine\Models\ToolsClueLifeGetV2DataListEffectiveStateName
     */
    protected ?string $effectiveStateName = null;

    /**
     * 扩展字段
     * @var string
     */
    protected ?string $extInfo = null;

    /**
     * @var \Oceanengine\Models\ToolsClueLifeGetV2DataListFlowEntrance
     */
    protected ?string $flowEntrance = null;

    /**
     * @var \Oceanengine\Models\ToolsClueLifeGetV2DataListFlowType
     */
    protected ?string $flowType = null;

    /**
     * 跟进账户ID
     * @var string
     */
    protected ?string $followLifeAccountId = null;

    /**
     * 跟进账户名称
     * @var string
     */
    protected ?string $followLifeAccountName = null;

    /**
     * @var \Oceanengine\Models\ToolsClueLifeGetV2DataListFollowLifeAccountType
     */
    protected ?string $followLifeAccountType = null;

    /**
     * 跟进门店id
     * @var string
     */
    protected ?string $followPoiId = null;

    /**
     * @var \Oceanengine\Models\ToolsClueLifeGetV2DataListFollowStateName
     */
    protected ?string $followStateName = null;

    /**
     * @var \Oceanengine\Models\ToolsClueLifeGetV2DataListGender
     */
    protected ?string $gender = null;

    /**
     * 意向门店名称
     * @var string
     */
    protected ?string $intentionLifeAccountName = null;

    /**
     * 意向门店id
     * @var string
     */
    protected ?string $intentionPoiId = null;

    /**
     * @var \Oceanengine\Models\ToolsClueLifeGetV2DataListIsPrivateClue
     */
    protected ?string $isPrivateClue = null;

    /**
     * @var \Oceanengine\Models\ToolsClueLifeGetV2DataListLeadsPage
     */
    protected ?string $leadsPage = null;

    /**
     * 广告主ID
     * @var string
     */
    protected ?string $localAccountId = null;

    /**
     * 线索修改时间，如：2020-04-29 00:00:00
     * @var string
     */
    protected ?string $modifyTime = null;

    /**
     * 姓名
     * @var string
     */
    protected ?string $name = null;

    /**
     * 订单ID
     * @var int
     */
    protected ?int $orderId = null;

    /**
     * 订单状态，包括交易成功、交易关闭、部分支付、支付成功、履约中
     * @var string
     */
    protected ?string $orderStatus = null;

    /**
     * 商品id
     * @var string
     */
    protected ?string $productId = null;

    /**
     * 商品名称
     * @var string
     */
    protected ?string $productName = null;

    /**
     * @var \Oceanengine\Models\ToolsClueLifeGetV2DataListProductType
     */
    protected ?string $productType = null;

    /**
     * 项目ID
     * @var int
     */
    protected ?int $projectId = null;

    /**
     * 广告ID
     * @var int
     */
    protected ?int $promotionId = null;

    /**
     * 广告名称
     * @var string
     */
    protected ?string $promotionName = null;

    /**
     * 用户填写省份
     * @var string
     */
    protected ?string $provinceName = null;

    /**
     * 买单补贴券信息
     * @var string
     */
    protected ?string $qcpxTicketInfo = null;

    /**
     * @var \Oceanengine\Models\ToolsClueLifeGetV2DataListQcpxTicketStatus
     */
    protected ?string $qcpxTicketStatus = null;

    /**
     * 商家备注
     * @var string
     */
    protected ?string $remark = null;

    /**
     * 商家表单自定义的字段信息，及其他线索相关信息
     * @var string
     */
    protected ?string $remarkDict = null;

    /**
     * 当前线索对应广告的请求id
     * @var string
     */
    protected ?string $reqId = null;

    /**
     * 搜索关键词
     * @var string
     */
    protected ?string $searchBidWord = null;

    /**
     * 来源职人号抖音号
     * @var string
     */
    protected ?string $sourceCraftsmanDouyinId = null;

    /**
     * 来源职人号昵称
     * @var string
     */
    protected ?string $sourceCraftsmanNickname = null;

    /**
     * 接待抖音号
     * @var string
     */
    protected ?string $staffAwemeId = null;

    /**
     * 接待客服名称
     * @var string
     */
    protected ?string $staffCommerceNickname = null;

    /**
     * 接待抖音昵称
     * @var string
     */
    protected ?string $staffNickname = null;

    /**
     * 线索被打上的系统标签，是一个标签项的数组
     * @var string[]
     */
    protected ?array $systemTags = null;

    /**
     * 线索被打上的人工标签，是一个标签项的数组，包括自定义标签和行业标签
     * @var string[]
     */
    protected ?array $tags = null;

    /**
     * 客户留资手机号。当团购订单退款后，不可获取明文手机号。
     * @var string
     */
    protected ?string $telephone = null;

    /**
     * 标题id
     * @var int
     */
    protected ?int $titleId = null;

    /**
     * 线索工具ID
     * @var string
     */
    protected ?string $toolId = null;

    /**
     * 视频id
     * @var int
     */
    protected ?int $videoId = null;

    /**
     * 客户留资微信号
     * @var string
     */
    protected ?string $weixin = null;

    /**
     * @return \Oceanengine\Models\ToolsClueLifeGetV2DataListActionType
     */
    public function getActionType(): ?string
    {
        return $this->actionType;
    }

    /**
     * @param \Oceanengine\Models\ToolsClueLifeGetV2DataListActionType $actionType
     * @return self
     */
    public function setActionType(?string $actionType): self
    {
        $this->actionType = $actionType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsClueLifeGetV2DataListAdType
     */
    public function getAdType(): ?string
    {
        return $this->adType;
    }

    /**
     * @param \Oceanengine\Models\ToolsClueLifeGetV2DataListAdType $adType
     * @return self
     */
    public function setAdType(?string $adType): self
    {
        $this->adType = $adType;
        return $this;
    }

    /**
     * 详细地址
     * @return string
     */
    public function getAddress(): ?string
    {
        return $this->address;
    }

    /**
     * 详细地址
     * @param string $address
     * @return self
     */
    public function setAddress(?string $address): self
    {
        $this->address = $address;
        return $this;
    }

    /**
     * 广告主名
     * @return string
     */
    public function getAdvertiserName(): ?string
    {
        return $this->advertiserName;
    }

    /**
     * 广告主名
     * @param string $advertiserName
     * @return self
     */
    public function setAdvertiserName(?string $advertiserName): self
    {
        $this->advertiserName = $advertiserName;
        return $this;
    }

    /**
     * 年龄
     * @return int
     */
    public function getAge(): ?int
    {
        return $this->age;
    }

    /**
     * 年龄
     * @param int $age
     * @return self
     */
    public function setAge(?int $age): self
    {
        $this->age = $age;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsClueLifeGetV2DataListAllocationStatus
     */
    public function getAllocationStatus(): ?string
    {
        return $this->allocationStatus;
    }

    /**
     * @param \Oceanengine\Models\ToolsClueLifeGetV2DataListAllocationStatus $allocationStatus
     * @return self
     */
    public function setAllocationStatus(?string $allocationStatus): self
    {
        $this->allocationStatus = $allocationStatus;
        return $this;
    }

    /**
     * 内容创作者抖音号
     * @return string
     */
    public function getAuthorAwemeId(): ?string
    {
        return $this->authorAwemeId;
    }

    /**
     * 内容创作者抖音号
     * @param string $authorAwemeId
     * @return self
     */
    public function setAuthorAwemeId(?string $authorAwemeId): self
    {
        $this->authorAwemeId = $authorAwemeId;
        return $this;
    }

    /**
     * 内容创作者昵称
     * @return string
     */
    public function getAuthorNickname(): ?string
    {
        return $this->authorNickname;
    }

    /**
     * 内容创作者昵称
     * @param string $authorNickname
     * @return self
     */
    public function setAuthorNickname(?string $authorNickname): self
    {
        $this->authorNickname = $authorNickname;
        return $this;
    }

    /**
     * 内容创作者角色，包括\"商家\",\"职人\",\"达人\",\"星图达人\"
     * @return string
     */
    public function getAuthorRole(): ?string
    {
        return $this->authorRole;
    }

    /**
     * 内容创作者角色，包括\"商家\",\"职人\",\"达人\",\"星图达人\"
     * @param string $authorRole
     * @return self
     */
    public function setAuthorRole(?string $authorRole): self
    {
        $this->authorRole = $authorRole;
        return $this;
    }

    /**
     * 线索所属城市name
     * @return string
     */
    public function getAutoCityName(): ?string
    {
        return $this->autoCityName;
    }

    /**
     * 线索所属城市name
     * @param string $autoCityName
     * @return self
     */
    public function setAutoCityName(?string $autoCityName): self
    {
        $this->autoCityName = $autoCityName;
        return $this;
    }

    /**
     * 线索所属省份name
     * @return string
     */
    public function getAutoProvinceName(): ?string
    {
        return $this->autoProvinceName;
    }

    /**
     * 线索所属省份name
     * @param string $autoProvinceName
     * @return self
     */
    public function setAutoProvinceName(?string $autoProvinceName): self
    {
        $this->autoProvinceName = $autoProvinceName;
        return $this;
    }

    /**
     * 图文id
     * @return int
     */
    public function getCarouselId(): ?int
    {
        return $this->carouselId;
    }

    /**
     * 图文id
     * @param int $carouselId
     * @return self
     */
    public function setCarouselId(?int $carouselId): self
    {
        $this->carouselId = $carouselId;
        return $this;
    }

    /**
     * 用户填写城市
     * @return string
     */
    public function getCityName(): ?string
    {
        return $this->cityName;
    }

    /**
     * 用户填写城市
     * @param string $cityName
     * @return self
     */
    public function setCityName(?string $cityName): self
    {
        $this->cityName = $cityName;
        return $this;
    }

    /**
     * 线索ID
     * @return string
     */
    public function getClueId(): ?string
    {
        return $this->clueId;
    }

    /**
     * 线索ID
     * @param string $clueId
     * @return self
     */
    public function setClueId(?string $clueId): self
    {
        $this->clueId = $clueId;
        return $this;
    }

    /**
     * 线索意向，格式 json
     * @return string
     */
    public function getClueIntention(): ?string
    {
        return $this->clueIntention;
    }

    /**
     * 线索意向，格式 json
     * @param string $clueIntention
     * @return self
     */
    public function setClueIntention(?string $clueIntention): self
    {
        $this->clueIntention = $clueIntention;
        return $this;
    }

    /**
     * 所属人姓名
     * @return string
     */
    public function getClueOwnerName(): ?string
    {
        return $this->clueOwnerName;
    }

    /**
     * 所属人姓名
     * @param string $clueOwnerName
     * @return self
     */
    public function setClueOwnerName(?string $clueOwnerName): self
    {
        $this->clueOwnerName = $clueOwnerName;
        return $this;
    }

    /**
     * 线索返回状态：正常 or 账户状态异常
     * @return string
     */
    public function getClueReturnStatus(): ?string
    {
        return $this->clueReturnStatus;
    }

    /**
     * 线索返回状态：正常 or 账户状态异常
     * @param string $clueReturnStatus
     * @return self
     */
    public function setClueReturnStatus(?string $clueReturnStatus): self
    {
        $this->clueReturnStatus = $clueReturnStatus;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsClueLifeGetV2DataListClueType
     */
    public function getClueType(): ?string
    {
        return $this->clueType;
    }

    /**
     * @param \Oceanengine\Models\ToolsClueLifeGetV2DataListClueType $clueType
     * @return self
     */
    public function setClueType(?string $clueType): self
    {
        $this->clueType = $clueType;
        return $this;
    }

    /**
     * 营销类型
     * @return int[]
     */
    public function getComponentEventTypeTags(): ?array
    {
        return $this->componentEventTypeTags;
    }

    /**
     * 营销类型
     * @param int[] $componentEventTypeTags
     * @return self
     */
    public function setComponentEventTypeTags(?array $componentEventTypeTags): self
    {
        $this->componentEventTypeTags = $componentEventTypeTags;
        return $this;
    }

    /**
     * 内容ID
     * @return string
     */
    public function getContentId(): ?string
    {
        return $this->contentId;
    }

    /**
     * 内容ID
     * @param string $contentId
     * @return self
     */
    public function setContentId(?string $contentId): self
    {
        $this->contentId = $contentId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsClueLifeGetV2DataListConvertStatus
     */
    public function getConvertStatus(): ?string
    {
        return $this->convertStatus;
    }

    /**
     * @param \Oceanengine\Models\ToolsClueLifeGetV2DataListConvertStatus $convertStatus
     * @return self
     */
    public function setConvertStatus(?string $convertStatus): self
    {
        $this->convertStatus = $convertStatus;
        return $this;
    }

    /**
     * 区县，取值同 county_name 命名与飞鱼保持一致
     * @return string
     */
    public function getCountryName(): ?string
    {
        return $this->countryName;
    }

    /**
     * 区县，取值同 county_name 命名与飞鱼保持一致
     * @param string $countryName
     * @return self
     */
    public function setCountryName(?string $countryName): self
    {
        $this->countryName = $countryName;
        return $this;
    }

    /**
     * 用户填写区县
     * @return string
     */
    public function getCountyName(): ?string
    {
        return $this->countyName;
    }

    /**
     * 用户填写区县
     * @param string $countyName
     * @return self
     */
    public function setCountyName(?string $countyName): self
    {
        $this->countyName = $countyName;
        return $this;
    }

    /**
     * 线索创建时间，如：2020-04-29 00:00:00
     * @return string
     */
    public function getCreateTimeDetail(): ?string
    {
        return $this->createTimeDetail;
    }

    /**
     * 线索创建时间，如：2020-04-29 00:00:00
     * @param string $createTimeDetail
     * @return self
     */
    public function setCreateTimeDetail(?string $createTimeDetail): self
    {
        $this->createTimeDetail = $createTimeDetail;
        return $this;
    }

    /**
     * 成单金额
     * @return string
     */
    public function getDealSubAmount(): ?string
    {
        return $this->dealSubAmount;
    }

    /**
     * 成单金额
     * @param string $dealSubAmount
     * @return self
     */
    public function setDealSubAmount(?string $dealSubAmount): self
    {
        $this->dealSubAmount = $dealSubAmount;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsClueLifeGetV2DataListEffectiveState
     */
    public function getEffectiveState(): ?string
    {
        return $this->effectiveState;
    }

    /**
     * @param \Oceanengine\Models\ToolsClueLifeGetV2DataListEffectiveState $effectiveState
     * @return self
     */
    public function setEffectiveState(?string $effectiveState): self
    {
        $this->effectiveState = $effectiveState;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsClueLifeGetV2DataListEffectiveStateName
     */
    public function getEffectiveStateName(): ?string
    {
        return $this->effectiveStateName;
    }

    /**
     * @param \Oceanengine\Models\ToolsClueLifeGetV2DataListEffectiveStateName $effectiveStateName
     * @return self
     */
    public function setEffectiveStateName(?string $effectiveStateName): self
    {
        $this->effectiveStateName = $effectiveStateName;
        return $this;
    }

    /**
     * 扩展字段
     * @return string
     */
    public function getExtInfo(): ?string
    {
        return $this->extInfo;
    }

    /**
     * 扩展字段
     * @param string $extInfo
     * @return self
     */
    public function setExtInfo(?string $extInfo): self
    {
        $this->extInfo = $extInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsClueLifeGetV2DataListFlowEntrance
     */
    public function getFlowEntrance(): ?string
    {
        return $this->flowEntrance;
    }

    /**
     * @param \Oceanengine\Models\ToolsClueLifeGetV2DataListFlowEntrance $flowEntrance
     * @return self
     */
    public function setFlowEntrance(?string $flowEntrance): self
    {
        $this->flowEntrance = $flowEntrance;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsClueLifeGetV2DataListFlowType
     */
    public function getFlowType(): ?string
    {
        return $this->flowType;
    }

    /**
     * @param \Oceanengine\Models\ToolsClueLifeGetV2DataListFlowType $flowType
     * @return self
     */
    public function setFlowType(?string $flowType): self
    {
        $this->flowType = $flowType;
        return $this;
    }

    /**
     * 跟进账户ID
     * @return string
     */
    public function getFollowLifeAccountId(): ?string
    {
        return $this->followLifeAccountId;
    }

    /**
     * 跟进账户ID
     * @param string $followLifeAccountId
     * @return self
     */
    public function setFollowLifeAccountId(?string $followLifeAccountId): self
    {
        $this->followLifeAccountId = $followLifeAccountId;
        return $this;
    }

    /**
     * 跟进账户名称
     * @return string
     */
    public function getFollowLifeAccountName(): ?string
    {
        return $this->followLifeAccountName;
    }

    /**
     * 跟进账户名称
     * @param string $followLifeAccountName
     * @return self
     */
    public function setFollowLifeAccountName(?string $followLifeAccountName): self
    {
        $this->followLifeAccountName = $followLifeAccountName;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsClueLifeGetV2DataListFollowLifeAccountType
     */
    public function getFollowLifeAccountType(): ?string
    {
        return $this->followLifeAccountType;
    }

    /**
     * @param \Oceanengine\Models\ToolsClueLifeGetV2DataListFollowLifeAccountType $followLifeAccountType
     * @return self
     */
    public function setFollowLifeAccountType(?string $followLifeAccountType): self
    {
        $this->followLifeAccountType = $followLifeAccountType;
        return $this;
    }

    /**
     * 跟进门店id
     * @return string
     */
    public function getFollowPoiId(): ?string
    {
        return $this->followPoiId;
    }

    /**
     * 跟进门店id
     * @param string $followPoiId
     * @return self
     */
    public function setFollowPoiId(?string $followPoiId): self
    {
        $this->followPoiId = $followPoiId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsClueLifeGetV2DataListFollowStateName
     */
    public function getFollowStateName(): ?string
    {
        return $this->followStateName;
    }

    /**
     * @param \Oceanengine\Models\ToolsClueLifeGetV2DataListFollowStateName $followStateName
     * @return self
     */
    public function setFollowStateName(?string $followStateName): self
    {
        $this->followStateName = $followStateName;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsClueLifeGetV2DataListGender
     */
    public function getGender(): ?string
    {
        return $this->gender;
    }

    /**
     * @param \Oceanengine\Models\ToolsClueLifeGetV2DataListGender $gender
     * @return self
     */
    public function setGender(?string $gender): self
    {
        $this->gender = $gender;
        return $this;
    }

    /**
     * 意向门店名称
     * @return string
     */
    public function getIntentionLifeAccountName(): ?string
    {
        return $this->intentionLifeAccountName;
    }

    /**
     * 意向门店名称
     * @param string $intentionLifeAccountName
     * @return self
     */
    public function setIntentionLifeAccountName(?string $intentionLifeAccountName): self
    {
        $this->intentionLifeAccountName = $intentionLifeAccountName;
        return $this;
    }

    /**
     * 意向门店id
     * @return string
     */
    public function getIntentionPoiId(): ?string
    {
        return $this->intentionPoiId;
    }

    /**
     * 意向门店id
     * @param string $intentionPoiId
     * @return self
     */
    public function setIntentionPoiId(?string $intentionPoiId): self
    {
        $this->intentionPoiId = $intentionPoiId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsClueLifeGetV2DataListIsPrivateClue
     */
    public function getIsPrivateClue(): ?string
    {
        return $this->isPrivateClue;
    }

    /**
     * @param \Oceanengine\Models\ToolsClueLifeGetV2DataListIsPrivateClue $isPrivateClue
     * @return self
     */
    public function setIsPrivateClue(?string $isPrivateClue): self
    {
        $this->isPrivateClue = $isPrivateClue;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsClueLifeGetV2DataListLeadsPage
     */
    public function getLeadsPage(): ?string
    {
        return $this->leadsPage;
    }

    /**
     * @param \Oceanengine\Models\ToolsClueLifeGetV2DataListLeadsPage $leadsPage
     * @return self
     */
    public function setLeadsPage(?string $leadsPage): self
    {
        $this->leadsPage = $leadsPage;
        return $this;
    }

    /**
     * 广告主ID
     * @return string
     */
    public function getLocalAccountId(): ?string
    {
        return $this->localAccountId;
    }

    /**
     * 广告主ID
     * @param string $localAccountId
     * @return self
     */
    public function setLocalAccountId(?string $localAccountId): self
    {
        $this->localAccountId = $localAccountId;
        return $this;
    }

    /**
     * 线索修改时间，如：2020-04-29 00:00:00
     * @return string
     */
    public function getModifyTime(): ?string
    {
        return $this->modifyTime;
    }

    /**
     * 线索修改时间，如：2020-04-29 00:00:00
     * @param string $modifyTime
     * @return self
     */
    public function setModifyTime(?string $modifyTime): self
    {
        $this->modifyTime = $modifyTime;
        return $this;
    }

    /**
     * 姓名
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * 姓名
     * @param string $name
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * 订单ID
     * @return int
     */
    public function getOrderId(): ?int
    {
        return $this->orderId;
    }

    /**
     * 订单ID
     * @param int $orderId
     * @return self
     */
    public function setOrderId(?int $orderId): self
    {
        $this->orderId = $orderId;
        return $this;
    }

    /**
     * 订单状态，包括交易成功、交易关闭、部分支付、支付成功、履约中
     * @return string
     */
    public function getOrderStatus(): ?string
    {
        return $this->orderStatus;
    }

    /**
     * 订单状态，包括交易成功、交易关闭、部分支付、支付成功、履约中
     * @param string $orderStatus
     * @return self
     */
    public function setOrderStatus(?string $orderStatus): self
    {
        $this->orderStatus = $orderStatus;
        return $this;
    }

    /**
     * 商品id
     * @return string
     */
    public function getProductId(): ?string
    {
        return $this->productId;
    }

    /**
     * 商品id
     * @param string $productId
     * @return self
     */
    public function setProductId(?string $productId): self
    {
        $this->productId = $productId;
        return $this;
    }

    /**
     * 商品名称
     * @return string
     */
    public function getProductName(): ?string
    {
        return $this->productName;
    }

    /**
     * 商品名称
     * @param string $productName
     * @return self
     */
    public function setProductName(?string $productName): self
    {
        $this->productName = $productName;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsClueLifeGetV2DataListProductType
     */
    public function getProductType(): ?string
    {
        return $this->productType;
    }

    /**
     * @param \Oceanengine\Models\ToolsClueLifeGetV2DataListProductType $productType
     * @return self
     */
    public function setProductType(?string $productType): self
    {
        $this->productType = $productType;
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
     * 广告ID
     * @return int
     */
    public function getPromotionId(): ?int
    {
        return $this->promotionId;
    }

    /**
     * 广告ID
     * @param int $promotionId
     * @return self
     */
    public function setPromotionId(?int $promotionId): self
    {
        $this->promotionId = $promotionId;
        return $this;
    }

    /**
     * 广告名称
     * @return string
     */
    public function getPromotionName(): ?string
    {
        return $this->promotionName;
    }

    /**
     * 广告名称
     * @param string $promotionName
     * @return self
     */
    public function setPromotionName(?string $promotionName): self
    {
        $this->promotionName = $promotionName;
        return $this;
    }

    /**
     * 用户填写省份
     * @return string
     */
    public function getProvinceName(): ?string
    {
        return $this->provinceName;
    }

    /**
     * 用户填写省份
     * @param string $provinceName
     * @return self
     */
    public function setProvinceName(?string $provinceName): self
    {
        $this->provinceName = $provinceName;
        return $this;
    }

    /**
     * 买单补贴券信息
     * @return string
     */
    public function getQcpxTicketInfo(): ?string
    {
        return $this->qcpxTicketInfo;
    }

    /**
     * 买单补贴券信息
     * @param string $qcpxTicketInfo
     * @return self
     */
    public function setQcpxTicketInfo(?string $qcpxTicketInfo): self
    {
        $this->qcpxTicketInfo = $qcpxTicketInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsClueLifeGetV2DataListQcpxTicketStatus
     */
    public function getQcpxTicketStatus(): ?string
    {
        return $this->qcpxTicketStatus;
    }

    /**
     * @param \Oceanengine\Models\ToolsClueLifeGetV2DataListQcpxTicketStatus $qcpxTicketStatus
     * @return self
     */
    public function setQcpxTicketStatus(?string $qcpxTicketStatus): self
    {
        $this->qcpxTicketStatus = $qcpxTicketStatus;
        return $this;
    }

    /**
     * 商家备注
     * @return string
     */
    public function getRemark(): ?string
    {
        return $this->remark;
    }

    /**
     * 商家备注
     * @param string $remark
     * @return self
     */
    public function setRemark(?string $remark): self
    {
        $this->remark = $remark;
        return $this;
    }

    /**
     * 商家表单自定义的字段信息，及其他线索相关信息
     * @return string
     */
    public function getRemarkDict(): ?string
    {
        return $this->remarkDict;
    }

    /**
     * 商家表单自定义的字段信息，及其他线索相关信息
     * @param string $remarkDict
     * @return self
     */
    public function setRemarkDict(?string $remarkDict): self
    {
        $this->remarkDict = $remarkDict;
        return $this;
    }

    /**
     * 当前线索对应广告的请求id
     * @return string
     */
    public function getReqId(): ?string
    {
        return $this->reqId;
    }

    /**
     * 当前线索对应广告的请求id
     * @param string $reqId
     * @return self
     */
    public function setReqId(?string $reqId): self
    {
        $this->reqId = $reqId;
        return $this;
    }

    /**
     * 搜索关键词
     * @return string
     */
    public function getSearchBidWord(): ?string
    {
        return $this->searchBidWord;
    }

    /**
     * 搜索关键词
     * @param string $searchBidWord
     * @return self
     */
    public function setSearchBidWord(?string $searchBidWord): self
    {
        $this->searchBidWord = $searchBidWord;
        return $this;
    }

    /**
     * 来源职人号抖音号
     * @return string
     */
    public function getSourceCraftsmanDouyinId(): ?string
    {
        return $this->sourceCraftsmanDouyinId;
    }

    /**
     * 来源职人号抖音号
     * @param string $sourceCraftsmanDouyinId
     * @return self
     */
    public function setSourceCraftsmanDouyinId(?string $sourceCraftsmanDouyinId): self
    {
        $this->sourceCraftsmanDouyinId = $sourceCraftsmanDouyinId;
        return $this;
    }

    /**
     * 来源职人号昵称
     * @return string
     */
    public function getSourceCraftsmanNickname(): ?string
    {
        return $this->sourceCraftsmanNickname;
    }

    /**
     * 来源职人号昵称
     * @param string $sourceCraftsmanNickname
     * @return self
     */
    public function setSourceCraftsmanNickname(?string $sourceCraftsmanNickname): self
    {
        $this->sourceCraftsmanNickname = $sourceCraftsmanNickname;
        return $this;
    }

    /**
     * 接待抖音号
     * @return string
     */
    public function getStaffAwemeId(): ?string
    {
        return $this->staffAwemeId;
    }

    /**
     * 接待抖音号
     * @param string $staffAwemeId
     * @return self
     */
    public function setStaffAwemeId(?string $staffAwemeId): self
    {
        $this->staffAwemeId = $staffAwemeId;
        return $this;
    }

    /**
     * 接待客服名称
     * @return string
     */
    public function getStaffCommerceNickname(): ?string
    {
        return $this->staffCommerceNickname;
    }

    /**
     * 接待客服名称
     * @param string $staffCommerceNickname
     * @return self
     */
    public function setStaffCommerceNickname(?string $staffCommerceNickname): self
    {
        $this->staffCommerceNickname = $staffCommerceNickname;
        return $this;
    }

    /**
     * 接待抖音昵称
     * @return string
     */
    public function getStaffNickname(): ?string
    {
        return $this->staffNickname;
    }

    /**
     * 接待抖音昵称
     * @param string $staffNickname
     * @return self
     */
    public function setStaffNickname(?string $staffNickname): self
    {
        $this->staffNickname = $staffNickname;
        return $this;
    }

    /**
     * 线索被打上的系统标签，是一个标签项的数组
     * @return string[]
     */
    public function getSystemTags(): ?array
    {
        return $this->systemTags;
    }

    /**
     * 线索被打上的系统标签，是一个标签项的数组
     * @param string[] $systemTags
     * @return self
     */
    public function setSystemTags(?array $systemTags): self
    {
        $this->systemTags = $systemTags;
        return $this;
    }

    /**
     * 线索被打上的人工标签，是一个标签项的数组，包括自定义标签和行业标签
     * @return string[]
     */
    public function getTags(): ?array
    {
        return $this->tags;
    }

    /**
     * 线索被打上的人工标签，是一个标签项的数组，包括自定义标签和行业标签
     * @param string[] $tags
     * @return self
     */
    public function setTags(?array $tags): self
    {
        $this->tags = $tags;
        return $this;
    }

    /**
     * 客户留资手机号。当团购订单退款后，不可获取明文手机号。
     * @return string
     */
    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    /**
     * 客户留资手机号。当团购订单退款后，不可获取明文手机号。
     * @param string $telephone
     * @return self
     */
    public function setTelephone(?string $telephone): self
    {
        $this->telephone = $telephone;
        return $this;
    }

    /**
     * 标题id
     * @return int
     */
    public function getTitleId(): ?int
    {
        return $this->titleId;
    }

    /**
     * 标题id
     * @param int $titleId
     * @return self
     */
    public function setTitleId(?int $titleId): self
    {
        $this->titleId = $titleId;
        return $this;
    }

    /**
     * 线索工具ID
     * @return string
     */
    public function getToolId(): ?string
    {
        return $this->toolId;
    }

    /**
     * 线索工具ID
     * @param string $toolId
     * @return self
     */
    public function setToolId(?string $toolId): self
    {
        $this->toolId = $toolId;
        return $this;
    }

    /**
     * 视频id
     * @return int
     */
    public function getVideoId(): ?int
    {
        return $this->videoId;
    }

    /**
     * 视频id
     * @param int $videoId
     * @return self
     */
    public function setVideoId(?int $videoId): self
    {
        $this->videoId = $videoId;
        return $this;
    }

    /**
     * 客户留资微信号
     * @return string
     */
    public function getWeixin(): ?string
    {
        return $this->weixin;
    }

    /**
     * 客户留资微信号
     * @param string $weixin
     * @return self
     */
    public function setWeixin(?string $weixin): self
    {
        $this->weixin = $weixin;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->actionType !== null) {
            $result['action_type'] = $this->actionType;
        }
        if ($this->adType !== null) {
            $result['ad_type'] = $this->adType;
        }
        if ($this->address !== null) {
            $result['address'] = $this->address;
        }
        if ($this->advertiserName !== null) {
            $result['advertiser_name'] = $this->advertiserName;
        }
        if ($this->age !== null) {
            $result['age'] = $this->age;
        }
        if ($this->allocationStatus !== null) {
            $result['allocation_status'] = $this->allocationStatus;
        }
        if ($this->authorAwemeId !== null) {
            $result['author_aweme_id'] = $this->authorAwemeId;
        }
        if ($this->authorNickname !== null) {
            $result['author_nickname'] = $this->authorNickname;
        }
        if ($this->authorRole !== null) {
            $result['author_role'] = $this->authorRole;
        }
        if ($this->autoCityName !== null) {
            $result['auto_city_name'] = $this->autoCityName;
        }
        if ($this->autoProvinceName !== null) {
            $result['auto_province_name'] = $this->autoProvinceName;
        }
        if ($this->carouselId !== null) {
            $result['carousel_id'] = $this->carouselId;
        }
        if ($this->cityName !== null) {
            $result['city_name'] = $this->cityName;
        }
        if ($this->clueId !== null) {
            $result['clue_id'] = $this->clueId;
        }
        if ($this->clueIntention !== null) {
            $result['clue_intention'] = $this->clueIntention;
        }
        if ($this->clueOwnerName !== null) {
            $result['clue_owner_name'] = $this->clueOwnerName;
        }
        if ($this->clueReturnStatus !== null) {
            $result['clue_return_status'] = $this->clueReturnStatus;
        }
        if ($this->clueType !== null) {
            $result['clue_type'] = $this->clueType;
        }
        if ($this->componentEventTypeTags !== null) {
            $result['component_event_type_tags'] = $this->componentEventTypeTags;
        }
        if ($this->contentId !== null) {
            $result['content_id'] = $this->contentId;
        }
        if ($this->convertStatus !== null) {
            $result['convert_status'] = $this->convertStatus;
        }
        if ($this->countryName !== null) {
            $result['country_name'] = $this->countryName;
        }
        if ($this->countyName !== null) {
            $result['county_name'] = $this->countyName;
        }
        if ($this->createTimeDetail !== null) {
            $result['create_time_detail'] = $this->createTimeDetail;
        }
        if ($this->dealSubAmount !== null) {
            $result['deal_sub_amount'] = $this->dealSubAmount;
        }
        if ($this->effectiveState !== null) {
            $result['effective_state'] = $this->effectiveState;
        }
        if ($this->effectiveStateName !== null) {
            $result['effective_state_name'] = $this->effectiveStateName;
        }
        if ($this->extInfo !== null) {
            $result['ext_info'] = $this->extInfo;
        }
        if ($this->flowEntrance !== null) {
            $result['flow_entrance'] = $this->flowEntrance;
        }
        if ($this->flowType !== null) {
            $result['flow_type'] = $this->flowType;
        }
        if ($this->followLifeAccountId !== null) {
            $result['follow_life_account_id'] = $this->followLifeAccountId;
        }
        if ($this->followLifeAccountName !== null) {
            $result['follow_life_account_name'] = $this->followLifeAccountName;
        }
        if ($this->followLifeAccountType !== null) {
            $result['follow_life_account_type'] = $this->followLifeAccountType;
        }
        if ($this->followPoiId !== null) {
            $result['follow_poi_id'] = $this->followPoiId;
        }
        if ($this->followStateName !== null) {
            $result['follow_state_name'] = $this->followStateName;
        }
        if ($this->gender !== null) {
            $result['gender'] = $this->gender;
        }
        if ($this->intentionLifeAccountName !== null) {
            $result['intention_life_account_name'] = $this->intentionLifeAccountName;
        }
        if ($this->intentionPoiId !== null) {
            $result['intention_poi_id'] = $this->intentionPoiId;
        }
        if ($this->isPrivateClue !== null) {
            $result['is_private_clue'] = $this->isPrivateClue;
        }
        if ($this->leadsPage !== null) {
            $result['leads_page'] = $this->leadsPage;
        }
        if ($this->localAccountId !== null) {
            $result['local_account_id'] = $this->localAccountId;
        }
        if ($this->modifyTime !== null) {
            $result['modify_time'] = $this->modifyTime;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->orderId !== null) {
            $result['order_id'] = $this->orderId;
        }
        if ($this->orderStatus !== null) {
            $result['order_status'] = $this->orderStatus;
        }
        if ($this->productId !== null) {
            $result['product_id'] = $this->productId;
        }
        if ($this->productName !== null) {
            $result['product_name'] = $this->productName;
        }
        if ($this->productType !== null) {
            $result['product_type'] = $this->productType;
        }
        if ($this->projectId !== null) {
            $result['project_id'] = $this->projectId;
        }
        if ($this->promotionId !== null) {
            $result['promotion_id'] = $this->promotionId;
        }
        if ($this->promotionName !== null) {
            $result['promotion_name'] = $this->promotionName;
        }
        if ($this->provinceName !== null) {
            $result['province_name'] = $this->provinceName;
        }
        if ($this->qcpxTicketInfo !== null) {
            $result['qcpx_ticket_info'] = $this->qcpxTicketInfo;
        }
        if ($this->qcpxTicketStatus !== null) {
            $result['qcpx_ticket_status'] = $this->qcpxTicketStatus;
        }
        if ($this->remark !== null) {
            $result['remark'] = $this->remark;
        }
        if ($this->remarkDict !== null) {
            $result['remark_dict'] = $this->remarkDict;
        }
        if ($this->reqId !== null) {
            $result['req_id'] = $this->reqId;
        }
        if ($this->searchBidWord !== null) {
            $result['search_bid_word'] = $this->searchBidWord;
        }
        if ($this->sourceCraftsmanDouyinId !== null) {
            $result['source_craftsman_douyin_id'] = $this->sourceCraftsmanDouyinId;
        }
        if ($this->sourceCraftsmanNickname !== null) {
            $result['source_craftsman_nickname'] = $this->sourceCraftsmanNickname;
        }
        if ($this->staffAwemeId !== null) {
            $result['staff_aweme_id'] = $this->staffAwemeId;
        }
        if ($this->staffCommerceNickname !== null) {
            $result['staff_commerce_nickname'] = $this->staffCommerceNickname;
        }
        if ($this->staffNickname !== null) {
            $result['staff_nickname'] = $this->staffNickname;
        }
        if ($this->systemTags !== null) {
            $result['system_tags'] = $this->systemTags;
        }
        if ($this->tags !== null) {
            $result['tags'] = $this->tags;
        }
        if ($this->telephone !== null) {
            $result['telephone'] = $this->telephone;
        }
        if ($this->titleId !== null) {
            $result['title_id'] = $this->titleId;
        }
        if ($this->toolId !== null) {
            $result['tool_id'] = $this->toolId;
        }
        if ($this->videoId !== null) {
            $result['video_id'] = $this->videoId;
        }
        if ($this->weixin !== null) {
            $result['weixin'] = $this->weixin;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['action_type'] ?? null) !== null) {
            $obj->actionType = (string) $v;
        }
        if (($v = $data['ad_type'] ?? null) !== null) {
            $obj->adType = (string) $v;
        }
        if (($v = $data['address'] ?? null) !== null) {
            $obj->address = (string) $v;
        }
        if (($v = $data['advertiser_name'] ?? null) !== null) {
            $obj->advertiserName = (string) $v;
        }
        if (($v = $data['age'] ?? null) !== null) {
            $obj->age = (int) $v;
        }
        if (($v = $data['allocation_status'] ?? null) !== null) {
            $obj->allocationStatus = (string) $v;
        }
        if (($v = $data['author_aweme_id'] ?? null) !== null) {
            $obj->authorAwemeId = (string) $v;
        }
        if (($v = $data['author_nickname'] ?? null) !== null) {
            $obj->authorNickname = (string) $v;
        }
        if (($v = $data['author_role'] ?? null) !== null) {
            $obj->authorRole = (string) $v;
        }
        if (($v = $data['auto_city_name'] ?? null) !== null) {
            $obj->autoCityName = (string) $v;
        }
        if (($v = $data['auto_province_name'] ?? null) !== null) {
            $obj->autoProvinceName = (string) $v;
        }
        if (($v = $data['carousel_id'] ?? null) !== null) {
            $obj->carouselId = (int) $v;
        }
        if (($v = $data['city_name'] ?? null) !== null) {
            $obj->cityName = (string) $v;
        }
        if (($v = $data['clue_id'] ?? null) !== null) {
            $obj->clueId = (string) $v;
        }
        if (($v = $data['clue_intention'] ?? null) !== null) {
            $obj->clueIntention = (string) $v;
        }
        if (($v = $data['clue_owner_name'] ?? null) !== null) {
            $obj->clueOwnerName = (string) $v;
        }
        if (($v = $data['clue_return_status'] ?? null) !== null) {
            $obj->clueReturnStatus = (string) $v;
        }
        if (($v = $data['clue_type'] ?? null) !== null) {
            $obj->clueType = (string) $v;
        }
        if (($v = $data['component_event_type_tags'] ?? null) !== null && is_array($v)) {
            $obj->componentEventTypeTags = $v;
        }
        if (($v = $data['content_id'] ?? null) !== null) {
            $obj->contentId = (string) $v;
        }
        if (($v = $data['convert_status'] ?? null) !== null) {
            $obj->convertStatus = (string) $v;
        }
        if (($v = $data['country_name'] ?? null) !== null) {
            $obj->countryName = (string) $v;
        }
        if (($v = $data['county_name'] ?? null) !== null) {
            $obj->countyName = (string) $v;
        }
        if (($v = $data['create_time_detail'] ?? null) !== null) {
            $obj->createTimeDetail = (string) $v;
        }
        if (($v = $data['deal_sub_amount'] ?? null) !== null) {
            $obj->dealSubAmount = (string) $v;
        }
        if (($v = $data['effective_state'] ?? null) !== null) {
            $obj->effectiveState = (string) $v;
        }
        if (($v = $data['effective_state_name'] ?? null) !== null) {
            $obj->effectiveStateName = (string) $v;
        }
        if (($v = $data['ext_info'] ?? null) !== null) {
            $obj->extInfo = (string) $v;
        }
        if (($v = $data['flow_entrance'] ?? null) !== null) {
            $obj->flowEntrance = (string) $v;
        }
        if (($v = $data['flow_type'] ?? null) !== null) {
            $obj->flowType = (string) $v;
        }
        if (($v = $data['follow_life_account_id'] ?? null) !== null) {
            $obj->followLifeAccountId = (string) $v;
        }
        if (($v = $data['follow_life_account_name'] ?? null) !== null) {
            $obj->followLifeAccountName = (string) $v;
        }
        if (($v = $data['follow_life_account_type'] ?? null) !== null) {
            $obj->followLifeAccountType = (string) $v;
        }
        if (($v = $data['follow_poi_id'] ?? null) !== null) {
            $obj->followPoiId = (string) $v;
        }
        if (($v = $data['follow_state_name'] ?? null) !== null) {
            $obj->followStateName = (string) $v;
        }
        if (($v = $data['gender'] ?? null) !== null) {
            $obj->gender = (string) $v;
        }
        if (($v = $data['intention_life_account_name'] ?? null) !== null) {
            $obj->intentionLifeAccountName = (string) $v;
        }
        if (($v = $data['intention_poi_id'] ?? null) !== null) {
            $obj->intentionPoiId = (string) $v;
        }
        if (($v = $data['is_private_clue'] ?? null) !== null) {
            $obj->isPrivateClue = (string) $v;
        }
        if (($v = $data['leads_page'] ?? null) !== null) {
            $obj->leadsPage = (string) $v;
        }
        if (($v = $data['local_account_id'] ?? null) !== null) {
            $obj->localAccountId = (string) $v;
        }
        if (($v = $data['modify_time'] ?? null) !== null) {
            $obj->modifyTime = (string) $v;
        }
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        if (($v = $data['order_id'] ?? null) !== null) {
            $obj->orderId = (int) $v;
        }
        if (($v = $data['order_status'] ?? null) !== null) {
            $obj->orderStatus = (string) $v;
        }
        if (($v = $data['product_id'] ?? null) !== null) {
            $obj->productId = (string) $v;
        }
        if (($v = $data['product_name'] ?? null) !== null) {
            $obj->productName = (string) $v;
        }
        if (($v = $data['product_type'] ?? null) !== null) {
            $obj->productType = (string) $v;
        }
        if (($v = $data['project_id'] ?? null) !== null) {
            $obj->projectId = (int) $v;
        }
        if (($v = $data['promotion_id'] ?? null) !== null) {
            $obj->promotionId = (int) $v;
        }
        if (($v = $data['promotion_name'] ?? null) !== null) {
            $obj->promotionName = (string) $v;
        }
        if (($v = $data['province_name'] ?? null) !== null) {
            $obj->provinceName = (string) $v;
        }
        if (($v = $data['qcpx_ticket_info'] ?? null) !== null) {
            $obj->qcpxTicketInfo = (string) $v;
        }
        if (($v = $data['qcpx_ticket_status'] ?? null) !== null) {
            $obj->qcpxTicketStatus = (string) $v;
        }
        if (($v = $data['remark'] ?? null) !== null) {
            $obj->remark = (string) $v;
        }
        if (($v = $data['remark_dict'] ?? null) !== null) {
            $obj->remarkDict = (string) $v;
        }
        if (($v = $data['req_id'] ?? null) !== null) {
            $obj->reqId = (string) $v;
        }
        if (($v = $data['search_bid_word'] ?? null) !== null) {
            $obj->searchBidWord = (string) $v;
        }
        if (($v = $data['source_craftsman_douyin_id'] ?? null) !== null) {
            $obj->sourceCraftsmanDouyinId = (string) $v;
        }
        if (($v = $data['source_craftsman_nickname'] ?? null) !== null) {
            $obj->sourceCraftsmanNickname = (string) $v;
        }
        if (($v = $data['staff_aweme_id'] ?? null) !== null) {
            $obj->staffAwemeId = (string) $v;
        }
        if (($v = $data['staff_commerce_nickname'] ?? null) !== null) {
            $obj->staffCommerceNickname = (string) $v;
        }
        if (($v = $data['staff_nickname'] ?? null) !== null) {
            $obj->staffNickname = (string) $v;
        }
        if (($v = $data['system_tags'] ?? null) !== null && is_array($v)) {
            $obj->systemTags = $v;
        }
        if (($v = $data['tags'] ?? null) !== null && is_array($v)) {
            $obj->tags = $v;
        }
        if (($v = $data['telephone'] ?? null) !== null) {
            $obj->telephone = (string) $v;
        }
        if (($v = $data['title_id'] ?? null) !== null) {
            $obj->titleId = (int) $v;
        }
        if (($v = $data['tool_id'] ?? null) !== null) {
            $obj->toolId = (string) $v;
        }
        if (($v = $data['video_id'] ?? null) !== null) {
            $obj->videoId = (int) $v;
        }
        if (($v = $data['weixin'] ?? null) !== null) {
            $obj->weixin = (string) $v;
        }
        return $obj;
    }
}
