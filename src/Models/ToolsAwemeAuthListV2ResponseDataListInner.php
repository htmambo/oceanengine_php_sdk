<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsAwemeAuthListV2ResponseDataListInner implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $authAutoExpireDate = null;

    /**
     * 全域授权类型
     * @var \Oceanengine\Models\ToolsAwemeAuthListV2DataListAuthScenarios[]
     */
    protected ?array $authScenarios = null;

    /**
     * @var \Oceanengine\Models\ToolsAwemeAuthListV2DataListAuthStatus
     */
    protected ?string $authStatus = null;

    /**
     * @var \Oceanengine\Models\ToolsAwemeAuthListV2ResponseDataListInnerAuthThresholdInfo
     */
    protected ?\Oceanengine\Models\ToolsAwemeAuthListV2ResponseDataListInnerAuthThresholdInfo $authThresholdInfo = null;

    /**
     * @var \Oceanengine\Models\ToolsAwemeAuthListV2DataListAuthType
     */
    protected ?string $authType = null;

    /**
     * 抖音号作者发起解除授权时上传的凭证信息（选填项，抖音号作者可能不填，此时该参数返回为null）
     * @var string[]
     */
    protected ?array $awemeCancelImageList = null;

    /**
     * 抖音号作者发起解除授权时填写的联系方式（选填项，抖音号作者可能不填，此时该参数返回为null）
     * @var string
     */
    protected ?string $awemeCancelNote = null;

    /**
     * 抖音号作者发起解除授权的原因，仅当抖音号作者发起解除授权时有值，100字以内，可能包括： - 不知道该授权是怎么建立的，申请解除授权 - 联系不到对方，无法进行合作沟通，申请解除授权 - 与对方合作到期或者有纠纷，申请解除授权 - 其他情况（作者会填写其他文案给到）
     * @var string
     */
    protected ?string $awemeCancelReason = null;

    /**
     * 抖音号
     * @var string
     */
    protected ?string $awemeId = null;

    /**
     * 抖音账号名称
     * @var string
     */
    protected ?string $awemeName = null;

    /**
     * @var \Oceanengine\Models\ToolsAwemeAuthListV2DataListAwemeUserType
     */
    protected ?string $awemeUserType = null;

    /**
     * 授权结束时间
     * @var string
     */
    protected ?string $endTime = null;

    /**
     * 发布新视频素材到该抖音号下时，视频主页可见性只能设置「仅单次展示可见」 枚举值： true：是 false：否，表示无此限制  当值返回true时，代表在创建广告时添加新视频素材到该抖音号下推广，视频的主页可见性设置只允许HIDE_VIDEO_ON_HP「仅单次展示可见」
     * @var bool
     */
    protected ?bool $hasVideoHpVisibilityLimit = null;

    /**
     * 备注
     * @var string
     */
    protected ?string $note = null;

    /**
     * 抖音号openID，非抖音号开放平台openID
     * @var string
     */
    protected ?string $openId = null;

    /**
     * @var \Oceanengine\Models\ToolsAwemeAuthListV2DataListShareType
     */
    protected ?string $shareType = null;

    /**
     * 授权开始时间
     * @var string
     */
    protected ?string $startTime = null;

    /**
     * @var \Oceanengine\Models\ToolsAwemeAuthListV2DataListSubStatus
     */
    protected ?string $subStatus = null;

    /**
     * @var \Oceanengine\Models\ToolsAwemeAuthListV2ResponseDataListInnerVideoInfo
     */
    protected ?\Oceanengine\Models\ToolsAwemeAuthListV2ResponseDataListInnerVideoInfo $videoInfo = null;

    /**
     * 抖音授权关系警告信息，您可根据该信息及时处理，可能返回 - 不达门槛：表示发起授权的抖音号未达到要求，详细未达门槛信息可通过auth_threshold_info获取 - 即将解除：表示抖音号作者已发起解除授权申请，您需要及时联系作者或同意解除
     * @var string[]
     */
    protected ?array $warningContent = null;

    /**
     * 抖音授权关系警告类型
     * @var \Oceanengine\Models\ToolsAwemeAuthListV2DataListWarningTypes[]
     */
    protected ?array $warningTypes = null;

    /**
     * @return string
     */
    public function getAuthAutoExpireDate(): ?string
    {
        return $this->authAutoExpireDate;
    }

    /**
     * @param string $authAutoExpireDate
     * @return self
     */
    public function setAuthAutoExpireDate(?string $authAutoExpireDate): self
    {
        $this->authAutoExpireDate = $authAutoExpireDate;
        return $this;
    }

    /**
     * 全域授权类型
     * @return \Oceanengine\Models\ToolsAwemeAuthListV2DataListAuthScenarios[]
     */
    public function getAuthScenarios(): ?array
    {
        return $this->authScenarios;
    }

    /**
     * 全域授权类型
     * @param \Oceanengine\Models\ToolsAwemeAuthListV2DataListAuthScenarios[] $authScenarios
     * @return self
     */
    public function setAuthScenarios(?array $authScenarios): self
    {
        $this->authScenarios = $authScenarios;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsAwemeAuthListV2DataListAuthStatus
     */
    public function getAuthStatus(): ?string
    {
        return $this->authStatus;
    }

    /**
     * @param \Oceanengine\Models\ToolsAwemeAuthListV2DataListAuthStatus $authStatus
     * @return self
     */
    public function setAuthStatus(?string $authStatus): self
    {
        $this->authStatus = $authStatus;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsAwemeAuthListV2ResponseDataListInnerAuthThresholdInfo
     */
    public function getAuthThresholdInfo(): ?\Oceanengine\Models\ToolsAwemeAuthListV2ResponseDataListInnerAuthThresholdInfo
    {
        return $this->authThresholdInfo;
    }

    /**
     * @param \Oceanengine\Models\ToolsAwemeAuthListV2ResponseDataListInnerAuthThresholdInfo $authThresholdInfo
     * @return self
     */
    public function setAuthThresholdInfo(?\Oceanengine\Models\ToolsAwemeAuthListV2ResponseDataListInnerAuthThresholdInfo $authThresholdInfo): self
    {
        $this->authThresholdInfo = $authThresholdInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsAwemeAuthListV2DataListAuthType
     */
    public function getAuthType(): ?string
    {
        return $this->authType;
    }

    /**
     * @param \Oceanengine\Models\ToolsAwemeAuthListV2DataListAuthType $authType
     * @return self
     */
    public function setAuthType(?string $authType): self
    {
        $this->authType = $authType;
        return $this;
    }

    /**
     * 抖音号作者发起解除授权时上传的凭证信息（选填项，抖音号作者可能不填，此时该参数返回为null）
     * @return string[]
     */
    public function getAwemeCancelImageList(): ?array
    {
        return $this->awemeCancelImageList;
    }

    /**
     * 抖音号作者发起解除授权时上传的凭证信息（选填项，抖音号作者可能不填，此时该参数返回为null）
     * @param string[] $awemeCancelImageList
     * @return self
     */
    public function setAwemeCancelImageList(?array $awemeCancelImageList): self
    {
        $this->awemeCancelImageList = $awemeCancelImageList;
        return $this;
    }

    /**
     * 抖音号作者发起解除授权时填写的联系方式（选填项，抖音号作者可能不填，此时该参数返回为null）
     * @return string
     */
    public function getAwemeCancelNote(): ?string
    {
        return $this->awemeCancelNote;
    }

    /**
     * 抖音号作者发起解除授权时填写的联系方式（选填项，抖音号作者可能不填，此时该参数返回为null）
     * @param string $awemeCancelNote
     * @return self
     */
    public function setAwemeCancelNote(?string $awemeCancelNote): self
    {
        $this->awemeCancelNote = $awemeCancelNote;
        return $this;
    }

    /**
     * 抖音号作者发起解除授权的原因，仅当抖音号作者发起解除授权时有值，100字以内，可能包括： - 不知道该授权是怎么建立的，申请解除授权 - 联系不到对方，无法进行合作沟通，申请解除授权 - 与对方合作到期或者有纠纷，申请解除授权 - 其他情况（作者会填写其他文案给到）
     * @return string
     */
    public function getAwemeCancelReason(): ?string
    {
        return $this->awemeCancelReason;
    }

    /**
     * 抖音号作者发起解除授权的原因，仅当抖音号作者发起解除授权时有值，100字以内，可能包括： - 不知道该授权是怎么建立的，申请解除授权 - 联系不到对方，无法进行合作沟通，申请解除授权 - 与对方合作到期或者有纠纷，申请解除授权 - 其他情况（作者会填写其他文案给到）
     * @param string $awemeCancelReason
     * @return self
     */
    public function setAwemeCancelReason(?string $awemeCancelReason): self
    {
        $this->awemeCancelReason = $awemeCancelReason;
        return $this;
    }

    /**
     * 抖音号
     * @return string
     */
    public function getAwemeId(): ?string
    {
        return $this->awemeId;
    }

    /**
     * 抖音号
     * @param string $awemeId
     * @return self
     */
    public function setAwemeId(?string $awemeId): self
    {
        $this->awemeId = $awemeId;
        return $this;
    }

    /**
     * 抖音账号名称
     * @return string
     */
    public function getAwemeName(): ?string
    {
        return $this->awemeName;
    }

    /**
     * 抖音账号名称
     * @param string $awemeName
     * @return self
     */
    public function setAwemeName(?string $awemeName): self
    {
        $this->awemeName = $awemeName;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsAwemeAuthListV2DataListAwemeUserType
     */
    public function getAwemeUserType(): ?string
    {
        return $this->awemeUserType;
    }

    /**
     * @param \Oceanengine\Models\ToolsAwemeAuthListV2DataListAwemeUserType $awemeUserType
     * @return self
     */
    public function setAwemeUserType(?string $awemeUserType): self
    {
        $this->awemeUserType = $awemeUserType;
        return $this;
    }

    /**
     * 授权结束时间
     * @return string
     */
    public function getEndTime(): ?string
    {
        return $this->endTime;
    }

    /**
     * 授权结束时间
     * @param string $endTime
     * @return self
     */
    public function setEndTime(?string $endTime): self
    {
        $this->endTime = $endTime;
        return $this;
    }

    /**
     * 发布新视频素材到该抖音号下时，视频主页可见性只能设置「仅单次展示可见」 枚举值： true：是 false：否，表示无此限制  当值返回true时，代表在创建广告时添加新视频素材到该抖音号下推广，视频的主页可见性设置只允许HIDE_VIDEO_ON_HP「仅单次展示可见」
     * @return bool
     */
    public function getHasVideoHpVisibilityLimit(): ?bool
    {
        return $this->hasVideoHpVisibilityLimit;
    }

    /**
     * 发布新视频素材到该抖音号下时，视频主页可见性只能设置「仅单次展示可见」 枚举值： true：是 false：否，表示无此限制  当值返回true时，代表在创建广告时添加新视频素材到该抖音号下推广，视频的主页可见性设置只允许HIDE_VIDEO_ON_HP「仅单次展示可见」
     * @param bool $hasVideoHpVisibilityLimit
     * @return self
     */
    public function setHasVideoHpVisibilityLimit(?bool $hasVideoHpVisibilityLimit): self
    {
        $this->hasVideoHpVisibilityLimit = $hasVideoHpVisibilityLimit;
        return $this;
    }

    /**
     * 备注
     * @return string
     */
    public function getNote(): ?string
    {
        return $this->note;
    }

    /**
     * 备注
     * @param string $note
     * @return self
     */
    public function setNote(?string $note): self
    {
        $this->note = $note;
        return $this;
    }

    /**
     * 抖音号openID，非抖音号开放平台openID
     * @return string
     */
    public function getOpenId(): ?string
    {
        return $this->openId;
    }

    /**
     * 抖音号openID，非抖音号开放平台openID
     * @param string $openId
     * @return self
     */
    public function setOpenId(?string $openId): self
    {
        $this->openId = $openId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsAwemeAuthListV2DataListShareType
     */
    public function getShareType(): ?string
    {
        return $this->shareType;
    }

    /**
     * @param \Oceanengine\Models\ToolsAwemeAuthListV2DataListShareType $shareType
     * @return self
     */
    public function setShareType(?string $shareType): self
    {
        $this->shareType = $shareType;
        return $this;
    }

    /**
     * 授权开始时间
     * @return string
     */
    public function getStartTime(): ?string
    {
        return $this->startTime;
    }

    /**
     * 授权开始时间
     * @param string $startTime
     * @return self
     */
    public function setStartTime(?string $startTime): self
    {
        $this->startTime = $startTime;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsAwemeAuthListV2DataListSubStatus
     */
    public function getSubStatus(): ?string
    {
        return $this->subStatus;
    }

    /**
     * @param \Oceanengine\Models\ToolsAwemeAuthListV2DataListSubStatus $subStatus
     * @return self
     */
    public function setSubStatus(?string $subStatus): self
    {
        $this->subStatus = $subStatus;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsAwemeAuthListV2ResponseDataListInnerVideoInfo
     */
    public function getVideoInfo(): ?\Oceanengine\Models\ToolsAwemeAuthListV2ResponseDataListInnerVideoInfo
    {
        return $this->videoInfo;
    }

    /**
     * @param \Oceanengine\Models\ToolsAwemeAuthListV2ResponseDataListInnerVideoInfo $videoInfo
     * @return self
     */
    public function setVideoInfo(?\Oceanengine\Models\ToolsAwemeAuthListV2ResponseDataListInnerVideoInfo $videoInfo): self
    {
        $this->videoInfo = $videoInfo;
        return $this;
    }

    /**
     * 抖音授权关系警告信息，您可根据该信息及时处理，可能返回 - 不达门槛：表示发起授权的抖音号未达到要求，详细未达门槛信息可通过auth_threshold_info获取 - 即将解除：表示抖音号作者已发起解除授权申请，您需要及时联系作者或同意解除
     * @return string[]
     */
    public function getWarningContent(): ?array
    {
        return $this->warningContent;
    }

    /**
     * 抖音授权关系警告信息，您可根据该信息及时处理，可能返回 - 不达门槛：表示发起授权的抖音号未达到要求，详细未达门槛信息可通过auth_threshold_info获取 - 即将解除：表示抖音号作者已发起解除授权申请，您需要及时联系作者或同意解除
     * @param string[] $warningContent
     * @return self
     */
    public function setWarningContent(?array $warningContent): self
    {
        $this->warningContent = $warningContent;
        return $this;
    }

    /**
     * 抖音授权关系警告类型
     * @return \Oceanengine\Models\ToolsAwemeAuthListV2DataListWarningTypes[]
     */
    public function getWarningTypes(): ?array
    {
        return $this->warningTypes;
    }

    /**
     * 抖音授权关系警告类型
     * @param \Oceanengine\Models\ToolsAwemeAuthListV2DataListWarningTypes[] $warningTypes
     * @return self
     */
    public function setWarningTypes(?array $warningTypes): self
    {
        $this->warningTypes = $warningTypes;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->authAutoExpireDate !== null) {
            $result['auth_auto_expire_date'] = $this->authAutoExpireDate;
        }
        if ($this->authScenarios !== null) {
            $result['auth_scenarios'] = $this->authScenarios;
        }
        if ($this->authStatus !== null) {
            $result['auth_status'] = $this->authStatus;
        }
        if ($this->authThresholdInfo !== null) {
            $result['auth_threshold_info'] = $this->authThresholdInfo;
        }
        if ($this->authType !== null) {
            $result['auth_type'] = $this->authType;
        }
        if ($this->awemeCancelImageList !== null) {
            $result['aweme_cancel_image_list'] = $this->awemeCancelImageList;
        }
        if ($this->awemeCancelNote !== null) {
            $result['aweme_cancel_note'] = $this->awemeCancelNote;
        }
        if ($this->awemeCancelReason !== null) {
            $result['aweme_cancel_reason'] = $this->awemeCancelReason;
        }
        if ($this->awemeId !== null) {
            $result['aweme_id'] = $this->awemeId;
        }
        if ($this->awemeName !== null) {
            $result['aweme_name'] = $this->awemeName;
        }
        if ($this->awemeUserType !== null) {
            $result['aweme_user_type'] = $this->awemeUserType;
        }
        if ($this->endTime !== null) {
            $result['end_time'] = $this->endTime;
        }
        if ($this->hasVideoHpVisibilityLimit !== null) {
            $result['has_video_hp_visibility_limit'] = $this->hasVideoHpVisibilityLimit;
        }
        if ($this->note !== null) {
            $result['note'] = $this->note;
        }
        if ($this->openId !== null) {
            $result['open_id'] = $this->openId;
        }
        if ($this->shareType !== null) {
            $result['share_type'] = $this->shareType;
        }
        if ($this->startTime !== null) {
            $result['start_time'] = $this->startTime;
        }
        if ($this->subStatus !== null) {
            $result['sub_status'] = $this->subStatus;
        }
        if ($this->videoInfo !== null) {
            $result['video_info'] = $this->videoInfo;
        }
        if ($this->warningContent !== null) {
            $result['warning_content'] = $this->warningContent;
        }
        if ($this->warningTypes !== null) {
            $result['warning_types'] = $this->warningTypes;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['auth_auto_expire_date'] ?? null) !== null) {
            $obj->authAutoExpireDate = (string) $v;
        }
        if (($v = $data['auth_scenarios'] ?? null) !== null && is_array($v)) {
            $obj->authScenarios = $v;
        }
        if (($v = $data['auth_status'] ?? null) !== null) {
            $obj->authStatus = (string) $v;
        }
        if (($v = $data['auth_threshold_info'] ?? null) !== null && is_array($v)) {
            $obj->authThresholdInfo = \Oceanengine\Models\ToolsAwemeAuthListV2ResponseDataListInnerAuthThresholdInfo::fromArray($v);
        }
        if (($v = $data['auth_type'] ?? null) !== null) {
            $obj->authType = (string) $v;
        }
        if (($v = $data['aweme_cancel_image_list'] ?? null) !== null && is_array($v)) {
            $obj->awemeCancelImageList = $v;
        }
        if (($v = $data['aweme_cancel_note'] ?? null) !== null) {
            $obj->awemeCancelNote = (string) $v;
        }
        if (($v = $data['aweme_cancel_reason'] ?? null) !== null) {
            $obj->awemeCancelReason = (string) $v;
        }
        if (($v = $data['aweme_id'] ?? null) !== null) {
            $obj->awemeId = (string) $v;
        }
        if (($v = $data['aweme_name'] ?? null) !== null) {
            $obj->awemeName = (string) $v;
        }
        if (($v = $data['aweme_user_type'] ?? null) !== null) {
            $obj->awemeUserType = (string) $v;
        }
        if (($v = $data['end_time'] ?? null) !== null) {
            $obj->endTime = (string) $v;
        }
        if (($v = $data['has_video_hp_visibility_limit'] ?? null) !== null) {
            $obj->hasVideoHpVisibilityLimit = (bool) $v;
        }
        if (($v = $data['note'] ?? null) !== null) {
            $obj->note = (string) $v;
        }
        if (($v = $data['open_id'] ?? null) !== null) {
            $obj->openId = (string) $v;
        }
        if (($v = $data['share_type'] ?? null) !== null) {
            $obj->shareType = (string) $v;
        }
        if (($v = $data['start_time'] ?? null) !== null) {
            $obj->startTime = (string) $v;
        }
        if (($v = $data['sub_status'] ?? null) !== null) {
            $obj->subStatus = (string) $v;
        }
        if (($v = $data['video_info'] ?? null) !== null && is_array($v)) {
            $obj->videoInfo = \Oceanengine\Models\ToolsAwemeAuthListV2ResponseDataListInnerVideoInfo::fromArray($v);
        }
        if (($v = $data['warning_content'] ?? null) !== null && is_array($v)) {
            $obj->warningContent = $v;
        }
        if (($v = $data['warning_types'] ?? null) !== null && is_array($v)) {
            $obj->warningTypes = $v;
        }
        return $obj;
    }
}
