<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanAwemeInterestActionInterestKeywordV10ResponseDataListInner implements \JsonSerializable
{
    /**
     * 兴趣ID
     * @var int
     */
    protected ?int $id = null;

    /**
     * 兴趣名称
     * @var string
     */
    protected ?string $name = null;

    /**
     * 兴趣ID
     * @return int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * 兴趣ID
     * @param int $id
     * @return self
     */
    public function setId(?int $id): self
    {
        $this->id = $id;
        return $this;
    }

    /**
     * 兴趣名称
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * 兴趣名称
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
        if ($this->id !== null) {
            $result['id'] = $this->id;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['id'] ?? null) !== null) {
            $obj->id = (int) $v;
        }
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        return $obj;
    }
}
