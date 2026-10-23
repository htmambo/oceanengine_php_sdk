<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class FileImageAdvertiserV2ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\FileImageAdvertiserV2ResponseDataData
     */
    protected ?\Oceanengine\Models\FileImageAdvertiserV2ResponseDataData $data = null;

    /**
     * @var string
     */
    protected ?string $id = null;

    /**
     * @var string
     */
    protected ?string $url = null;

    /**
     * @return \Oceanengine\Models\FileImageAdvertiserV2ResponseDataData
     */
    public function getData(): ?\Oceanengine\Models\FileImageAdvertiserV2ResponseDataData
    {
        return $this->data;
    }

    /**
     * @param \Oceanengine\Models\FileImageAdvertiserV2ResponseDataData $data
     * @return self
     */
    public function setData(?\Oceanengine\Models\FileImageAdvertiserV2ResponseDataData $data): self
    {
        $this->data = $data;
        return $this;
    }

    /**
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return self
     */
    public function setId(?string $id): self
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

    /**
     * @param string $url
     * @return self
     */
    public function setUrl(?string $url): self
    {
        $this->url = $url;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->data !== null) {
            $result['data'] = $this->data;
        }
        if ($this->id !== null) {
            $result['id'] = $this->id;
        }
        if ($this->url !== null) {
            $result['url'] = $this->url;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['data'] ?? null) !== null && is_array($v)) {
            $obj->data = \Oceanengine\Models\FileImageAdvertiserV2ResponseDataData::fromArray($v);
        }
        if (($v = $data['id'] ?? null) !== null) {
            $obj->id = (string) $v;
        }
        if (($v = $data['url'] ?? null) !== null) {
            $obj->url = (string) $v;
        }
        return $obj;
    }
}
