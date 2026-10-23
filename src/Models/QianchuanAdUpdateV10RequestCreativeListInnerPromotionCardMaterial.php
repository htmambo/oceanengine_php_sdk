<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanAdUpdateV10RequestCreativeListInnerPromotionCardMaterial implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $actionButton = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdUpdateV10CreativeListPromotionCardMaterialButtonSmartOptimization
     */
    protected ?string $buttonSmartOptimization = null;

    /**
     * @var int
     */
    protected ?int $componentId = null;

    /**
     * @var int
     */
    protected ?int $id = null;

    /**
     * @var string
     */
    protected ?string $imageId = null;

    /**
     * @var string[]
     */
    protected ?array $sellingPoints = null;

    /**
     * @var string
     */
    protected ?string $title = null;

    /**
     * @return string
     */
    public function getActionButton(): ?string
    {
        return $this->actionButton;
    }

    /**
     * @param string $actionButton
     * @return self
     */
    public function setActionButton(?string $actionButton): self
    {
        $this->actionButton = $actionButton;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAdUpdateV10CreativeListPromotionCardMaterialButtonSmartOptimization
     */
    public function getButtonSmartOptimization(): ?string
    {
        return $this->buttonSmartOptimization;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdUpdateV10CreativeListPromotionCardMaterialButtonSmartOptimization $buttonSmartOptimization
     * @return self
     */
    public function setButtonSmartOptimization(?string $buttonSmartOptimization): self
    {
        $this->buttonSmartOptimization = $buttonSmartOptimization;
        return $this;
    }

    /**
     * @return int
     */
    public function getComponentId(): ?int
    {
        return $this->componentId;
    }

    /**
     * @param int $componentId
     * @return self
     */
    public function setComponentId(?int $componentId): self
    {
        $this->componentId = $componentId;
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
     * @return string[]
     */
    public function getSellingPoints(): ?array
    {
        return $this->sellingPoints;
    }

    /**
     * @param string[] $sellingPoints
     * @return self
     */
    public function setSellingPoints(?array $sellingPoints): self
    {
        $this->sellingPoints = $sellingPoints;
        return $this;
    }

    /**
     * @return string
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return self
     */
    public function setTitle(?string $title): self
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->actionButton !== null) {
            $result['action_button'] = $this->actionButton;
        }
        if ($this->buttonSmartOptimization !== null) {
            $result['button_smart_optimization'] = $this->buttonSmartOptimization;
        }
        if ($this->componentId !== null) {
            $result['component_id'] = $this->componentId;
        }
        if ($this->id !== null) {
            $result['id'] = $this->id;
        }
        if ($this->imageId !== null) {
            $result['image_id'] = $this->imageId;
        }
        if ($this->sellingPoints !== null) {
            $result['selling_points'] = $this->sellingPoints;
        }
        if ($this->title !== null) {
            $result['title'] = $this->title;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['action_button'] ?? null) !== null) {
            $obj->actionButton = (string) $v;
        }
        if (($v = $data['button_smart_optimization'] ?? null) !== null) {
            $obj->buttonSmartOptimization = (string) $v;
        }
        if (($v = $data['component_id'] ?? null) !== null) {
            $obj->componentId = (int) $v;
        }
        if (($v = $data['id'] ?? null) !== null) {
            $obj->id = (int) $v;
        }
        if (($v = $data['image_id'] ?? null) !== null) {
            $obj->imageId = (string) $v;
        }
        if (($v = $data['selling_points'] ?? null) !== null && is_array($v)) {
            $obj->sellingPoints = $v;
        }
        if (($v = $data['title'] ?? null) !== null) {
            $obj->title = (string) $v;
        }
        return $obj;
    }
}
