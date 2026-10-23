<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsSiteCreateV2RequestBricksInnerSettingBackground implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $color = null;

    /**
     * @var \Oceanengine\Models\ToolsSiteCreateV2RequestBricksInnerSettingBackgroundImage
     */
    protected ?\Oceanengine\Models\ToolsSiteCreateV2RequestBricksInnerSettingBackgroundImage $image = null;

    /**
     * @var string
     */
    protected ?string $type = null;

    /**
     * @return string
     */
    public function getColor(): ?string
    {
        return $this->color;
    }

    /**
     * @param string $color
     * @return self
     */
    public function setColor(?string $color): self
    {
        $this->color = $color;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsSiteCreateV2RequestBricksInnerSettingBackgroundImage
     */
    public function getImage(): ?\Oceanengine\Models\ToolsSiteCreateV2RequestBricksInnerSettingBackgroundImage
    {
        return $this->image;
    }

    /**
     * @param \Oceanengine\Models\ToolsSiteCreateV2RequestBricksInnerSettingBackgroundImage $image
     * @return self
     */
    public function setImage(?\Oceanengine\Models\ToolsSiteCreateV2RequestBricksInnerSettingBackgroundImage $image): self
    {
        $this->image = $image;
        return $this;
    }

    /**
     * @return string
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return self
     */
    public function setType(?string $type): self
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->color !== null) {
            $result['color'] = $this->color;
        }
        if ($this->image !== null) {
            $result['image'] = $this->image;
        }
        if ($this->type !== null) {
            $result['type'] = $this->type;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['color'] ?? null) !== null) {
            $obj->color = (string) $v;
        }
        if (($v = $data['image'] ?? null) !== null && is_array($v)) {
            $obj->image = \Oceanengine\Models\ToolsSiteCreateV2RequestBricksInnerSettingBackgroundImage::fromArray($v);
        }
        if (($v = $data['type'] ?? null) !== null) {
            $obj->type = (string) $v;
        }
        return $obj;
    }
}
