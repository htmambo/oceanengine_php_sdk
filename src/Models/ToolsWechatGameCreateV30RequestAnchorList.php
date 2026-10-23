<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsWechatGameCreateV30RequestAnchorList implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $guideText = null;

    /**
     * @var string
     */
    protected ?string $headerImageUrl = null;

    /**
     * @var string
     */
    protected ?string $iconImageUrl = null;

    /**
     * @var string[]
     */
    protected ?array $imagesHorizontalUrl = null;

    /**
     * @var string[]
     */
    protected ?array $imagesVerticalUrl = null;

    /**
     * @var string
     */
    protected ?string $introduction = null;

    /**
     * @var string[]
     */
    protected ?array $labels = null;

    /**
     * @return string
     */
    public function getGuideText(): ?string
    {
        return $this->guideText;
    }

    /**
     * @param string $guideText
     * @return self
     */
    public function setGuideText(?string $guideText): self
    {
        $this->guideText = $guideText;
        return $this;
    }

    /**
     * @return string
     */
    public function getHeaderImageUrl(): ?string
    {
        return $this->headerImageUrl;
    }

    /**
     * @param string $headerImageUrl
     * @return self
     */
    public function setHeaderImageUrl(?string $headerImageUrl): self
    {
        $this->headerImageUrl = $headerImageUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getIconImageUrl(): ?string
    {
        return $this->iconImageUrl;
    }

    /**
     * @param string $iconImageUrl
     * @return self
     */
    public function setIconImageUrl(?string $iconImageUrl): self
    {
        $this->iconImageUrl = $iconImageUrl;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getImagesHorizontalUrl(): ?array
    {
        return $this->imagesHorizontalUrl;
    }

    /**
     * @param string[] $imagesHorizontalUrl
     * @return self
     */
    public function setImagesHorizontalUrl(?array $imagesHorizontalUrl): self
    {
        $this->imagesHorizontalUrl = $imagesHorizontalUrl;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getImagesVerticalUrl(): ?array
    {
        return $this->imagesVerticalUrl;
    }

    /**
     * @param string[] $imagesVerticalUrl
     * @return self
     */
    public function setImagesVerticalUrl(?array $imagesVerticalUrl): self
    {
        $this->imagesVerticalUrl = $imagesVerticalUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getIntroduction(): ?string
    {
        return $this->introduction;
    }

    /**
     * @param string $introduction
     * @return self
     */
    public function setIntroduction(?string $introduction): self
    {
        $this->introduction = $introduction;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getLabels(): ?array
    {
        return $this->labels;
    }

    /**
     * @param string[] $labels
     * @return self
     */
    public function setLabels(?array $labels): self
    {
        $this->labels = $labels;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->guideText !== null) {
            $result['guide_text'] = $this->guideText;
        }
        if ($this->headerImageUrl !== null) {
            $result['header_image_url'] = $this->headerImageUrl;
        }
        if ($this->iconImageUrl !== null) {
            $result['icon_image_url'] = $this->iconImageUrl;
        }
        if ($this->imagesHorizontalUrl !== null) {
            $result['images_horizontal_url'] = $this->imagesHorizontalUrl;
        }
        if ($this->imagesVerticalUrl !== null) {
            $result['images_vertical_url'] = $this->imagesVerticalUrl;
        }
        if ($this->introduction !== null) {
            $result['introduction'] = $this->introduction;
        }
        if ($this->labels !== null) {
            $result['labels'] = $this->labels;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['guide_text'] ?? null) !== null) {
            $obj->guideText = (string) $v;
        }
        if (($v = $data['header_image_url'] ?? null) !== null) {
            $obj->headerImageUrl = (string) $v;
        }
        if (($v = $data['icon_image_url'] ?? null) !== null) {
            $obj->iconImageUrl = (string) $v;
        }
        if (($v = $data['images_horizontal_url'] ?? null) !== null && is_array($v)) {
            $obj->imagesHorizontalUrl = $v;
        }
        if (($v = $data['images_vertical_url'] ?? null) !== null && is_array($v)) {
            $obj->imagesVerticalUrl = $v;
        }
        if (($v = $data['introduction'] ?? null) !== null) {
            $obj->introduction = (string) $v;
        }
        if (($v = $data['labels'] ?? null) !== null && is_array($v)) {
            $obj->labels = $v;
        }
        return $obj;
    }
}
