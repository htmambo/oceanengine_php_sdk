<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsThirdSiteDeleteV2ResponseData implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $siteId = null;

    /**
     * @return int
     */
    public function getSiteId(): ?int
    {
        return $this->siteId;
    }

    /**
     * @param int $siteId
     * @return self
     */
    public function setSiteId(?int $siteId): self
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
            $obj->siteId = (int) $v;
        }
        return $obj;
    }
}
