<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class PromotionListV30ResponseDataListInnerPromotionMaterialsMiniProgramInfo implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $appId = null;

    /**
     * @var \Oceanengine\Models\PromotionListV30ResponseDataListInnerPromotionMaterialsMiniProgramInfoAutoInner[]
     */
    protected ?array $auto = null;

    /**
     * @var string
     */
    protected ?string $params = null;

    /**
     * @var string
     */
    protected ?string $startPath = null;

    /**
     * @var string
     */
    protected ?string $url = null;

    /**
     * @var string[]
     */
    protected ?array $urls = null;

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
     * @return \Oceanengine\Models\PromotionListV30ResponseDataListInnerPromotionMaterialsMiniProgramInfoAutoInner[]
     */
    public function getAuto(): ?array
    {
        return $this->auto;
    }

    /**
     * @param \Oceanengine\Models\PromotionListV30ResponseDataListInnerPromotionMaterialsMiniProgramInfoAutoInner[] $auto
     * @return self
     */
    public function setAuto(?array $auto): self
    {
        $this->auto = $auto;
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
     * @return string[]
     */
    public function getUrls(): ?array
    {
        return $this->urls;
    }

    /**
     * @param string[] $urls
     * @return self
     */
    public function setUrls(?array $urls): self
    {
        $this->urls = $urls;
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
        if ($this->auto !== null) {
            $result['auto'] = $this->auto;
        }
        if ($this->params !== null) {
            $result['params'] = $this->params;
        }
        if ($this->startPath !== null) {
            $result['start_path'] = $this->startPath;
        }
        if ($this->url !== null) {
            $result['url'] = $this->url;
        }
        if ($this->urls !== null) {
            $result['urls'] = $this->urls;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['app_id'] ?? null) !== null) {
            $obj->appId = (string) $v;
        }
        if (($v = $data['auto'] ?? null) !== null && is_array($v)) {
            $obj->auto = array_map(fn ($vv) => \Oceanengine\Models\PromotionListV30ResponseDataListInnerPromotionMaterialsMiniProgramInfoAutoInner::fromArray($vv), $v);
        }
        if (($v = $data['params'] ?? null) !== null) {
            $obj->params = (string) $v;
        }
        if (($v = $data['start_path'] ?? null) !== null) {
            $obj->startPath = (string) $v;
        }
        if (($v = $data['url'] ?? null) !== null) {
            $obj->url = (string) $v;
        }
        if (($v = $data['urls'] ?? null) !== null && is_array($v)) {
            $obj->urls = $v;
        }
        return $obj;
    }
}
