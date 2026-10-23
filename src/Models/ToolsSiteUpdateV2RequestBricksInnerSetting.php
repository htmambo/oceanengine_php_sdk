<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsSiteUpdateV2RequestBricksInnerSetting implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ToolsSiteUpdateV2RequestBricksInnerSettingAvatar
     */
    protected ?\Oceanengine\Models\ToolsSiteUpdateV2RequestBricksInnerSettingAvatar $avatar = null;

    /**
     * @var \Oceanengine\Models\ToolsSiteUpdateV2RequestBricksInnerSettingBackground
     */
    protected ?\Oceanengine\Models\ToolsSiteUpdateV2RequestBricksInnerSettingBackground $background = null;

    /**
     * @var \Oceanengine\Models\ToolsSiteUpdateV2RequestBricksInnerSettingButton
     */
    protected ?\Oceanengine\Models\ToolsSiteUpdateV2RequestBricksInnerSettingButton $button = null;

    /**
     * @var \Oceanengine\Models\ToolsSiteUpdateV2RequestBricksInnerSettingImage
     */
    protected ?\Oceanengine\Models\ToolsSiteUpdateV2RequestBricksInnerSettingImage $image = null;

    /**
     * @var string
     */
    protected ?string $introduceType = null;

    /**
     * @var string[]
     */
    protected ?array $items = null;

    /**
     * @var \Oceanengine\Models\ToolsSiteUpdateV2RequestBricksInnerSettingLabel
     */
    protected ?\Oceanengine\Models\ToolsSiteUpdateV2RequestBricksInnerSettingLabel $label = null;

    /**
     * @var int
     */
    protected ?int $styleType = null;

    /**
     * @var \Oceanengine\Models\ToolsSiteUpdateV2RequestBricksInnerSettingTitle
     */
    protected ?\Oceanengine\Models\ToolsSiteUpdateV2RequestBricksInnerSettingTitle $title = null;

    /**
     * @return \Oceanengine\Models\ToolsSiteUpdateV2RequestBricksInnerSettingAvatar
     */
    public function getAvatar(): ?\Oceanengine\Models\ToolsSiteUpdateV2RequestBricksInnerSettingAvatar
    {
        return $this->avatar;
    }

    /**
     * @param \Oceanengine\Models\ToolsSiteUpdateV2RequestBricksInnerSettingAvatar $avatar
     * @return self
     */
    public function setAvatar(?\Oceanengine\Models\ToolsSiteUpdateV2RequestBricksInnerSettingAvatar $avatar): self
    {
        $this->avatar = $avatar;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsSiteUpdateV2RequestBricksInnerSettingBackground
     */
    public function getBackground(): ?\Oceanengine\Models\ToolsSiteUpdateV2RequestBricksInnerSettingBackground
    {
        return $this->background;
    }

    /**
     * @param \Oceanengine\Models\ToolsSiteUpdateV2RequestBricksInnerSettingBackground $background
     * @return self
     */
    public function setBackground(?\Oceanengine\Models\ToolsSiteUpdateV2RequestBricksInnerSettingBackground $background): self
    {
        $this->background = $background;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsSiteUpdateV2RequestBricksInnerSettingButton
     */
    public function getButton(): ?\Oceanengine\Models\ToolsSiteUpdateV2RequestBricksInnerSettingButton
    {
        return $this->button;
    }

    /**
     * @param \Oceanengine\Models\ToolsSiteUpdateV2RequestBricksInnerSettingButton $button
     * @return self
     */
    public function setButton(?\Oceanengine\Models\ToolsSiteUpdateV2RequestBricksInnerSettingButton $button): self
    {
        $this->button = $button;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsSiteUpdateV2RequestBricksInnerSettingImage
     */
    public function getImage(): ?\Oceanengine\Models\ToolsSiteUpdateV2RequestBricksInnerSettingImage
    {
        return $this->image;
    }

    /**
     * @param \Oceanengine\Models\ToolsSiteUpdateV2RequestBricksInnerSettingImage $image
     * @return self
     */
    public function setImage(?\Oceanengine\Models\ToolsSiteUpdateV2RequestBricksInnerSettingImage $image): self
    {
        $this->image = $image;
        return $this;
    }

    /**
     * @return string
     */
    public function getIntroduceType(): ?string
    {
        return $this->introduceType;
    }

    /**
     * @param string $introduceType
     * @return self
     */
    public function setIntroduceType(?string $introduceType): self
    {
        $this->introduceType = $introduceType;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getItems(): ?array
    {
        return $this->items;
    }

    /**
     * @param string[] $items
     * @return self
     */
    public function setItems(?array $items): self
    {
        $this->items = $items;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsSiteUpdateV2RequestBricksInnerSettingLabel
     */
    public function getLabel(): ?\Oceanengine\Models\ToolsSiteUpdateV2RequestBricksInnerSettingLabel
    {
        return $this->label;
    }

    /**
     * @param \Oceanengine\Models\ToolsSiteUpdateV2RequestBricksInnerSettingLabel $label
     * @return self
     */
    public function setLabel(?\Oceanengine\Models\ToolsSiteUpdateV2RequestBricksInnerSettingLabel $label): self
    {
        $this->label = $label;
        return $this;
    }

    /**
     * @return int
     */
    public function getStyleType(): ?int
    {
        return $this->styleType;
    }

    /**
     * @param int $styleType
     * @return self
     */
    public function setStyleType(?int $styleType): self
    {
        $this->styleType = $styleType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsSiteUpdateV2RequestBricksInnerSettingTitle
     */
    public function getTitle(): ?\Oceanengine\Models\ToolsSiteUpdateV2RequestBricksInnerSettingTitle
    {
        return $this->title;
    }

    /**
     * @param \Oceanengine\Models\ToolsSiteUpdateV2RequestBricksInnerSettingTitle $title
     * @return self
     */
    public function setTitle(?\Oceanengine\Models\ToolsSiteUpdateV2RequestBricksInnerSettingTitle $title): self
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
        if ($this->avatar !== null) {
            $result['avatar'] = $this->avatar;
        }
        if ($this->background !== null) {
            $result['background'] = $this->background;
        }
        if ($this->button !== null) {
            $result['button'] = $this->button;
        }
        if ($this->image !== null) {
            $result['image'] = $this->image;
        }
        if ($this->introduceType !== null) {
            $result['introduce_type'] = $this->introduceType;
        }
        if ($this->items !== null) {
            $result['items'] = $this->items;
        }
        if ($this->label !== null) {
            $result['label'] = $this->label;
        }
        if ($this->styleType !== null) {
            $result['style_type'] = $this->styleType;
        }
        if ($this->title !== null) {
            $result['title'] = $this->title;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['avatar'] ?? null) !== null && is_array($v)) {
            $obj->avatar = \Oceanengine\Models\ToolsSiteUpdateV2RequestBricksInnerSettingAvatar::fromArray($v);
        }
        if (($v = $data['background'] ?? null) !== null && is_array($v)) {
            $obj->background = \Oceanengine\Models\ToolsSiteUpdateV2RequestBricksInnerSettingBackground::fromArray($v);
        }
        if (($v = $data['button'] ?? null) !== null && is_array($v)) {
            $obj->button = \Oceanengine\Models\ToolsSiteUpdateV2RequestBricksInnerSettingButton::fromArray($v);
        }
        if (($v = $data['image'] ?? null) !== null && is_array($v)) {
            $obj->image = \Oceanengine\Models\ToolsSiteUpdateV2RequestBricksInnerSettingImage::fromArray($v);
        }
        if (($v = $data['introduce_type'] ?? null) !== null) {
            $obj->introduceType = (string) $v;
        }
        if (($v = $data['items'] ?? null) !== null && is_array($v)) {
            $obj->items = $v;
        }
        if (($v = $data['label'] ?? null) !== null && is_array($v)) {
            $obj->label = \Oceanengine\Models\ToolsSiteUpdateV2RequestBricksInnerSettingLabel::fromArray($v);
        }
        if (($v = $data['style_type'] ?? null) !== null) {
            $obj->styleType = (int) $v;
        }
        if (($v = $data['title'] ?? null) !== null && is_array($v)) {
            $obj->title = \Oceanengine\Models\ToolsSiteUpdateV2RequestBricksInnerSettingTitle::fromArray($v);
        }
        return $obj;
    }
}
