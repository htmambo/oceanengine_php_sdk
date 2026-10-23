<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentExternalTitle implements \JsonSerializable
{
    /**
     * 落地页标题
     * @var string
     */
    protected ?string $source = null;

    /**
     * 落地页标题
     * @return string
     */
    public function getSource(): ?string
    {
        return $this->source;
    }

    /**
     * 落地页标题
     * @param string $source
     * @return self
     */
    public function setSource(?string $source): self
    {
        $this->source = $source;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->source !== null) {
            $result['source'] = $this->source;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['source'] ?? null) !== null) {
            $obj->source = (string) $v;
        }
        return $obj;
    }
}
