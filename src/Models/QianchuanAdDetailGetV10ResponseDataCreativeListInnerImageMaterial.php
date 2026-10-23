<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanAdDetailGetV10ResponseDataCreativeListInnerImageMaterial implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $id = null;

    /**
     * @var string[]
     */
    protected ?array $imageIds = null;

    /**
     * @var int
     */
    protected ?int $isAutoGenerate = null;

    /**
     * @var string
     */
    protected ?string $url = null;

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
     * @return string[]
     */
    public function getImageIds(): ?array
    {
        return $this->imageIds;
    }

    /**
     * @param string[] $imageIds
     * @return self
     */
    public function setImageIds(?array $imageIds): self
    {
        $this->imageIds = $imageIds;
        return $this;
    }

    /**
     * @return int
     */
    public function getIsAutoGenerate(): ?int
    {
        return $this->isAutoGenerate;
    }

    /**
     * @param int $isAutoGenerate
     * @return self
     */
    public function setIsAutoGenerate(?int $isAutoGenerate): self
    {
        $this->isAutoGenerate = $isAutoGenerate;
        return $this;
    }

    /**
     * @return string
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

    /**
     * @param string $url
     * @return self
     */
    public function setUrl(?string $url): self
    {
        $this->url = $url;
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
        if ($this->imageIds !== null) {
            $result['image_ids'] = $this->imageIds;
        }
        if ($this->isAutoGenerate !== null) {
            $result['is_auto_generate'] = $this->isAutoGenerate;
        }
        if ($this->url !== null) {
            $result['url'] = $this->url;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['id'] ?? null) !== null) {
            $obj->id = (int) $v;
        }
        if (($v = $data['image_ids'] ?? null) !== null && is_array($v)) {
            $obj->imageIds = $v;
        }
        if (($v = $data['is_auto_generate'] ?? null) !== null) {
            $obj->isAutoGenerate = (int) $v;
        }
        if (($v = $data['url'] ?? null) !== null) {
            $obj->url = (string) $v;
        }
        return $obj;
    }
}
