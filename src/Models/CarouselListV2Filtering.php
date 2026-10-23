<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class CarouselListV2Filtering implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $audioId = null;

    /**
     * @var int[]
     */
    protected ?array $carouselIds = null;

    /**
     * @var string
     */
    protected ?string $endTime = null;

    /**
     * @var string
     */
    protected ?string $fileName = null;

    /**
     * @var string[]
     */
    protected ?array $imageIds = null;

    /**
     * @var \Oceanengine\Models\CarouselListV2FilteringSource[]
     */
    protected ?array $source = null;

    /**
     * @var string
     */
    protected ?string $startTime = null;

    /**
     * @return string
     */
    public function getAudioId(): ?string
    {
        return $this->audioId;
    }

    /**
     * @param string $audioId
     * @return self
     */
    public function setAudioId(?string $audioId): self
    {
        $this->audioId = $audioId;
        return $this;
    }

    /**
     * @return int[]
     */
    public function getCarouselIds(): ?array
    {
        return $this->carouselIds;
    }

    /**
     * @param int[] $carouselIds
     * @return self
     */
    public function setCarouselIds(?array $carouselIds): self
    {
        $this->carouselIds = $carouselIds;
        return $this;
    }

    /**
     * @return string
     */
    public function getEndTime(): ?string
    {
        return $this->endTime;
    }

    /**
     * @param string $endTime
     * @return self
     */
    public function setEndTime(?string $endTime): self
    {
        $this->endTime = $endTime;
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
     * @return string[]
     */
    public function getImageIds(): ?array
    {
        return $this->imageIds;
    }

    /**
     * @param string[] $imageIds
     * @return self
     */
    public function setImageIds(?array $imageIds): self
    {
        $this->imageIds = $imageIds;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CarouselListV2FilteringSource[]
     */
    public function getSource(): ?array
    {
        return $this->source;
    }

    /**
     * @param \Oceanengine\Models\CarouselListV2FilteringSource[] $source
     * @return self
     */
    public function setSource(?array $source): self
    {
        $this->source = $source;
        return $this;
    }

    /**
     * @return string
     */
    public function getStartTime(): ?string
    {
        return $this->startTime;
    }

    /**
     * @param string $startTime
     * @return self
     */
    public function setStartTime(?string $startTime): self
    {
        $this->startTime = $startTime;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->audioId !== null) {
            $result['audio_id'] = $this->audioId;
        }
        if ($this->carouselIds !== null) {
            $result['carousel_ids'] = $this->carouselIds;
        }
        if ($this->endTime !== null) {
            $result['end_time'] = $this->endTime;
        }
        if ($this->fileName !== null) {
            $result['file_name'] = $this->fileName;
        }
        if ($this->imageIds !== null) {
            $result['image_ids'] = $this->imageIds;
        }
        if ($this->source !== null) {
            $result['source'] = $this->source;
        }
        if ($this->startTime !== null) {
            $result['start_time'] = $this->startTime;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['audio_id'] ?? null) !== null) {
            $obj->audioId = (string) $v;
        }
        if (($v = $data['carousel_ids'] ?? null) !== null && is_array($v)) {
            $obj->carouselIds = $v;
        }
        if (($v = $data['end_time'] ?? null) !== null) {
            $obj->endTime = (string) $v;
        }
        if (($v = $data['file_name'] ?? null) !== null) {
            $obj->fileName = (string) $v;
        }
        if (($v = $data['image_ids'] ?? null) !== null && is_array($v)) {
            $obj->imageIds = $v;
        }
        if (($v = $data['source'] ?? null) !== null && is_array($v)) {
            $obj->source = $v;
        }
        if (($v = $data['start_time'] ?? null) !== null) {
            $obj->startTime = (string) $v;
        }
        return $obj;
    }
}
