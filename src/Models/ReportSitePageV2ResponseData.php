<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ReportSitePageV2ResponseData implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $siteId = null;

    /**
     * @var array<string,mixed>
     */
    protected ?array $siteRecord = null;

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
    public function getSiteRecord(): ?array
    {
        return $this->siteRecord;
    }

    /**
     * @param array<string,mixed> $siteRecord
     * @return self
     */
    public function setSiteRecord(?array $siteRecord): self
    {
        $this->siteRecord = $siteRecord;
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
        if ($this->siteRecord !== null) {
            $result['site_record'] = $this->siteRecord;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['site_id'] ?? null) !== null) {
            $obj->siteId = (string) $v;
        }
        if (($v = $data['site_record'] ?? null) !== null && is_array($v)) {
            $obj->siteRecord = $v;
        }
        return $obj;
    }
}
