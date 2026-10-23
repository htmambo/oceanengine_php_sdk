<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class CarouselUpdateV2RequestCarouselsInner implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $fileName = null;

    /**
     * @var int
     */
    protected ?int $id = null;

    /**
     * @return string
     */
    public function getFileName(): ?string
    {
        return $this->fileName;
    }

    /**
     * @param string $fileName
     * @return self
     */
    public function setFileName(?string $fileName): self
    {
        $this->fileName = $fileName;
        return $this;
    }

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
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->fileName !== null) {
            $result['file_name'] = $this->fileName;
        }
        if ($this->id !== null) {
            $result['id'] = $this->id;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['file_name'] ?? null) !== null) {
            $obj->fileName = (string) $v;
        }
        if (($v = $data['id'] ?? null) !== null) {
            $obj->id = (int) $v;
        }
        return $obj;
    }
}
