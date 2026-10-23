<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class PromotionAutoGenerateConfigGetV30ResponseDataTemplatesInnerTemplateTextSchemaInner implements \JsonSerializable
{
    /**
     * 填充内容的键
     * @var string
     */
    protected ?string $key = null;

    /**
     * 填充内容的值
     * @var string
     */
    protected ?string $value = null;

    /**
     * 填充内容的键
     * @return string
     */
    public function getKey(): ?string
    {
        return $this->key;
    }

    /**
     * 填充内容的键
     * @param string $key
     * @return self
     */
    public function setKey(?string $key): self
    {
        $this->key = $key;
        return $this;
    }

    /**
     * 填充内容的值
     * @return string
     */
    public function getValue(): ?string
    {
        return $this->value;
    }

    /**
     * 填充内容的值
     * @param string $value
     * @return self
     */
    public function setValue(?string $value): self
    {
        $this->value = $value;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->key !== null) {
            $result['key'] = $this->key;
        }
        if ($this->value !== null) {
            $result['value'] = $this->value;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['key'] ?? null) !== null) {
            $obj->key = (string) $v;
        }
        if (($v = $data['value'] ?? null) !== null) {
            $obj->value = (string) $v;
        }
        return $obj;
    }
}
