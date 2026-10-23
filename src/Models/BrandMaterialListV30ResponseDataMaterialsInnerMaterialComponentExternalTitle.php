<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentExternalTitle implements \JsonSerializable
{
    /**
     * 落地页标题
     * @var string
     */
    protected ?string $externalTitle = null;

    /**
     * @var string
     */
    protected ?string $source = null;

    /**
     * 落地页标题
     * @return string
     */
    public function getExternalTitle(): ?string
    {
        return $this->externalTitle;
    }

    /**
     * 落地页标题
     * @param string $externalTitle
     * @return self
     */
    public function setExternalTitle(?string $externalTitle): self
    {
        $this->externalTitle = $externalTitle;
        return $this;
    }

    /**
     * @return string
     */
    public function getSource(): ?string
    {
        return $this->source;
    }

    /**
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
        if ($this->externalTitle !== null) {
            $result['external_title'] = $this->externalTitle;
        }
        if ($this->source !== null) {
            $result['source'] = $this->source;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['external_title'] ?? null) !== null) {
            $obj->externalTitle = (string) $v;
        }
        if (($v = $data['source'] ?? null) !== null) {
            $obj->source = (string) $v;
        }
        return $obj;
    }
}
