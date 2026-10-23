<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class LocalActionKeywordV30ResponseDataKeywordsInner implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $id = null;

    /**
     * @var string
     */
    protected ?string $name = null;

    /**
     * 预估该词覆盖人数
     * @var string
     */
    protected ?string $num = null;

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
     * 预估该词覆盖人数
     * @return string
     */
    public function getNum(): ?string
    {
        return $this->num;
    }

    /**
     * 预估该词覆盖人数
     * @param string $num
     * @return self
     */
    public function setNum(?string $num): self
    {
        $this->num = $num;
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
        if ($this->num !== null) {
            $result['num'] = $this->num;
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
        if (($v = $data['num'] ?? null) !== null) {
            $obj->num = (string) $v;
        }
        return $obj;
    }
}
