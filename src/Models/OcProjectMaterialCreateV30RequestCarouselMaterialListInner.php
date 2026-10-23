<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class OcProjectMaterialCreateV30RequestCarouselMaterialListInner implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $carouselId = null;

    /**
     * @var string
     */
    protected ?string $itemId = null;

    /**
     * @var \Oceanengine\Models\OcProjectMaterialCreateV30CarouselMaterialListVideoHpVisibility
     */
    protected ?string $videoHpVisibility = null;

    /**
     * @return string
     */
    public function getCarouselId(): ?string
    {
        return $this->carouselId;
    }

    /**
     * @param string $carouselId
     * @return self
     */
    public function setCarouselId(?string $carouselId): self
    {
        $this->carouselId = $carouselId;
        return $this;
    }

    /**
     * @return string
     */
    public function getItemId(): ?string
    {
        return $this->itemId;
    }

    /**
     * @param string $itemId
     * @return self
     */
    public function setItemId(?string $itemId): self
    {
        $this->itemId = $itemId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\OcProjectMaterialCreateV30CarouselMaterialListVideoHpVisibility
     */
    public function getVideoHpVisibility(): ?string
    {
        return $this->videoHpVisibility;
    }

    /**
     * @param \Oceanengine\Models\OcProjectMaterialCreateV30CarouselMaterialListVideoHpVisibility $videoHpVisibility
     * @return self
     */
    public function setVideoHpVisibility(?string $videoHpVisibility): self
    {
        $this->videoHpVisibility = $videoHpVisibility;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->carouselId !== null) {
            $result['carousel_id'] = $this->carouselId;
        }
        if ($this->itemId !== null) {
            $result['item_id'] = $this->itemId;
        }
        if ($this->videoHpVisibility !== null) {
            $result['video_hp_visibility'] = $this->videoHpVisibility;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['carousel_id'] ?? null) !== null) {
            $obj->carouselId = (string) $v;
        }
        if (($v = $data['item_id'] ?? null) !== null) {
            $obj->itemId = (string) $v;
        }
        if (($v = $data['video_hp_visibility'] ?? null) !== null) {
            $obj->videoHpVisibility = (string) $v;
        }
        return $obj;
    }
}
