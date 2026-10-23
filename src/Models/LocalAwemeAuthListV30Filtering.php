<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class LocalAwemeAuthListV30Filtering implements \JsonSerializable
{
    /**
     * 授权状态
     * @var \Oceanengine\Models\LocalAwemeAuthListV30FilteringAuthStatus[]
     */
    protected ?array $authStatus = null;

    /**
     * 授权类型
     * @var \Oceanengine\Models\LocalAwemeAuthListV30FilteringAuthTargetTypes[]
     */
    protected ?array $authTargetTypes = null;

    /**
     * 抖音号精确匹配，抖音昵称模糊搜索
     * @var string
     */
    protected ?string $awemeFuzzySearch = null;

    /**
     * 快速筛选官方抖音号
     * @var bool
     */
    protected ?bool $needOfficial = null;

    /**
     * 快速筛选达人发起解除
     * @var bool
     */
    protected ?bool $quickSearchAwemeCancel = null;

    /**
     * 快速筛选授权被预警
     * @var bool
     */
    protected ?bool $quickSearchInvitationAlarm = null;

    /**
     * 授权状态
     * @return \Oceanengine\Models\LocalAwemeAuthListV30FilteringAuthStatus[]
     */
    public function getAuthStatus(): ?array
    {
        return $this->authStatus;
    }

    /**
     * 授权状态
     * @param \Oceanengine\Models\LocalAwemeAuthListV30FilteringAuthStatus[] $authStatus
     * @return self
     */
    public function setAuthStatus(?array $authStatus): self
    {
        $this->authStatus = $authStatus;
        return $this;
    }

    /**
     * 授权类型
     * @return \Oceanengine\Models\LocalAwemeAuthListV30FilteringAuthTargetTypes[]
     */
    public function getAuthTargetTypes(): ?array
    {
        return $this->authTargetTypes;
    }

    /**
     * 授权类型
     * @param \Oceanengine\Models\LocalAwemeAuthListV30FilteringAuthTargetTypes[] $authTargetTypes
     * @return self
     */
    public function setAuthTargetTypes(?array $authTargetTypes): self
    {
        $this->authTargetTypes = $authTargetTypes;
        return $this;
    }

    /**
     * 抖音号精确匹配，抖音昵称模糊搜索
     * @return string
     */
    public function getAwemeFuzzySearch(): ?string
    {
        return $this->awemeFuzzySearch;
    }

    /**
     * 抖音号精确匹配，抖音昵称模糊搜索
     * @param string $awemeFuzzySearch
     * @return self
     */
    public function setAwemeFuzzySearch(?string $awemeFuzzySearch): self
    {
        $this->awemeFuzzySearch = $awemeFuzzySearch;
        return $this;
    }

    /**
     * 快速筛选官方抖音号
     * @return bool
     */
    public function getNeedOfficial(): ?bool
    {
        return $this->needOfficial;
    }

    /**
     * 快速筛选官方抖音号
     * @param bool $needOfficial
     * @return self
     */
    public function setNeedOfficial(?bool $needOfficial): self
    {
        $this->needOfficial = $needOfficial;
        return $this;
    }

    /**
     * 快速筛选达人发起解除
     * @return bool
     */
    public function getQuickSearchAwemeCancel(): ?bool
    {
        return $this->quickSearchAwemeCancel;
    }

    /**
     * 快速筛选达人发起解除
     * @param bool $quickSearchAwemeCancel
     * @return self
     */
    public function setQuickSearchAwemeCancel(?bool $quickSearchAwemeCancel): self
    {
        $this->quickSearchAwemeCancel = $quickSearchAwemeCancel;
        return $this;
    }

    /**
     * 快速筛选授权被预警
     * @return bool
     */
    public function getQuickSearchInvitationAlarm(): ?bool
    {
        return $this->quickSearchInvitationAlarm;
    }

    /**
     * 快速筛选授权被预警
     * @param bool $quickSearchInvitationAlarm
     * @return self
     */
    public function setQuickSearchInvitationAlarm(?bool $quickSearchInvitationAlarm): self
    {
        $this->quickSearchInvitationAlarm = $quickSearchInvitationAlarm;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->authStatus !== null) {
            $result['auth_status'] = $this->authStatus;
        }
        if ($this->authTargetTypes !== null) {
            $result['auth_target_types'] = $this->authTargetTypes;
        }
        if ($this->awemeFuzzySearch !== null) {
            $result['aweme_fuzzy_search'] = $this->awemeFuzzySearch;
        }
        if ($this->needOfficial !== null) {
            $result['need_official'] = $this->needOfficial;
        }
        if ($this->quickSearchAwemeCancel !== null) {
            $result['quick_search_aweme_cancel'] = $this->quickSearchAwemeCancel;
        }
        if ($this->quickSearchInvitationAlarm !== null) {
            $result['quick_search_invitation_alarm'] = $this->quickSearchInvitationAlarm;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['auth_status'] ?? null) !== null && is_array($v)) {
            $obj->authStatus = $v;
        }
        if (($v = $data['auth_target_types'] ?? null) !== null && is_array($v)) {
            $obj->authTargetTypes = $v;
        }
        if (($v = $data['aweme_fuzzy_search'] ?? null) !== null) {
            $obj->awemeFuzzySearch = (string) $v;
        }
        if (($v = $data['need_official'] ?? null) !== null) {
            $obj->needOfficial = (bool) $v;
        }
        if (($v = $data['quick_search_aweme_cancel'] ?? null) !== null) {
            $obj->quickSearchAwemeCancel = (bool) $v;
        }
        if (($v = $data['quick_search_invitation_alarm'] ?? null) !== null) {
            $obj->quickSearchInvitationAlarm = (bool) $v;
        }
        return $obj;
    }
}
