<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsSiteCreateV2RequestBricksInnerOnlineSource implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $originUrl = null;

    /**
     * @var string
     */
    protected ?string $posterUrl = null;

    /**
     * @return string
     */
    public function getOriginUrl(): ?string
    {
        return $this->originUrl;
    }

    /**
     * @param string $originUrl
     * @return self
     */
    public function setOriginUrl(?string $originUrl): self
    {
        $this->originUrl = $originUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getPosterUrl(): ?string
    {
        return $this->posterUrl;
    }

    /**
     * @param string $posterUrl
     * @return self
     */
    public function setPosterUrl(?string $posterUrl): self
    {
        $this->posterUrl = $posterUrl;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->originUrl !== null) {
            $result['origin_url'] = $this->originUrl;
        }
        if ($this->posterUrl !== null) {
            $result['poster_url'] = $this->posterUrl;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['origin_url'] ?? null) !== null) {
            $obj->originUrl = (string) $v;
        }
        if (($v = $data['poster_url'] ?? null) !== null) {
            $obj->posterUrl = (string) $v;
        }
        return $obj;
    }
}
