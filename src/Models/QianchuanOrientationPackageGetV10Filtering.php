<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanOrientationPackageGetV10Filtering implements \JsonSerializable
{
    /**
     * @var int[]
     */
    protected ?array $id = null;

    /**
     * @var string
     */
    protected ?string $name = null;

    /**
     * @return int[]
     */
    public function getId(): ?array
    {
        return $this->id;
    }

    /**
     * @param int[] $id
     * @return self
     */
    public function setId(?array $id): self
    {
        $this->id = $id;
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
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['id'] ?? null) !== null && is_array($v)) {
            $obj->id = $v;
        }
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        return $obj;
    }
}
