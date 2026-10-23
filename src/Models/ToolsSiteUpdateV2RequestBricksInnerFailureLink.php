<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsSiteUpdateV2RequestBricksInnerFailureLink implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $linkType = null;

    /**
     * @var string
     */
    protected ?string $quickApp = null;

    /**
     * @var string
     */
    protected ?string $scheme = null;

    /**
     * @var string
     */
    protected ?string $url = null;

    /**
     * @return string
     */
    public function getLinkType(): ?string
    {
        return $this->linkType;
    }

    /**
     * @param string $linkType
     * @return self
     */
    public function setLinkType(?string $linkType): self
    {
        $this->linkType = $linkType;
        return $this;
    }

    /**
     * @return string
     */
    public function getQuickApp(): ?string
    {
        return $this->quickApp;
    }

    /**
     * @param string $quickApp
     * @return self
     */
    public function setQuickApp(?string $quickApp): self
    {
        $this->quickApp = $quickApp;
        return $this;
    }

    /**
     * @return string
     */
    public function getScheme(): ?string
    {
        return $this->scheme;
    }

    /**
     * @param string $scheme
     * @return self
     */
    public function setScheme(?string $scheme): self
    {
        $this->scheme = $scheme;
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
        if ($this->linkType !== null) {
            $result['link_type'] = $this->linkType;
        }
        if ($this->quickApp !== null) {
            $result['quick_app'] = $this->quickApp;
        }
        if ($this->scheme !== null) {
            $result['scheme'] = $this->scheme;
        }
        if ($this->url !== null) {
            $result['url'] = $this->url;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['link_type'] ?? null) !== null) {
            $obj->linkType = (string) $v;
        }
        if (($v = $data['quick_app'] ?? null) !== null) {
            $obj->quickApp = (string) $v;
        }
        if (($v = $data['scheme'] ?? null) !== null) {
            $obj->scheme = (string) $v;
        }
        if (($v = $data['url'] ?? null) !== null) {
            $obj->url = (string) $v;
        }
        return $obj;
    }
}
