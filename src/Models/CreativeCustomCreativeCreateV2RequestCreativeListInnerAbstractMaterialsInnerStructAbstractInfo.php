<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class CreativeCustomCreativeCreateV2RequestCreativeListInnerAbstractMaterialsInnerStructAbstractInfo implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $abstractLabel = null;

    /**
     * @var string
     */
    protected ?string $abstractText = null;

    /**
     * @return string
     */
    public function getAbstractLabel(): ?string
    {
        return $this->abstractLabel;
    }

    /**
     * @param string $abstractLabel
     * @return self
     */
    public function setAbstractLabel(?string $abstractLabel): self
    {
        $this->abstractLabel = $abstractLabel;
        return $this;
    }

    /**
     * @return string
     */
    public function getAbstractText(): ?string
    {
        return $this->abstractText;
    }

    /**
     * @param string $abstractText
     * @return self
     */
    public function setAbstractText(?string $abstractText): self
    {
        $this->abstractText = $abstractText;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->abstractLabel !== null) {
            $result['abstract_label'] = $this->abstractLabel;
        }
        if ($this->abstractText !== null) {
            $result['abstract_text'] = $this->abstractText;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['abstract_label'] ?? null) !== null) {
            $obj->abstractLabel = (string) $v;
        }
        if (($v = $data['abstract_text'] ?? null) !== null) {
            $obj->abstractText = (string) $v;
        }
        return $obj;
    }
}
