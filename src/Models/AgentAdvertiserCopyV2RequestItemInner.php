<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AgentAdvertiserCopyV2RequestItemInner implements \JsonSerializable
{
    /**
     * 新广告主账户名称。不可重复
     * @var string
     */
    protected ?string $name = null;

    /**
     * 新广告主账户名称。不可重复
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * 新广告主账户名称。不可重复
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
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        return $obj;
    }
}
