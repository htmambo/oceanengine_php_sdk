<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class UbaToolPredUpdateV10Request implements \JsonSerializable
{
    /**
     * 计划纠偏系数
     * @var array<string,float>
     */
    protected ?array $adPvrCoef = null;

    /**
     * 广告主ID
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * 枚举类型1=IES，2=GIP，3=OTHER
     * @var int
     */
    protected ?int $appGroupName = null;

    /**
     * cdp_project_id
     * @var int
     */
    protected ?int $cdpProjectId = null;

    /**
     * 投放的deep_bid_type
     * @var int
     */
    protected ?int $deepBidType = null;

    /**
     * 投放的deep_external_action
     * @var int
     */
    protected ?int $deepExternalAction = null;

    /**
     * 预览模式，只返回预估结果不实际执行
     * @var bool
     */
    protected ?bool $dryRun = null;

    /**
     * 纠偏时间, 默认3天, 传极短时间等价于不纠偏
     * @var int
     */
    protected ?int $durationSeconds = null;

    /**
     * 投放external_action
     * @var int
     */
    protected ?int $externalAction = null;

    /**
     * 纠偏维度, 目前仅支持 AD=1 和 project=2, ADV=3目前不支持
     * @var int
     */
    protected ?int $idType = null;

    /**
     * 纠偏系数
     * @var float
     */
    protected ?float $pvrCoef = null;

    /**
     * 操作原因
     * @var string
     */
    protected ?string $reason = null;

    /**
     * 计划纠偏系数
     * @return array<string,float>
     */
    public function getAdPvrCoef(): ?array
    {
        return $this->adPvrCoef;
    }

    /**
     * 计划纠偏系数
     * @param array<string,float> $adPvrCoef
     * @return self
     */
    public function setAdPvrCoef(?array $adPvrCoef): self
    {
        $this->adPvrCoef = $adPvrCoef;
        return $this;
    }

    /**
     * 广告主ID
     * @return int
     */
    public function getAdvertiserId(): ?int
    {
        return $this->advertiserId;
    }

    /**
     * 广告主ID
     * @param int $advertiserId
     * @return self
     */
    public function setAdvertiserId(?int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 枚举类型1=IES，2=GIP，3=OTHER
     * @return int
     */
    public function getAppGroupName(): ?int
    {
        return $this->appGroupName;
    }

    /**
     * 枚举类型1=IES，2=GIP，3=OTHER
     * @param int $appGroupName
     * @return self
     */
    public function setAppGroupName(?int $appGroupName): self
    {
        $this->appGroupName = $appGroupName;
        return $this;
    }

    /**
     * cdp_project_id
     * @return int
     */
    public function getCdpProjectId(): ?int
    {
        return $this->cdpProjectId;
    }

    /**
     * cdp_project_id
     * @param int $cdpProjectId
     * @return self
     */
    public function setCdpProjectId(?int $cdpProjectId): self
    {
        $this->cdpProjectId = $cdpProjectId;
        return $this;
    }

    /**
     * 投放的deep_bid_type
     * @return int
     */
    public function getDeepBidType(): ?int
    {
        return $this->deepBidType;
    }

    /**
     * 投放的deep_bid_type
     * @param int $deepBidType
     * @return self
     */
    public function setDeepBidType(?int $deepBidType): self
    {
        $this->deepBidType = $deepBidType;
        return $this;
    }

    /**
     * 投放的deep_external_action
     * @return int
     */
    public function getDeepExternalAction(): ?int
    {
        return $this->deepExternalAction;
    }

    /**
     * 投放的deep_external_action
     * @param int $deepExternalAction
     * @return self
     */
    public function setDeepExternalAction(?int $deepExternalAction): self
    {
        $this->deepExternalAction = $deepExternalAction;
        return $this;
    }

    /**
     * 预览模式，只返回预估结果不实际执行
     * @return bool
     */
    public function getDryRun(): ?bool
    {
        return $this->dryRun;
    }

    /**
     * 预览模式，只返回预估结果不实际执行
     * @param bool $dryRun
     * @return self
     */
    public function setDryRun(?bool $dryRun): self
    {
        $this->dryRun = $dryRun;
        return $this;
    }

    /**
     * 纠偏时间, 默认3天, 传极短时间等价于不纠偏
     * @return int
     */
    public function getDurationSeconds(): ?int
    {
        return $this->durationSeconds;
    }

    /**
     * 纠偏时间, 默认3天, 传极短时间等价于不纠偏
     * @param int $durationSeconds
     * @return self
     */
    public function setDurationSeconds(?int $durationSeconds): self
    {
        $this->durationSeconds = $durationSeconds;
        return $this;
    }

    /**
     * 投放external_action
     * @return int
     */
    public function getExternalAction(): ?int
    {
        return $this->externalAction;
    }

    /**
     * 投放external_action
     * @param int $externalAction
     * @return self
     */
    public function setExternalAction(?int $externalAction): self
    {
        $this->externalAction = $externalAction;
        return $this;
    }

    /**
     * 纠偏维度, 目前仅支持 AD=1 和 project=2, ADV=3目前不支持
     * @return int
     */
    public function getIdType(): ?int
    {
        return $this->idType;
    }

    /**
     * 纠偏维度, 目前仅支持 AD=1 和 project=2, ADV=3目前不支持
     * @param int $idType
     * @return self
     */
    public function setIdType(?int $idType): self
    {
        $this->idType = $idType;
        return $this;
    }

    /**
     * 纠偏系数
     * @return float
     */
    public function getPvrCoef(): ?float
    {
        return $this->pvrCoef;
    }

    /**
     * 纠偏系数
     * @param float $pvrCoef
     * @return self
     */
    public function setPvrCoef(?float $pvrCoef): self
    {
        $this->pvrCoef = $pvrCoef;
        return $this;
    }

    /**
     * 操作原因
     * @return string
     */
    public function getReason(): ?string
    {
        return $this->reason;
    }

    /**
     * 操作原因
     * @param string $reason
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
        if ($this->adPvrCoef !== null) {
            $result['ad_pvr_coef'] = $this->adPvrCoef;
        }
        if ($this->advertiserId !== null) {
            $result['advertiser_id'] = $this->advertiserId;
        }
        if ($this->appGroupName !== null) {
            $result['app_group_name'] = $this->appGroupName;
        }
        if ($this->cdpProjectId !== null) {
            $result['cdp_project_id'] = $this->cdpProjectId;
        }
        if ($this->deepBidType !== null) {
            $result['deep_bid_type'] = $this->deepBidType;
        }
        if ($this->deepExternalAction !== null) {
            $result['deep_external_action'] = $this->deepExternalAction;
        }
        if ($this->dryRun !== null) {
            $result['dry_run'] = $this->dryRun;
        }
        if ($this->durationSeconds !== null) {
            $result['duration_seconds'] = $this->durationSeconds;
        }
        if ($this->externalAction !== null) {
            $result['external_action'] = $this->externalAction;
        }
        if ($this->idType !== null) {
            $result['id_type'] = $this->idType;
        }
        if ($this->pvrCoef !== null) {
            $result['pvr_coef'] = $this->pvrCoef;
        }
        if ($this->reason !== null) {
            $result['reason'] = $this->reason;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['ad_pvr_coef'] ?? null) !== null && is_array($v)) {
            $obj->adPvrCoef = $v;
        }
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['app_group_name'] ?? null) !== null) {
            $obj->appGroupName = (int) $v;
        }
        if (($v = $data['cdp_project_id'] ?? null) !== null) {
            $obj->cdpProjectId = (int) $v;
        }
        if (($v = $data['deep_bid_type'] ?? null) !== null) {
            $obj->deepBidType = (int) $v;
        }
        if (($v = $data['deep_external_action'] ?? null) !== null) {
            $obj->deepExternalAction = (int) $v;
        }
        if (($v = $data['dry_run'] ?? null) !== null) {
            $obj->dryRun = (bool) $v;
        }
        if (($v = $data['duration_seconds'] ?? null) !== null) {
            $obj->durationSeconds = (int) $v;
        }
        if (($v = $data['external_action'] ?? null) !== null) {
            $obj->externalAction = (int) $v;
        }
        if (($v = $data['id_type'] ?? null) !== null) {
            $obj->idType = (int) $v;
        }
        if (($v = $data['pvr_coef'] ?? null) !== null) {
            $obj->pvrCoef = (float) $v;
        }
        if (($v = $data['reason'] ?? null) !== null) {
            $obj->reason = (string) $v;
        }
        return $obj;
    }
}
