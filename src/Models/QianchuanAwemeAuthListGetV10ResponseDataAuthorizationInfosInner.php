<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanAwemeAuthListGetV10ResponseDataAuthorizationInfosInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\QianchuanAwemeAuthListGetV10DataAuthorizationInfosAuthRange
     */
    protected ?string $authRange = null;

    /**
     * @var \Oceanengine\Models\QianchuanAwemeAuthListGetV10DataAuthorizationInfosAuthSource
     */
    protected ?string $authSource = null;

    /**
     * @var \Oceanengine\Models\QianchuanAwemeAuthListGetV10DataAuthorizationInfosAuthStatus
     */
    protected ?string $authStatus = null;

    /**
     * @var \Oceanengine\Models\QianchuanAwemeAuthListGetV10DataAuthorizationInfosAuthType[]
     */
    protected ?array $authType = null;

    /**
     * @var \Oceanengine\Models\QianchuanAwemeAuthListGetV10ResponseDataAuthorizationInfosInnerAuthVideoInfo
     */
    protected ?\Oceanengine\Models\QianchuanAwemeAuthListGetV10ResponseDataAuthorizationInfosInnerAuthVideoInfo $authVideoInfo = null;

    /**
     * @var string
     */
    protected ?string $awemeAvatar = null;

    /**
     * 抖音号uid
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
     * 申请创建时间
     * @var string
     */
    protected ?string $createTime = null;

    /**
     * 结束时间
     * @var string
     */
    protected ?string $endTime = null;

    /**
     * 是待确认解除授权
     * @var bool
     */
    protected ?bool $isCancellationProgress = null;

    /**
     * 开始时间
     * @var string
     */
    protected ?string $startTime = null;

    /**
     * @return \Oceanengine\Models\QianchuanAwemeAuthListGetV10DataAuthorizationInfosAuthRange
     */
    public function getAuthRange(): ?string
    {
        return $this->authRange;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAwemeAuthListGetV10DataAuthorizationInfosAuthRange $authRange
     * @return self
     */
    public function setAuthRange(?string $authRange): self
    {
        $this->authRange = $authRange;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAwemeAuthListGetV10DataAuthorizationInfosAuthSource
     */
    public function getAuthSource(): ?string
    {
        return $this->authSource;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAwemeAuthListGetV10DataAuthorizationInfosAuthSource $authSource
     * @return self
     */
    public function setAuthSource(?string $authSource): self
    {
        $this->authSource = $authSource;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAwemeAuthListGetV10DataAuthorizationInfosAuthStatus
     */
    public function getAuthStatus(): ?string
    {
        return $this->authStatus;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAwemeAuthListGetV10DataAuthorizationInfosAuthStatus $authStatus
     * @return self
     */
    public function setAuthStatus(?string $authStatus): self
    {
        $this->authStatus = $authStatus;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAwemeAuthListGetV10DataAuthorizationInfosAuthType[]
     */
    public function getAuthType(): ?array
    {
        return $this->authType;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAwemeAuthListGetV10DataAuthorizationInfosAuthType[] $authType
     * @return self
     */
    public function setAuthType(?array $authType): self
    {
        $this->authType = $authType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAwemeAuthListGetV10ResponseDataAuthorizationInfosInnerAuthVideoInfo
     */
    public function getAuthVideoInfo(): ?\Oceanengine\Models\QianchuanAwemeAuthListGetV10ResponseDataAuthorizationInfosInnerAuthVideoInfo
    {
        return $this->authVideoInfo;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAwemeAuthListGetV10ResponseDataAuthorizationInfosInnerAuthVideoInfo $authVideoInfo
     * @return self
     */
    public function setAuthVideoInfo(?\Oceanengine\Models\QianchuanAwemeAuthListGetV10ResponseDataAuthorizationInfosInnerAuthVideoInfo $authVideoInfo): self
    {
        $this->authVideoInfo = $authVideoInfo;
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
     * 抖音号uid
     * @return int
     */
    public function getAwemeId(): ?int
    {
        return $this->awemeId;
    }

    /**
     * 抖音号uid
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
     * 申请创建时间
     * @return string
     */
    public function getCreateTime(): ?string
    {
        return $this->createTime;
    }

    /**
     * 申请创建时间
     * @param string $createTime
     * @return self
     */
    public function setCreateTime(?string $createTime): self
    {
        $this->createTime = $createTime;
        return $this;
    }

    /**
     * 结束时间
     * @return string
     */
    public function getEndTime(): ?string
    {
        return $this->endTime;
    }

    /**
     * 结束时间
     * @param string $endTime
     * @return self
     */
    public function setEndTime(?string $endTime): self
    {
        $this->endTime = $endTime;
        return $this;
    }

    /**
     * 是待确认解除授权
     * @return bool
     */
    public function getIsCancellationProgress(): ?bool
    {
        return $this->isCancellationProgress;
    }

    /**
     * 是待确认解除授权
     * @param bool $isCancellationProgress
     * @return self
     */
    public function setIsCancellationProgress(?bool $isCancellationProgress): self
    {
        $this->isCancellationProgress = $isCancellationProgress;
        return $this;
    }

    /**
     * 开始时间
     * @return string
     */
    public function getStartTime(): ?string
    {
        return $this->startTime;
    }

    /**
     * 开始时间
     * @param string $startTime
     * @return self
     */
    public function setStartTime(?string $startTime): self
    {
        $this->startTime = $startTime;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->authRange !== null) {
            $result['auth_range'] = $this->authRange;
        }
        if ($this->authSource !== null) {
            $result['auth_source'] = $this->authSource;
        }
        if ($this->authStatus !== null) {
            $result['auth_status'] = $this->authStatus;
        }
        if ($this->authType !== null) {
            $result['auth_type'] = $this->authType;
        }
        if ($this->authVideoInfo !== null) {
            $result['auth_video_info'] = $this->authVideoInfo;
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
        if ($this->createTime !== null) {
            $result['create_time'] = $this->createTime;
        }
        if ($this->endTime !== null) {
            $result['end_time'] = $this->endTime;
        }
        if ($this->isCancellationProgress !== null) {
            $result['is_cancellation_progress'] = $this->isCancellationProgress;
        }
        if ($this->startTime !== null) {
            $result['start_time'] = $this->startTime;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['auth_range'] ?? null) !== null) {
            $obj->authRange = (string) $v;
        }
        if (($v = $data['auth_source'] ?? null) !== null) {
            $obj->authSource = (string) $v;
        }
        if (($v = $data['auth_status'] ?? null) !== null) {
            $obj->authStatus = (string) $v;
        }
        if (($v = $data['auth_type'] ?? null) !== null && is_array($v)) {
            $obj->authType = $v;
        }
        if (($v = $data['auth_video_info'] ?? null) !== null && is_array($v)) {
            $obj->authVideoInfo = \Oceanengine\Models\QianchuanAwemeAuthListGetV10ResponseDataAuthorizationInfosInnerAuthVideoInfo::fromArray($v);
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
        if (($v = $data['create_time'] ?? null) !== null) {
            $obj->createTime = (string) $v;
        }
        if (($v = $data['end_time'] ?? null) !== null) {
            $obj->endTime = (string) $v;
        }
        if (($v = $data['is_cancellation_progress'] ?? null) !== null) {
            $obj->isCancellationProgress = (bool) $v;
        }
        if (($v = $data['start_time'] ?? null) !== null) {
            $obj->startTime = (string) $v;
        }
        return $obj;
    }
}
