<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarMcnProviderGetTaskItemListV2ResponseDataItemsInnerItemInfoCoreUser implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $id = null;

    /**
     * @var string
     */
    protected ?string $nickName = null;

    /**
     * @return int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return self
     */
    public function setId(?int $id): self
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getNickName(): ?string
    {
        return $this->nickName;
    }

    /**
     * @param string $nickName
     * @return self
     */
    public function setNickName(?string $nickName): self
    {
        $this->nickName = $nickName;
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
        if ($this->nickName !== null) {
            $result['nick_name'] = $this->nickName;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['id'] ?? null) !== null) {
            $obj->id = (int) $v;
        }
        if (($v = $data['nick_name'] ?? null) !== null) {
            $obj->nickName = (string) $v;
        }
        return $obj;
    }
}
