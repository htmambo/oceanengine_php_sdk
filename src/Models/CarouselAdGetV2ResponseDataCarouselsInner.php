<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class CarouselAdGetV2ResponseDataCarouselsInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\CarouselAdGetV2ResponseDataCarouselsInnerAudio
     */
    protected ?\Oceanengine\Models\CarouselAdGetV2ResponseDataCarouselsInnerAudio $audio = null;

    /**
     * @var int
     */
    protected ?int $carouselType = null;

    /**
     * @var string
     */
    protected ?string $fileName = null;

    /**
     * @var int
     */
    protected ?int $id = null;

    /**
     * @var \Oceanengine\Models\CarouselAdGetV2ResponseDataCarouselsInnerImagesInner[]
     */
    protected ?array $images = null;

    /**
     * @var string
     */
    protected ?string $uri = null;

    /**
     * @return \Oceanengine\Models\CarouselAdGetV2ResponseDataCarouselsInnerAudio
     */
    public function getAudio(): ?\Oceanengine\Models\CarouselAdGetV2ResponseDataCarouselsInnerAudio
    {
        return $this->audio;
    }

    /**
     * @param \Oceanengine\Models\CarouselAdGetV2ResponseDataCarouselsInnerAudio $audio
     * @return self
     */
    public function setAudio(?\Oceanengine\Models\CarouselAdGetV2ResponseDataCarouselsInnerAudio $audio): self
    {
        $this->audio = $audio;
        return $this;
    }

    /**
     * @return int
     */
    public function getCarouselType(): ?int
    {
        return $this->carouselType;
    }

    /**
     * @param int $carouselType
     * @return self
     */
    public function setCarouselType(?int $carouselType): self
    {
        $this->carouselType = $carouselType;
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
     * @return \Oceanengine\Models\CarouselAdGetV2ResponseDataCarouselsInnerImagesInner[]
     */
    public function getImages(): ?array
    {
        return $this->images;
    }

    /**
     * @param \Oceanengine\Models\CarouselAdGetV2ResponseDataCarouselsInnerImagesInner[] $images
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
        if ($this->carouselType !== null) {
            $result['carousel_type'] = $this->carouselType;
        }
        if ($this->fileName !== null) {
            $result['file_name'] = $this->fileName;
        }
        if ($this->id !== null) {
            $result['id'] = $this->id;
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
            $obj->audio = \Oceanengine\Models\CarouselAdGetV2ResponseDataCarouselsInnerAudio::fromArray($v);
        }
        if (($v = $data['carousel_type'] ?? null) !== null) {
            $obj->carouselType = (int) $v;
        }
        if (($v = $data['file_name'] ?? null) !== null) {
            $obj->fileName = (string) $v;
        }
        if (($v = $data['id'] ?? null) !== null) {
            $obj->id = (int) $v;
        }
        if (($v = $data['images'] ?? null) !== null && is_array($v)) {
            $obj->images = array_map(fn ($vv) => \Oceanengine\Models\CarouselAdGetV2ResponseDataCarouselsInnerImagesInner::fromArray($vv), $v);
        }
        if (($v = $data['uri'] ?? null) !== null) {
            $obj->uri = (string) $v;
        }
        return $obj;
    }
}
