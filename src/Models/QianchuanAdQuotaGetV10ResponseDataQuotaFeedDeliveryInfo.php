<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanAdQuotaGetV10ResponseDataQuotaFeedDeliveryInfo implements \JsonSerializable
{
    /**
     * 托管在投计划数
     * @var int
     */
    protected ?int $adlabNum = null;

    /**
     * 非托管在投计划数
     * @var int
     */
    protected ?int $noAdlabNum = null;

    /**
     * 总在投计划数
     * @var int
     */
    protected ?int $totalNum = null;

    /**
     * 托管在投计划数
     * @return int
     */
    public function getAdlabNum(): ?int
    {
        return $this->adlabNum;
    }

    /**
     * 托管在投计划数
     * @param int $adlabNum
     * @return self
     */
    public function setAdlabNum(?int $adlabNum): self
    {
        $this->adlabNum = $adlabNum;
        return $this;
    }

    /**
     * 非托管在投计划数
     * @return int
     */
    public function getNoAdlabNum(): ?int
    {
        return $this->noAdlabNum;
    }

    /**
     * 非托管在投计划数
     * @param int $noAdlabNum
     * @return self
     */
    public function setNoAdlabNum(?int $noAdlabNum): self
    {
        $this->noAdlabNum = $noAdlabNum;
        return $this;
    }

    /**
     * 总在投计划数
     * @return int
     */
    public function getTotalNum(): ?int
    {
        return $this->totalNum;
    }

    /**
     * 总在投计划数
     * @param int $totalNum
     * @return self
     */
    public function setTotalNum(?int $totalNum): self
    {
        $this->totalNum = $totalNum;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->adlabNum !== null) {
            $result['adlab_num'] = $this->adlabNum;
        }
        if ($this->noAdlabNum !== null) {
            $result['no_adlab_num'] = $this->noAdlabNum;
        }
        if ($this->totalNum !== null) {
            $result['total_num'] = $this->totalNum;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['adlab_num'] ?? null) !== null) {
            $obj->adlabNum = (int) $v;
        }
        if (($v = $data['no_adlab_num'] ?? null) !== null) {
            $obj->noAdlabNum = (int) $v;
        }
        if (($v = $data['total_num'] ?? null) !== null) {
            $obj->totalNum = (int) $v;
        }
        return $obj;
    }
}
