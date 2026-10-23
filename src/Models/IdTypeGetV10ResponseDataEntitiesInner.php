<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class IdTypeGetV10ResponseDataEntitiesInner implements \JsonSerializable
{
    /**
     * 实体Id
     * @var string
     */
    protected ?string $entityId = null;

    /**
     * 实体类型（如：adv_id / ad_id / material_id 等）
     * @var string
     */
    protected ?string $entityType = null;

    /**
     * 扩展字段
     * @var array<string,string>
     */
    protected ?array $extra = null;

    /**
     * 源实体类型，实体互查接口的返回参数会有此字段
     * @var string
     */
    protected ?string $sourceEntityType = null;

    /**
     * 实体Id
     * @return string
     */
    public function getEntityId(): ?string
    {
        return $this->entityId;
    }

    /**
     * 实体Id
     * @param string $entityId
     * @return self
     */
    public function setEntityId(?string $entityId): self
    {
        $this->entityId = $entityId;
        return $this;
    }

    /**
     * 实体类型（如：adv_id / ad_id / material_id 等）
     * @return string
     */
    public function getEntityType(): ?string
    {
        return $this->entityType;
    }

    /**
     * 实体类型（如：adv_id / ad_id / material_id 等）
     * @param string $entityType
     * @return self
     */
    public function setEntityType(?string $entityType): self
    {
        $this->entityType = $entityType;
        return $this;
    }

    /**
     * 扩展字段
     * @return array<string,string>
     */
    public function getExtra(): ?array
    {
        return $this->extra;
    }

    /**
     * 扩展字段
     * @param array<string,string> $extra
     * @return self
     */
    public function setExtra(?array $extra): self
    {
        $this->extra = $extra;
        return $this;
    }

    /**
     * 源实体类型，实体互查接口的返回参数会有此字段
     * @return string
     */
    public function getSourceEntityType(): ?string
    {
        return $this->sourceEntityType;
    }

    /**
     * 源实体类型，实体互查接口的返回参数会有此字段
     * @param string $sourceEntityType
     * @return self
     */
    public function setSourceEntityType(?string $sourceEntityType): self
    {
        $this->sourceEntityType = $sourceEntityType;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->entityId !== null) {
            $result['entity_id'] = $this->entityId;
        }
        if ($this->entityType !== null) {
            $result['entity_type'] = $this->entityType;
        }
        if ($this->extra !== null) {
            $result['extra'] = $this->extra;
        }
        if ($this->sourceEntityType !== null) {
            $result['source_entity_type'] = $this->sourceEntityType;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['entity_id'] ?? null) !== null) {
            $obj->entityId = (string) $v;
        }
        if (($v = $data['entity_type'] ?? null) !== null) {
            $obj->entityType = (string) $v;
        }
        if (($v = $data['extra'] ?? null) !== null && is_array($v)) {
            $obj->extra = $v;
        }
        if (($v = $data['source_entity_type'] ?? null) !== null) {
            $obj->sourceEntityType = (string) $v;
        }
        return $obj;
    }
}
