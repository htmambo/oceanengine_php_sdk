<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class DpaBrandFuzzyGetV30ResponseDataBrandDetailListInnerBrandTrademarkListInner implements \JsonSerializable
{
    /**
     * 商标注册号
     * @var string
     */
    protected ?string $trademarkId = null;

    /**
     * 商标注册人
     * @var string
     */
    protected ?string $trademarkOwner = null;

    /**
     * 商标注册号
     * @return string
     */
    public function getTrademarkId(): ?string
    {
        return $this->trademarkId;
    }

    /**
     * 商标注册号
     * @param string $trademarkId
     * @return self
     */
    public function setTrademarkId(?string $trademarkId): self
    {
        $this->trademarkId = $trademarkId;
        return $this;
    }

    /**
     * 商标注册人
     * @return string
     */
    public function getTrademarkOwner(): ?string
    {
        return $this->trademarkOwner;
    }

    /**
     * 商标注册人
     * @param string $trademarkOwner
     * @return self
     */
    public function setTrademarkOwner(?string $trademarkOwner): self
    {
        $this->trademarkOwner = $trademarkOwner;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->trademarkId !== null) {
            $result['trademark_id'] = $this->trademarkId;
        }
        if ($this->trademarkOwner !== null) {
            $result['trademark_owner'] = $this->trademarkOwner;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['trademark_id'] ?? null) !== null) {
            $obj->trademarkId = (string) $v;
        }
        if (($v = $data['trademark_owner'] ?? null) !== null) {
            $obj->trademarkOwner = (string) $v;
        }
        return $obj;
    }
}
