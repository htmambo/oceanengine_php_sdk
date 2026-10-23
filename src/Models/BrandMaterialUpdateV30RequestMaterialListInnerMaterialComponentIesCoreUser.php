<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentIesCoreUser implements \JsonSerializable
{
    /**
     * 抖音号
     * @var string
     */
    protected ?string $id = null;

    /**
     * 抖音号
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * 抖音号
     * @param string $id
     * @return self
     */
    public function setId(?string $id): self
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->id !== null) {
            $result['id'] = $this->id;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['id'] ?? null) !== null) {
            $obj->id = (string) $v;
        }
        return $obj;
    }
}
