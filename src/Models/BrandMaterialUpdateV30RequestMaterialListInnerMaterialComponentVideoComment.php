<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentVideoComment implements \JsonSerializable
{
    /**
     * 是否启用
     * @var bool
     */
    protected ?bool $isOpen = null;

    /**
     * 是否启用
     * @return bool
     */
    public function getIsOpen(): ?bool
    {
        return $this->isOpen;
    }

    /**
     * 是否启用
     * @param bool $isOpen
     * @return self
     */
    public function setIsOpen(?bool $isOpen): self
    {
        $this->isOpen = $isOpen;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->isOpen !== null) {
            $result['is_open'] = $this->isOpen;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['is_open'] ?? null) !== null) {
            $obj->isOpen = (bool) $v;
        }
        return $obj;
    }
}
