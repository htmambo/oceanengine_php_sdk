<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class CarouselCreateV2ResponseDataCarousel implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\CarouselCreateV2ResponseDataCarouselAudio
     */
    protected ?\Oceanengine\Models\CarouselCreateV2ResponseDataCarouselAudio $audio = null;

    /**
     * @var int
     */
    protected ?int $carouselId = null;

    /**
     * 图文的作品描述
     * @var string
     */
    protected ?string $description = null;

    /**
     * @var string
     */
    protected ?string $fileName = null;

    /**
     * @var \Oceanengine\Models\CarouselCreateV2ResponseDataCarouselImagesInner[]
     */
    protected ?array $images = null;

    /**
     * @var string
     */
    protected ?string $uri = null;

    /**
     * @return \Oceanengine\Models\CarouselCreateV2ResponseDataCarouselAudio
     */
    public function getAudio(): ?\Oceanengine\Models\CarouselCreateV2ResponseDataCarouselAudio
    {
        return $this->audio;
    }

    /**
     * @param \Oceanengine\Models\CarouselCreateV2ResponseDataCarouselAudio $audio
     * @return self
     */
    public function setAudio(?\Oceanengine\Models\CarouselCreateV2ResponseDataCarouselAudio $audio): self
    {
        $this->audio = $audio;
        return $this;
    }

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
     * 图文的作品描述
     * @return string
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * 图文的作品描述
     * @param string $description
     * @return self
     */
    public function setDescription(?string $description): self
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return string
     */
    public function getFileName(): ?string
    {
        return $this->fileName;
    }

    /**
     * @param string $fileName
     * @return self
     */
    public function setFileName(?string $fileName): self
    {
        $this->fileName = $fileName;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CarouselCreateV2ResponseDataCarouselImagesInner[]
     */
    public function getImages(): ?array
    {
        return $this->images;
    }

    /**
     * @param \Oceanengine\Models\CarouselCreateV2ResponseDataCarouselImagesInner[] $images
     * @return self
     */
    public function setImages(?array $images): self
    {
        $this->images = $images;
        return $this;
    }

    /**
     * @return string
     */
    public function getUri(): ?string
    {
        return $this->uri;
    }

    /**
     * @param string $uri
     * @return self
     */
    public function setUri(?string $uri): self
    {
        $this->uri = $uri;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->audio !== null) {
            $result['audio'] = $this->audio;
        }
        if ($this->carouselId !== null) {
            $result['carousel_id'] = $this->carouselId;
        }
        if ($this->description !== null) {
            $result['description'] = $this->description;
        }
        if ($this->fileName !== null) {
            $result['file_name'] = $this->fileName;
        }
        if ($this->images !== null) {
            $result['images'] = $this->images;
        }
        if ($this->uri !== null) {
            $result['uri'] = $this->uri;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['audio'] ?? null) !== null && is_array($v)) {
            $obj->audio = \Oceanengine\Models\CarouselCreateV2ResponseDataCarouselAudio::fromArray($v);
        }
        if (($v = $data['carousel_id'] ?? null) !== null) {
            $obj->carouselId = (int) $v;
        }
        if (($v = $data['description'] ?? null) !== null) {
            $obj->description = (string) $v;
        }
        if (($v = $data['file_name'] ?? null) !== null) {
            $obj->fileName = (string) $v;
        }
        if (($v = $data['images'] ?? null) !== null && is_array($v)) {
            $obj->images = array_map(fn ($vv) => \Oceanengine\Models\CarouselCreateV2ResponseDataCarouselImagesInner::fromArray($vv), $v);
        }
        if (($v = $data['uri'] ?? null) !== null) {
            $obj->uri = (string) $v;
        }
        return $obj;
    }
}
