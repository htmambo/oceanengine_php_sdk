<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsSiteCreateV2ResponseData implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $siteId = null;

    /**
     * @return string
     */
    public function getSiteId(): ?string
    {
        return $this->siteId;
    }

    /**
     * @param string $siteId
     * @return self
     */
    public function setSiteId(?string $siteId): self
    {
        $this->siteId = $siteId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->siteId !== null) {
            $result['site_id'] = $this->siteId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['site_id'] ?? null) !== null) {
            $obj->siteId = (string) $v;
        }
        return $obj;
    }
}
