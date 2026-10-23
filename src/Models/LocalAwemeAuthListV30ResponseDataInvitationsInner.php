<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class LocalAwemeAuthListV30ResponseDataInvitationsInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\LocalAwemeAuthListV30DataInvitationsAuthSource
     */
    protected ?string $authSource = null;

    /**
     * @var \Oceanengine\Models\LocalAwemeAuthListV30DataInvitationsAuthTargetType
     */
    protected ?string $authTargetType = null;

    /**
     * 抖音头像
     * @var string
     */
    protected ?string $awemeAvatar = null;

    /**
     * 抖音号
     * @var string
     */
    protected ?string $awemeId = null;

    /**
     * 抖音昵称
     * @var string
     */
    protected ?string $awemeName = null;

    /**
     * @var \Oceanengine\Models\LocalAwemeAuthListV30DataInvitationsAwemeType
     */
    protected ?string $awemeType = null;

    /**
     * 授权结束时间
     * @var string
     */
    protected ?string $endTime = null;

    /**
     * 授权id
     * @var int
     */
    protected ?int $inviteId = null;

    /**
     * 是否为官方号
     * @var bool
     */
    protected ?bool $isOfficial = null;

    /**
     * 授权开始时间
     * @var string
     */
    protected ?string $startTime = null;

    /**
     * @var \Oceanengine\Models\LocalAwemeAuthListV30DataInvitationsStatus
     */
    protected ?string $status = null;

    /**
     * @var \Oceanengine\Models\LocalAwemeAuthListV30DataInvitationsSubStatus
     */
    protected ?string $subStatus = null;

    /**
     * @var \Oceanengine\Models\LocalAwemeAuthListV30ResponseDataInvitationsInnerTagsInner[]
     */
    protected ?array $tags = null;

    /**
     * @return \Oceanengine\Models\LocalAwemeAuthListV30DataInvitationsAuthSource
     */
    public function getAuthSource(): ?string
    {
        return $this->authSource;
    }

    /**
     * @param \Oceanengine\Models\LocalAwemeAuthListV30DataInvitationsAuthSource $authSource
     * @return self
     */
    public function setAuthSource(?string $authSource): self
    {
        $this->authSource = $authSource;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalAwemeAuthListV30DataInvitationsAuthTargetType
     */
    public function getAuthTargetType(): ?string
    {
        return $this->authTargetType;
    }

    /**
     * @param \Oceanengine\Models\LocalAwemeAuthListV30DataInvitationsAuthTargetType $authTargetType
     * @return self
     */
    public function setAuthTargetType(?string $authTargetType): self
    {
        $this->authTargetType = $authTargetType;
        return $this;
    }

    /**
     * 抖音头像
     * @return string
     */
    public function getAwemeAvatar(): ?string
    {
        return $this->awemeAvatar;
    }

    /**
     * 抖音头像
     * @param string $awemeAvatar
     * @return self
     */
    public function setAwemeAvatar(?string $awemeAvatar): self
    {
        $this->awemeAvatar = $awemeAvatar;
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
     * 抖音昵称
     * @return string
     */
    public function getAwemeName(): ?string
    {
        return $this->awemeName;
    }

    /**
     * 抖音昵称
     * @param string $awemeName
     * @return self
     */
    public function setAwemeName(?string $awemeName): self
    {
        $this->awemeName = $awemeName;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalAwemeAuthListV30DataInvitationsAwemeType
     */
    public function getAwemeType(): ?string
    {
        return $this->awemeType;
    }

    /**
     * @param \Oceanengine\Models\LocalAwemeAuthListV30DataInvitationsAwemeType $awemeType
     * @return self
     */
    public function setAwemeType(?string $awemeType): self
    {
        $this->awemeType = $awemeType;
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
     * 授权id
     * @return int
     */
    public function getInviteId(): ?int
    {
        return $this->inviteId;
    }

    /**
     * 授权id
     * @param int $inviteId
     * @return self
     */
    public function setInviteId(?int $inviteId): self
    {
        $this->inviteId = $inviteId;
        return $this;
    }

    /**
     * 是否为官方号
     * @return bool
     */
    public function getIsOfficial(): ?bool
    {
        return $this->isOfficial;
    }

    /**
     * 是否为官方号
     * @param bool $isOfficial
     * @return self
     */
    public function setIsOfficial(?bool $isOfficial): self
    {
        $this->isOfficial = $isOfficial;
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
     * @return \Oceanengine\Models\LocalAwemeAuthListV30DataInvitationsStatus
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param \Oceanengine\Models\LocalAwemeAuthListV30DataInvitationsStatus $status
     * @return self
     */
    public function setStatus(?string $status): self
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalAwemeAuthListV30DataInvitationsSubStatus
     */
    public function getSubStatus(): ?string
    {
        return $this->subStatus;
    }

    /**
     * @param \Oceanengine\Models\LocalAwemeAuthListV30DataInvitationsSubStatus $subStatus
     * @return self
     */
    public function setSubStatus(?string $subStatus): self
    {
        $this->subStatus = $subStatus;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalAwemeAuthListV30ResponseDataInvitationsInnerTagsInner[]
     */
    public function getTags(): ?array
    {
        return $this->tags;
    }

    /**
     * @param \Oceanengine\Models\LocalAwemeAuthListV30ResponseDataInvitationsInnerTagsInner[] $tags
     * @return self
     */
    public function setTags(?array $tags): self
    {
        $this->tags = $tags;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->authSource !== null) {
            $result['auth_source'] = $this->authSource;
        }
        if ($this->authTargetType !== null) {
            $result['auth_target_type'] = $this->authTargetType;
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
        if ($this->awemeType !== null) {
            $result['aweme_type'] = $this->awemeType;
        }
        if ($this->endTime !== null) {
            $result['end_time'] = $this->endTime;
        }
        if ($this->inviteId !== null) {
            $result['invite_id'] = $this->inviteId;
        }
        if ($this->isOfficial !== null) {
            $result['is_official'] = $this->isOfficial;
        }
        if ($this->startTime !== null) {
            $result['start_time'] = $this->startTime;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        if ($this->subStatus !== null) {
            $result['sub_status'] = $this->subStatus;
        }
        if ($this->tags !== null) {
            $result['tags'] = $this->tags;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['auth_source'] ?? null) !== null) {
            $obj->authSource = (string) $v;
        }
        if (($v = $data['auth_target_type'] ?? null) !== null) {
            $obj->authTargetType = (string) $v;
        }
        if (($v = $data['aweme_avatar'] ?? null) !== null) {
            $obj->awemeAvatar = (string) $v;
        }
        if (($v = $data['aweme_id'] ?? null) !== null) {
            $obj->awemeId = (string) $v;
        }
        if (($v = $data['aweme_name'] ?? null) !== null) {
            $obj->awemeName = (string) $v;
        }
        if (($v = $data['aweme_type'] ?? null) !== null) {
            $obj->awemeType = (string) $v;
        }
        if (($v = $data['end_time'] ?? null) !== null) {
            $obj->endTime = (string) $v;
        }
        if (($v = $data['invite_id'] ?? null) !== null) {
            $obj->inviteId = (int) $v;
        }
        if (($v = $data['is_official'] ?? null) !== null) {
            $obj->isOfficial = (bool) $v;
        }
        if (($v = $data['start_time'] ?? null) !== null) {
            $obj->startTime = (string) $v;
        }
        if (($v = $data['status'] ?? null) !== null) {
            $obj->status = (string) $v;
        }
        if (($v = $data['sub_status'] ?? null) !== null) {
            $obj->subStatus = (string) $v;
        }
        if (($v = $data['tags'] ?? null) !== null && is_array($v)) {
            $obj->tags = array_map(fn ($vv) => \Oceanengine\Models\LocalAwemeAuthListV30ResponseDataInvitationsInnerTagsInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
