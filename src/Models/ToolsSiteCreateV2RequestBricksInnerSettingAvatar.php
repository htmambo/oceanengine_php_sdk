<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsSiteCreateV2RequestBricksInnerSettingAvatar implements \JsonSerializable
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
        return $obj;
    }
}
