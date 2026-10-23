<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StdProjectCreateV30RequestProjectMaterialsImageMaterialListInner implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $imageId = null;

    /**
     * @var \Oceanengine\Models\StdProjectCreateV30ProjectMaterialsImageMaterialListImageMode
     */
    protected ?string $imageMode = null;

    /**
     * @return string
     */
    public function getImageId(): ?string
    {
        return $this->imageId;
    }

    /**
     * @param string $imageId
     * @return self
     */
    public function setImageId(?string $imageId): self
    {
        $this->imageId = $imageId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StdProjectCreateV30ProjectMaterialsImageMaterialListImageMode
     */
    public function getImageMode(): ?string
    {
        return $this->imageMode;
    }

    /**
     * @param \Oceanengine\Models\StdProjectCreateV30ProjectMaterialsImageMaterialListImageMode $imageMode
     * @return self
     */
    public function setImageMode(?string $imageMode): self
    {
        $this->imageMode = $imageMode;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->imageId !== null) {
            $result['image_id'] = $this->imageId;
        }
        if ($this->imageMode !== null) {
            $result['image_mode'] = $this->imageMode;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['image_id'] ?? null) !== null) {
            $obj->imageId = (string) $v;
        }
        if (($v = $data['image_mode'] ?? null) !== null) {
            $obj->imageMode = (string) $v;
        }
        return $obj;
    }
}
