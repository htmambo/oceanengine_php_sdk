<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsSiteCreateV2RequestBricksInnerBackground implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $color = null;

    /**
     * @var \Oceanengine\Models\ToolsSiteCreateV2RequestBricksInnerBackgroundDescription
     */
    protected ?\Oceanengine\Models\ToolsSiteCreateV2RequestBricksInnerBackgroundDescription $description = null;

    /**
     * @var string
     */
    protected ?string $image = null;

    /**
     * @var \Oceanengine\Models\ToolsSiteCreateV2RequestBricksInnerBackgroundTitle
     */
    protected ?\Oceanengine\Models\ToolsSiteCreateV2RequestBricksInnerBackgroundTitle $title = null;

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
     * @return \Oceanengine\Models\ToolsSiteCreateV2RequestBricksInnerBackgroundDescription
     */
    public function getDescription(): ?\Oceanengine\Models\ToolsSiteCreateV2RequestBricksInnerBackgroundDescription
    {
        return $this->description;
    }

    /**
     * @param \Oceanengine\Models\ToolsSiteCreateV2RequestBricksInnerBackgroundDescription $description
     * @return self
     */
    public function setDescription(?\Oceanengine\Models\ToolsSiteCreateV2RequestBricksInnerBackgroundDescription $description): self
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return string
     */
    public function getImage(): ?string
    {
        return $this->image;
    }

    /**
     * @param string $image
     * @return self
     */
    public function setImage(?string $image): self
    {
        $this->image = $image;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsSiteCreateV2RequestBricksInnerBackgroundTitle
     */
    public function getTitle(): ?\Oceanengine\Models\ToolsSiteCreateV2RequestBricksInnerBackgroundTitle
    {
        return $this->title;
    }

    /**
     * @param \Oceanengine\Models\ToolsSiteCreateV2RequestBricksInnerBackgroundTitle $title
     * @return self
     */
    public function setTitle(?\Oceanengine\Models\ToolsSiteCreateV2RequestBricksInnerBackgroundTitle $title): self
    {
        $this->title = $title;
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
        if ($this->description !== null) {
            $result['description'] = $this->description;
        }
        if ($this->image !== null) {
            $result['image'] = $this->image;
        }
        if ($this->title !== null) {
            $result['title'] = $this->title;
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
        if (($v = $data['description'] ?? null) !== null && is_array($v)) {
            $obj->description = \Oceanengine\Models\ToolsSiteCreateV2RequestBricksInnerBackgroundDescription::fromArray($v);
        }
        if (($v = $data['image'] ?? null) !== null) {
            $obj->image = (string) $v;
        }
        if (($v = $data['title'] ?? null) !== null && is_array($v)) {
            $obj->title = \Oceanengine\Models\ToolsSiteCreateV2RequestBricksInnerBackgroundTitle::fromArray($v);
        }
        if (($v = $data['type'] ?? null) !== null) {
            $obj->type = (string) $v;
        }
        return $obj;
    }
}
