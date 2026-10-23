<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class CarouselListV2ResponseDataCarouselsInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\CarouselListV2ResponseDataCarouselsInnerAudio
     */
    protected ?\Oceanengine\Models\CarouselListV2ResponseDataCarouselsInnerAudio $audio = null;

    /**
     * @var string
     */
    protected ?string $createTime = null;

    /**
     * @var string
     */
    protected ?string $description = null;

    /**
     * @var string
     */
    protected ?string $fileName = null;

    /**
     * @var int
     */
    protected ?int $id = null;

    /**
     * @var \Oceanengine\Models\CarouselListV2ResponseDataCarouselsInnerImagesInner[]
     */
    protected ?array $images = null;

    /**
     * @var \Oceanengine\Models\CarouselListV2DataCarouselsSource
     */
    protected ?string $source = null;

    /**
     * @var string
     */
    protected ?string $updateTime = null;

    /**
     * @return \Oceanengine\Models\CarouselListV2ResponseDataCarouselsInnerAudio
     */
    public function getAudio(): ?\Oceanengine\Models\CarouselListV2ResponseDataCarouselsInnerAudio
    {
        return $this->audio;
    }

    /**
     * @param \Oceanengine\Models\CarouselListV2ResponseDataCarouselsInnerAudio $audio
     * @return self
     */
    public function setAudio(?\Oceanengine\Models\CarouselListV2ResponseDataCarouselsInnerAudio $audio): self
    {
        $this->audio = $audio;
        return $this;
    }

    /**
     * @return string
     */
    public function getCreateTime(): ?string
    {
        return $this->createTime;
    }

    /**
     * @param string $createTime
     * @return self
     */
    public function setCreateTime(?string $createTime): self
    {
        $this->createTime = $createTime;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
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
     * @return \Oceanengine\Models\CarouselListV2ResponseDataCarouselsInnerImagesInner[]
     */
    public function getImages(): ?array
    {
        return $this->images;
    }

    /**
     * @param \Oceanengine\Models\CarouselListV2ResponseDataCarouselsInnerImagesInner[] $images
     * @return self
     */
    public function setImages(?array $images): self
    {
        $this->images = $images;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CarouselListV2DataCarouselsSource
     */
    public function getSource(): ?string
    {
        return $this->source;
    }

    /**
     * @param \Oceanengine\Models\CarouselListV2DataCarouselsSource $source
     * @return self
     */
    public function setSource(?string $source): self
    {
        $this->source = $source;
        return $this;
    }

    /**
     * @return string
     */
    public function getUpdateTime(): ?string
    {
        return $this->updateTime;
    }

    /**
     * @param string $updateTime
     * @return self
     */
    public function setUpdateTime(?string $updateTime): self
    {
        $this->updateTime = $updateTime;
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
        if ($this->createTime !== null) {
            $result['create_time'] = $this->createTime;
        }
        if ($this->description !== null) {
            $result['description'] = $this->description;
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
        if ($this->source !== null) {
            $result['source'] = $this->source;
        }
        if ($this->updateTime !== null) {
            $result['update_time'] = $this->updateTime;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['audio'] ?? null) !== null && is_array($v)) {
            $obj->audio = \Oceanengine\Models\CarouselListV2ResponseDataCarouselsInnerAudio::fromArray($v);
        }
        if (($v = $data['create_time'] ?? null) !== null) {
            $obj->createTime = (string) $v;
        }
        if (($v = $data['description'] ?? null) !== null) {
            $obj->description = (string) $v;
        }
        if (($v = $data['file_name'] ?? null) !== null) {
            $obj->fileName = (string) $v;
        }
        if (($v = $data['id'] ?? null) !== null) {
            $obj->id = (int) $v;
        }
        if (($v = $data['images'] ?? null) !== null && is_array($v)) {
            $obj->images = array_map(fn ($vv) => \Oceanengine\Models\CarouselListV2ResponseDataCarouselsInnerImagesInner::fromArray($vv), $v);
        }
        if (($v = $data['source'] ?? null) !== null) {
            $obj->source = (string) $v;
        }
        if (($v = $data['update_time'] ?? null) !== null) {
            $obj->updateTime = (string) $v;
        }
        return $obj;
    }
}
