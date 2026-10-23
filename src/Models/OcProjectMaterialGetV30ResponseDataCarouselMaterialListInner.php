<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class OcProjectMaterialGetV30ResponseDataCarouselMaterialListInner implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $carouselId = null;

    /**
     * 图文作品描述
     * @var string
     */
    protected ?string $description = null;

    /**
     * @var int
     */
    protected ?int $itemId = null;

    /**
     * @var \Oceanengine\Models\OcProjectMaterialGetV30DataCarouselMaterialListMaterialStatusFrist
     */
    protected ?string $materialStatusFrist = null;

    /**
     * @var \Oceanengine\Models\OcProjectMaterialGetV30DataCarouselMaterialListMaterialStatusSecond[]
     */
    protected ?array $materialStatusSecond = null;

    /**
     * @var \Oceanengine\Models\OcProjectMaterialGetV30DataCarouselMaterialListVideoHpVisibility
     */
    protected ?string $videoHpVisibility = null;

    /**
     * @return int
     */
    public function getCarouselId(): ?int
    {
        return $this->carouselId;
    }

    /**
     * @param int $carouselId
     * @return self
     */
    public function setCarouselId(?int $carouselId): self
    {
        $this->carouselId = $carouselId;
        return $this;
    }

    /**
     * 图文作品描述
     * @return string
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * 图文作品描述
     * @param string $description
     * @return self
     */
    public function setDescription(?string $description): self
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return int
     */
    public function getItemId(): ?int
    {
        return $this->itemId;
    }

    /**
     * @param int $itemId
     * @return self
     */
    public function setItemId(?int $itemId): self
    {
        $this->itemId = $itemId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\OcProjectMaterialGetV30DataCarouselMaterialListMaterialStatusFrist
     */
    public function getMaterialStatusFrist(): ?string
    {
        return $this->materialStatusFrist;
    }

    /**
     * @param \Oceanengine\Models\OcProjectMaterialGetV30DataCarouselMaterialListMaterialStatusFrist $materialStatusFrist
     * @return self
     */
    public function setMaterialStatusFrist(?string $materialStatusFrist): self
    {
        $this->materialStatusFrist = $materialStatusFrist;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\OcProjectMaterialGetV30DataCarouselMaterialListMaterialStatusSecond[]
     */
    public function getMaterialStatusSecond(): ?array
    {
        return $this->materialStatusSecond;
    }

    /**
     * @param \Oceanengine\Models\OcProjectMaterialGetV30DataCarouselMaterialListMaterialStatusSecond[] $materialStatusSecond
     * @return self
     */
    public function setMaterialStatusSecond(?array $materialStatusSecond): self
    {
        $this->materialStatusSecond = $materialStatusSecond;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\OcProjectMaterialGetV30DataCarouselMaterialListVideoHpVisibility
     */
    public function getVideoHpVisibility(): ?string
    {
        return $this->videoHpVisibility;
    }

    /**
     * @param \Oceanengine\Models\OcProjectMaterialGetV30DataCarouselMaterialListVideoHpVisibility $videoHpVisibility
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
        if ($this->description !== null) {
            $result['description'] = $this->description;
        }
        if ($this->itemId !== null) {
            $result['item_id'] = $this->itemId;
        }
        if ($this->materialStatusFrist !== null) {
            $result['material_status_frist'] = $this->materialStatusFrist;
        }
        if ($this->materialStatusSecond !== null) {
            $result['material_status_second'] = $this->materialStatusSecond;
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
            $obj->carouselId = (int) $v;
        }
        if (($v = $data['description'] ?? null) !== null) {
            $obj->description = (string) $v;
        }
        if (($v = $data['item_id'] ?? null) !== null) {
            $obj->itemId = (int) $v;
        }
        if (($v = $data['material_status_frist'] ?? null) !== null) {
            $obj->materialStatusFrist = (string) $v;
        }
        if (($v = $data['material_status_second'] ?? null) !== null && is_array($v)) {
            $obj->materialStatusSecond = $v;
        }
        if (($v = $data['video_hp_visibility'] ?? null) !== null) {
            $obj->videoHpVisibility = (string) $v;
        }
        return $obj;
    }
}
