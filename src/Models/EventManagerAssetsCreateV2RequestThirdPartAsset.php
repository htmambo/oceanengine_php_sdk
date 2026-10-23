<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class EventManagerAssetsCreateV2RequestThirdPartAsset implements \JsonSerializable
{
    /**
     * 落地页描述信息，长度限制为`150`，一个字符长度为1
     * @var string
     */
    protected ?string $description = null;

    /**
     * 落地页名称，长度限制为`25`，一个字符长度为1
     * @var string
     */
    protected ?string $name = null;

    /**
     * 落地页描述信息，长度限制为`150`，一个字符长度为1
     * @return string
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * 落地页描述信息，长度限制为`150`，一个字符长度为1
     * @param string $description
     * @return self
     */
    public function setDescription(?string $description): self
    {
        $this->description = $description;
        return $this;
    }

    /**
     * 落地页名称，长度限制为`25`，一个字符长度为1
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * 落地页名称，长度限制为`25`，一个字符长度为1
     * @param string $name
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->description !== null) {
            $result['description'] = $this->description;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['description'] ?? null) !== null) {
            $obj->description = (string) $v;
        }
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        return $obj;
    }
}
