<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanOverallAwemeListV10ResponseDataBindAwemeUserInfosInnerProductUniPromInfo implements \JsonSerializable
{
    /**
     * 是否可投商城
     * @var bool
     */
    protected ?bool $isAllowMall = null;

    /**
     * 是否可投商城
     * @return bool
     */
    public function getIsAllowMall(): ?bool
    {
        return $this->isAllowMall;
    }

    /**
     * 是否可投商城
     * @param bool $isAllowMall
     * @return self
     */
    public function setIsAllowMall(?bool $isAllowMall): self
    {
        $this->isAllowMall = $isAllowMall;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->isAllowMall !== null) {
            $result['is_allow_mall'] = $this->isAllowMall;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['is_allow_mall'] ?? null) !== null) {
            $obj->isAllowMall = (bool) $v;
        }
        return $obj;
    }
}
