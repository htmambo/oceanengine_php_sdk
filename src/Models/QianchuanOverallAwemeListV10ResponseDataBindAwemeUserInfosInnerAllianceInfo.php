<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanOverallAwemeListV10ResponseDataBindAwemeUserInfosInnerAllianceInfo implements \JsonSerializable
{
    /**
     * 联盟达人能否自动授权，false表示不能自动授权（也可能是已有全域授权），true表示可以自动授权
     * @var bool
     */
    protected ?bool $allowAllianceTalentAutoAuth = null;

    /**
     * 当前授权广告主id
     * @var int
     */
    protected ?int $curAuthAdvId = null;

    /**
     * 抖音号是否是联盟达人
     * @var bool
     */
    protected ?bool $isAllianceTalent = null;

    /**
     * @var \Oceanengine\Models\QianchuanOverallAwemeListV10DataBindAwemeUserInfosAllianceInfoReason
     */
    protected ?string $reason = null;

    /**
     * 联盟达人能否自动授权，false表示不能自动授权（也可能是已有全域授权），true表示可以自动授权
     * @return bool
     */
    public function getAllowAllianceTalentAutoAuth(): ?bool
    {
        return $this->allowAllianceTalentAutoAuth;
    }

    /**
     * 联盟达人能否自动授权，false表示不能自动授权（也可能是已有全域授权），true表示可以自动授权
     * @param bool $allowAllianceTalentAutoAuth
     * @return self
     */
    public function setAllowAllianceTalentAutoAuth(?bool $allowAllianceTalentAutoAuth): self
    {
        $this->allowAllianceTalentAutoAuth = $allowAllianceTalentAutoAuth;
        return $this;
    }

    /**
     * 当前授权广告主id
     * @return int
     */
    public function getCurAuthAdvId(): ?int
    {
        return $this->curAuthAdvId;
    }

    /**
     * 当前授权广告主id
     * @param int $curAuthAdvId
     * @return self
     */
    public function setCurAuthAdvId(?int $curAuthAdvId): self
    {
        $this->curAuthAdvId = $curAuthAdvId;
        return $this;
    }

    /**
     * 抖音号是否是联盟达人
     * @return bool
     */
    public function getIsAllianceTalent(): ?bool
    {
        return $this->isAllianceTalent;
    }

    /**
     * 抖音号是否是联盟达人
     * @param bool $isAllianceTalent
     * @return self
     */
    public function setIsAllianceTalent(?bool $isAllianceTalent): self
    {
        $this->isAllianceTalent = $isAllianceTalent;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanOverallAwemeListV10DataBindAwemeUserInfosAllianceInfoReason
     */
    public function getReason(): ?string
    {
        return $this->reason;
    }

    /**
     * @param \Oceanengine\Models\QianchuanOverallAwemeListV10DataBindAwemeUserInfosAllianceInfoReason $reason
     * @return self
     */
    public function setReason(?string $reason): self
    {
        $this->reason = $reason;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->allowAllianceTalentAutoAuth !== null) {
            $result['allow_alliance_talent_auto_auth'] = $this->allowAllianceTalentAutoAuth;
        }
        if ($this->curAuthAdvId !== null) {
            $result['cur_auth_adv_id'] = $this->curAuthAdvId;
        }
        if ($this->isAllianceTalent !== null) {
            $result['is_alliance_talent'] = $this->isAllianceTalent;
        }
        if ($this->reason !== null) {
            $result['reason'] = $this->reason;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['allow_alliance_talent_auto_auth'] ?? null) !== null) {
            $obj->allowAllianceTalentAutoAuth = (bool) $v;
        }
        if (($v = $data['cur_auth_adv_id'] ?? null) !== null) {
            $obj->curAuthAdvId = (int) $v;
        }
        if (($v = $data['is_alliance_talent'] ?? null) !== null) {
            $obj->isAllianceTalent = (bool) $v;
        }
        if (($v = $data['reason'] ?? null) !== null) {
            $obj->reason = (string) $v;
        }
        return $obj;
    }
}
