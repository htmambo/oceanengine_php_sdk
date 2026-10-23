<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsSiteUpdateV2RequestBricksInnerGroupContentInner implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $icId = null;

    /**
     * @var string
     */
    protected ?string $imageUrl = null;

    /**
     * @var string
     */
    protected ?string $tag = null;

    /**
     * @return string
     */
    public function getIcId(): ?string
    {
        return $this->icId;
    }

    /**
     * @param string $icId
     * @return self
     */
    public function setIcId(?string $icId): self
    {
        $this->icId = $icId;
        return $this;
    }

    /**
     * @return string
     */
    public function getImageUrl(): ?string
    {
        return $this->imageUrl;
    }

    /**
     * @param string $imageUrl
     * @return self
     */
    public function setImageUrl(?string $imageUrl): self
    {
        $this->imageUrl = $imageUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getTag(): ?string
    {
        return $this->tag;
    }

    /**
     * @param string $tag
     * @return self
     */
    public function setTag(?string $tag): self
    {
        $this->tag = $tag;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->icId !== null) {
            $result['ic_id'] = $this->icId;
        }
        if ($this->imageUrl !== null) {
            $result['image_url'] = $this->imageUrl;
        }
        if ($this->tag !== null) {
            $result['tag'] = $this->tag;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['ic_id'] ?? null) !== null) {
            $obj->icId = (string) $v;
        }
        if (($v = $data['image_url'] ?? null) !== null) {
            $obj->imageUrl = (string) $v;
        }
        if (($v = $data['tag'] ?? null) !== null) {
            $obj->tag = (string) $v;
        }
        return $obj;
    }
}
