<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanOverallAwemeListV10ResponseDataBindAwemeUserInfosInnerCommissionInfo implements \JsonSerializable
{
    /**
     * 佣金率下限
     * @var int
     */
    protected ?int $cosRatioLowerBound = null;

    /**
     * 佣金率上限
     * @var int
     */
    protected ?int $cosRatioUpperBound = null;

    /**
     * 是否为双佣金
     * @var bool
     */
    protected ?bool $isDualCommission = null;

    /**
     * 佣金率下限
     * @return int
     */
    public function getCosRatioLowerBound(): ?int
    {
        return $this->cosRatioLowerBound;
    }

    /**
     * 佣金率下限
     * @param int $cosRatioLowerBound
     * @return self
     */
    public function setCosRatioLowerBound(?int $cosRatioLowerBound): self
    {
        $this->cosRatioLowerBound = $cosRatioLowerBound;
        return $this;
    }

    /**
     * 佣金率上限
     * @return int
     */
    public function getCosRatioUpperBound(): ?int
    {
        return $this->cosRatioUpperBound;
    }

    /**
     * 佣金率上限
     * @param int $cosRatioUpperBound
     * @return self
     */
    public function setCosRatioUpperBound(?int $cosRatioUpperBound): self
    {
        $this->cosRatioUpperBound = $cosRatioUpperBound;
        return $this;
    }

    /**
     * 是否为双佣金
     * @return bool
     */
    public function getIsDualCommission(): ?bool
    {
        return $this->isDualCommission;
    }

    /**
     * 是否为双佣金
     * @param bool $isDualCommission
     * @return self
     */
    public function setIsDualCommission(?bool $isDualCommission): self
    {
        $this->isDualCommission = $isDualCommission;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->cosRatioLowerBound !== null) {
            $result['cos_ratio_lower_bound'] = $this->cosRatioLowerBound;
        }
        if ($this->cosRatioUpperBound !== null) {
            $result['cos_ratio_upper_bound'] = $this->cosRatioUpperBound;
        }
        if ($this->isDualCommission !== null) {
            $result['is_dual_commission'] = $this->isDualCommission;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['cos_ratio_lower_bound'] ?? null) !== null) {
            $obj->cosRatioLowerBound = (int) $v;
        }
        if (($v = $data['cos_ratio_upper_bound'] ?? null) !== null) {
            $obj->cosRatioUpperBound = (int) $v;
        }
        if (($v = $data['is_dual_commission'] ?? null) !== null) {
            $obj->isDualCommission = (bool) $v;
        }
        return $obj;
    }
}
