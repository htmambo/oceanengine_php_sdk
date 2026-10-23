<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class CreativeCustomCreativeCreateV2RequestAdDataMiniProgramInfo implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $appId = null;

    /**
     * @var string
     */
    protected ?string $params = null;

    /**
     * @var string
     */
    protected ?string $startPath = null;

    /**
     * @var \Oceanengine\Models\CreativeCustomCreativeCreateV2AdDataMiniProgramInfoType
     */
    protected ?string $type = null;

    /**
     * @var string
     */
    protected ?string $url = null;

    /**
     * @return string
     */
    public function getAppId(): ?string
    {
        return $this->appId;
    }

    /**
     * @param string $appId
     * @return self
     */
    public function setAppId(?string $appId): self
    {
        $this->appId = $appId;
        return $this;
    }

    /**
     * @return string
     */
    public function getParams(): ?string
    {
        return $this->params;
    }

    /**
     * @param string $params
     * @return self
     */
    public function setParams(?string $params): self
    {
        $this->params = $params;
        return $this;
    }

    /**
     * @return string
     */
    public function getStartPath(): ?string
    {
        return $this->startPath;
    }

    /**
     * @param string $startPath
     * @return self
     */
    public function setStartPath(?string $startPath): self
    {
        $this->startPath = $startPath;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CreativeCustomCreativeCreateV2AdDataMiniProgramInfoType
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @param \Oceanengine\Models\CreativeCustomCreativeCreateV2AdDataMiniProgramInfoType $type
     * @return self
     */
    public function setType(?string $type): self
    {
        $this->type = $type;
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
        if ($this->appId !== null) {
            $result['app_id'] = $this->appId;
        }
        if ($this->params !== null) {
            $result['params'] = $this->params;
        }
        if ($this->startPath !== null) {
            $result['start_path'] = $this->startPath;
        }
        if ($this->type !== null) {
            $result['type'] = $this->type;
        }
        if ($this->url !== null) {
            $result['url'] = $this->url;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['app_id'] ?? null) !== null) {
            $obj->appId = (string) $v;
        }
        if (($v = $data['params'] ?? null) !== null) {
            $obj->params = (string) $v;
        }
        if (($v = $data['start_path'] ?? null) !== null) {
            $obj->startPath = (string) $v;
        }
        if (($v = $data['type'] ?? null) !== null) {
            $obj->type = (string) $v;
        }
        if (($v = $data['url'] ?? null) !== null) {
            $obj->url = (string) $v;
        }
        return $obj;
    }
}
