<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarMcnProviderGetTaskDetailV2ResponseDataTaskDetailInfoStarMicroGameUniteExtraInfo implements \JsonSerializable
{
    /**
     * dou+流量是否参与结算
     * @var bool
     */
    protected ?bool $isDouPlusSettlement = null;

    /**
     * 是否打开内容评级
     * @var bool
     */
    protected ?bool $isOpenContentGrading = null;

    /**
     * dou+流量是否参与结算
     * @return bool
     */
    public function getIsDouPlusSettlement(): ?bool
    {
        return $this->isDouPlusSettlement;
    }

    /**
     * dou+流量是否参与结算
     * @param bool $isDouPlusSettlement
     * @return self
     */
    public function setIsDouPlusSettlement(?bool $isDouPlusSettlement): self
    {
        $this->isDouPlusSettlement = $isDouPlusSettlement;
        return $this;
    }

    /**
     * 是否打开内容评级
     * @return bool
     */
    public function getIsOpenContentGrading(): ?bool
    {
        return $this->isOpenContentGrading;
    }

    /**
     * 是否打开内容评级
     * @param bool $isOpenContentGrading
     * @return self
     */
    public function setIsOpenContentGrading(?bool $isOpenContentGrading): self
    {
        $this->isOpenContentGrading = $isOpenContentGrading;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->isDouPlusSettlement !== null) {
            $result['is_dou_plus_settlement'] = $this->isDouPlusSettlement;
        }
        if ($this->isOpenContentGrading !== null) {
            $result['is_open_content_grading'] = $this->isOpenContentGrading;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['is_dou_plus_settlement'] ?? null) !== null) {
            $obj->isDouPlusSettlement = (bool) $v;
        }
        if (($v = $data['is_open_content_grading'] ?? null) !== null) {
            $obj->isOpenContentGrading = (bool) $v;
        }
        return $obj;
    }
}
