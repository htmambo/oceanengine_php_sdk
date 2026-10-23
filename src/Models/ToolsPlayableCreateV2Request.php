<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsPlayableCreateV2Request implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * @var \Oceanengine\Models\ToolsPlayableCreateV2RequestSchemaDataInner[]
     */
    protected ?array $schemaData = null;

    /**
     * @var int
     */
    protected ?int $templateId = null;

    /**
     * @return int
     */
    public function getAdvertiserId(): ?int
    {
        return $this->advertiserId;
    }

    /**
     * @param int $advertiserId
     * @return self
     */
    public function setAdvertiserId(?int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsPlayableCreateV2RequestSchemaDataInner[]
     */
    public function getSchemaData(): ?array
    {
        return $this->schemaData;
    }

    /**
     * @param \Oceanengine\Models\ToolsPlayableCreateV2RequestSchemaDataInner[] $schemaData
     * @return self
     */
    public function setSchemaData(?array $schemaData): self
    {
        $this->schemaData = $schemaData;
        return $this;
    }

    /**
     * @return int
     */
    public function getTemplateId(): ?int
    {
        return $this->templateId;
    }

    /**
     * @param int $templateId
     * @return self
     */
    public function setTemplateId(?int $templateId): self
    {
        $this->templateId = $templateId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->advertiserId !== null) {
            $result['advertiser_id'] = $this->advertiserId;
        }
        if ($this->schemaData !== null) {
            $result['schema_data'] = $this->schemaData;
        }
        if ($this->templateId !== null) {
            $result['template_id'] = $this->templateId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['schema_data'] ?? null) !== null && is_array($v)) {
            $obj->schemaData = array_map(fn ($vv) => \Oceanengine\Models\ToolsPlayableCreateV2RequestSchemaDataInner::fromArray($vv), $v);
        }
        if (($v = $data['template_id'] ?? null) !== null) {
            $obj->templateId = (int) $v;
        }
        return $obj;
    }
}
