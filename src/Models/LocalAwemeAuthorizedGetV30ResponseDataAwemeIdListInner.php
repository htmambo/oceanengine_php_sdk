<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class LocalAwemeAuthorizedGetV30ResponseDataAwemeIdListInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\LocalAwemeAuthorizedGetV30DataAwemeIdListAuthType
     */
    protected ?string $authType = null;

    /**
     * 抖音头像
     * @var string
     */
    protected ?string $awemeAvatar = null;

    /**
     * 抖音号在全域下的投放状态
     * @var bool
     */
    protected ?bool $awemeHasUniProm = null;

    /**
     * 抖音号
     * @var string
     */
    protected ?string $awemeId = null;

    /**
     * 抖音号名称
     * @var string
     */
    protected ?string $awemeName = null;

    /**
     * 是否能创建roi2广告，margoal=2时返回
     * @var bool
     */
    protected ?bool $canCreateRoi2Ad = null;

    /**
     * 是否有在投的roi2计划
     * @var bool
     */
    protected ?bool $haveDeliveringRoi2Ad = null;

    /**
     * @return \Oceanengine\Models\LocalAwemeAuthorizedGetV30DataAwemeIdListAuthType
     */
    public function getAuthType(): ?string
    {
        return $this->authType;
    }

    /**
     * @param \Oceanengine\Models\LocalAwemeAuthorizedGetV30DataAwemeIdListAuthType $authType
     * @return self
     */
    public function setAuthType(?string $authType): self
    {
        $this->authType = $authType;
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
     * 抖音号在全域下的投放状态
     * @return bool
     */
    public function getAwemeHasUniProm(): ?bool
    {
        return $this->awemeHasUniProm;
    }

    /**
     * 抖音号在全域下的投放状态
     * @param bool $awemeHasUniProm
     * @return self
     */
    public function setAwemeHasUniProm(?bool $awemeHasUniProm): self
    {
        $this->awemeHasUniProm = $awemeHasUniProm;
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
     * 抖音号名称
     * @return string
     */
    public function getAwemeName(): ?string
    {
        return $this->awemeName;
    }

    /**
     * 抖音号名称
     * @param string $awemeName
     * @return self
     */
    public function setAwemeName(?string $awemeName): self
    {
        $this->awemeName = $awemeName;
        return $this;
    }

    /**
     * 是否能创建roi2广告，margoal=2时返回
     * @return bool
     */
    public function getCanCreateRoi2Ad(): ?bool
    {
        return $this->canCreateRoi2Ad;
    }

    /**
     * 是否能创建roi2广告，margoal=2时返回
     * @param bool $canCreateRoi2Ad
     * @return self
     */
    public function setCanCreateRoi2Ad(?bool $canCreateRoi2Ad): self
    {
        $this->canCreateRoi2Ad = $canCreateRoi2Ad;
        return $this;
    }

    /**
     * 是否有在投的roi2计划
     * @return bool
     */
    public function getHaveDeliveringRoi2Ad(): ?bool
    {
        return $this->haveDeliveringRoi2Ad;
    }

    /**
     * 是否有在投的roi2计划
     * @param bool $haveDeliveringRoi2Ad
     * @return self
     */
    public function setHaveDeliveringRoi2Ad(?bool $haveDeliveringRoi2Ad): self
    {
        $this->haveDeliveringRoi2Ad = $haveDeliveringRoi2Ad;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->authType !== null) {
            $result['auth_type'] = $this->authType;
        }
        if ($this->awemeAvatar !== null) {
            $result['aweme_avatar'] = $this->awemeAvatar;
        }
        if ($this->awemeHasUniProm !== null) {
            $result['aweme_has_uni_prom'] = $this->awemeHasUniProm;
        }
        if ($this->awemeId !== null) {
            $result['aweme_id'] = $this->awemeId;
        }
        if ($this->awemeName !== null) {
            $result['aweme_name'] = $this->awemeName;
        }
        if ($this->canCreateRoi2Ad !== null) {
            $result['can_create_roi2_ad'] = $this->canCreateRoi2Ad;
        }
        if ($this->haveDeliveringRoi2Ad !== null) {
            $result['have_delivering_roi2_ad'] = $this->haveDeliveringRoi2Ad;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['auth_type'] ?? null) !== null) {
            $obj->authType = (string) $v;
        }
        if (($v = $data['aweme_avatar'] ?? null) !== null) {
            $obj->awemeAvatar = (string) $v;
        }
        if (($v = $data['aweme_has_uni_prom'] ?? null) !== null) {
            $obj->awemeHasUniProm = (bool) $v;
        }
        if (($v = $data['aweme_id'] ?? null) !== null) {
            $obj->awemeId = (string) $v;
        }
        if (($v = $data['aweme_name'] ?? null) !== null) {
            $obj->awemeName = (string) $v;
        }
        if (($v = $data['can_create_roi2_ad'] ?? null) !== null) {
            $obj->canCreateRoi2Ad = (bool) $v;
        }
        if (($v = $data['have_delivering_roi2_ad'] ?? null) !== null) {
            $obj->haveDeliveringRoi2Ad = (bool) $v;
        }
        return $obj;
    }
}
