<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsAppManagementIndustryInfoListV2ResponseDataIndustriesInnerChildrenInnerChildrenInner implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $id = null;

    /**
     * @var int
     */
    protected ?int $level = null;

    /**
     * @var string
     */
    protected ?string $name = null;

    /**
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return self
     */
    public function setId(?string $id): self
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return int
     */
    public function getLevel(): ?int
    {
        return $this->level;
    }

    /**
     * @param int $level
     * @return self
     */
    public function setLevel(?int $level): self
    {
        $this->level = $level;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
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
        if ($this->level !== null) {
            $result['level'] = $this->level;
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
            $obj->id = (string) $v;
        }
        if (($v = $data['level'] ?? null) !== null) {
            $obj->level = (int) $v;
        }
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        return $obj;
    }
}
