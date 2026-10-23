<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class SuggWordsV30RequestPromotionMaterials implements \JsonSerializable
{
    /**
     * @var string[]
     */
    protected ?array $abstracts = null;

    /**
     * @var string
     */
    protected ?string $appName = null;

    /**
     * @var string[]
     */
    protected ?array $qualityWords = null;

    /**
     * @var string
     */
    protected ?string $source = null;

    /**
     * @var string[]
     */
    protected ?array $titles = null;

    /**
     * @return string[]
     */
    public function getAbstracts(): ?array
    {
        return $this->abstracts;
    }

    /**
     * @param string[] $abstracts
     * @return self
     */
    public function setAbstracts(?array $abstracts): self
    {
        $this->abstracts = $abstracts;
        return $this;
    }

    /**
     * @return string
     */
    public function getAppName(): ?string
    {
        return $this->appName;
    }

    /**
     * @param string $appName
     * @return self
     */
    public function setAppName(?string $appName): self
    {
        $this->appName = $appName;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getQualityWords(): ?array
    {
        return $this->qualityWords;
    }

    /**
     * @param string[] $qualityWords
     * @return self
     */
    public function setQualityWords(?array $qualityWords): self
    {
        $this->qualityWords = $qualityWords;
        return $this;
    }

    /**
     * @return string
     */
    public function getSource(): ?string
    {
        return $this->source;
    }

    /**
     * @param string $source
     * @return self
     */
    public function setSource(?string $source): self
    {
        $this->source = $source;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getTitles(): ?array
    {
        return $this->titles;
    }

    /**
     * @param string[] $titles
     * @return self
     */
    public function setTitles(?array $titles): self
    {
        $this->titles = $titles;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->abstracts !== null) {
            $result['abstracts'] = $this->abstracts;
        }
        if ($this->appName !== null) {
            $result['app_name'] = $this->appName;
        }
        if ($this->qualityWords !== null) {
            $result['quality_words'] = $this->qualityWords;
        }
        if ($this->source !== null) {
            $result['source'] = $this->source;
        }
        if ($this->titles !== null) {
            $result['titles'] = $this->titles;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['abstracts'] ?? null) !== null && is_array($v)) {
            $obj->abstracts = $v;
        }
        if (($v = $data['app_name'] ?? null) !== null) {
            $obj->appName = (string) $v;
        }
        if (($v = $data['quality_words'] ?? null) !== null && is_array($v)) {
            $obj->qualityWords = $v;
        }
        if (($v = $data['source'] ?? null) !== null) {
            $obj->source = (string) $v;
        }
        if (($v = $data['titles'] ?? null) !== null && is_array($v)) {
            $obj->titles = $v;
        }
        return $obj;
    }
}
