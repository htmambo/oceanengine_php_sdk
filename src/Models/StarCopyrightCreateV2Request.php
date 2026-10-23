<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarCopyrightCreateV2Request implements \JsonSerializable
{
    /**
     * 调用方信息
     * @var int
     */
    protected ?int $developerId = null;

    /**
     * @var \Oceanengine\Models\StarCopyrightCreateV2RequestObjectFieldInfo
     */
    protected ?\Oceanengine\Models\StarCopyrightCreateV2RequestObjectFieldInfo $objectFieldInfo = null;

    /**
     * 实体标识ID，如\"novel\"
     * @var string
     */
    protected ?string $objectIdentityId = null;

    /**
     * 客户星图ID
     * @var int
     */
    protected ?int $starId = null;

    /**
     * 小说为13
     * @var int
     */
    protected ?int $starObjectType = null;

    /**
     * 调用方信息
     * @return int
     */
    public function getDeveloperId(): ?int
    {
        return $this->developerId;
    }

    /**
     * 调用方信息
     * @param int $developerId
     * @return self
     */
    public function setDeveloperId(?int $developerId): self
    {
        $this->developerId = $developerId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarCopyrightCreateV2RequestObjectFieldInfo
     */
    public function getObjectFieldInfo(): ?\Oceanengine\Models\StarCopyrightCreateV2RequestObjectFieldInfo
    {
        return $this->objectFieldInfo;
    }

    /**
     * @param \Oceanengine\Models\StarCopyrightCreateV2RequestObjectFieldInfo $objectFieldInfo
     * @return self
     */
    public function setObjectFieldInfo(?\Oceanengine\Models\StarCopyrightCreateV2RequestObjectFieldInfo $objectFieldInfo): self
    {
        $this->objectFieldInfo = $objectFieldInfo;
        return $this;
    }

    /**
     * 实体标识ID，如\"novel\"
     * @return string
     */
    public function getObjectIdentityId(): ?string
    {
        return $this->objectIdentityId;
    }

    /**
     * 实体标识ID，如\"novel\"
     * @param string $objectIdentityId
     * @return self
     */
    public function setObjectIdentityId(?string $objectIdentityId): self
    {
        $this->objectIdentityId = $objectIdentityId;
        return $this;
    }

    /**
     * 客户星图ID
     * @return int
     */
    public function getStarId(): ?int
    {
        return $this->starId;
    }

    /**
     * 客户星图ID
     * @param int $starId
     * @return self
     */
    public function setStarId(?int $starId): self
    {
        $this->starId = $starId;
        return $this;
    }

    /**
     * 小说为13
     * @return int
     */
    public function getStarObjectType(): ?int
    {
        return $this->starObjectType;
    }

    /**
     * 小说为13
     * @param int $starObjectType
     * @return self
     */
    public function setStarObjectType(?int $starObjectType): self
    {
        $this->starObjectType = $starObjectType;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->developerId !== null) {
            $result['developer_id'] = $this->developerId;
        }
        if ($this->objectFieldInfo !== null) {
            $result['object_field_info'] = $this->objectFieldInfo;
        }
        if ($this->objectIdentityId !== null) {
            $result['object_identity_id'] = $this->objectIdentityId;
        }
        if ($this->starId !== null) {
            $result['star_id'] = $this->starId;
        }
        if ($this->starObjectType !== null) {
            $result['star_object_type'] = $this->starObjectType;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['developer_id'] ?? null) !== null) {
            $obj->developerId = (int) $v;
        }
        if (($v = $data['object_field_info'] ?? null) !== null && is_array($v)) {
            $obj->objectFieldInfo = \Oceanengine\Models\StarCopyrightCreateV2RequestObjectFieldInfo::fromArray($v);
        }
        if (($v = $data['object_identity_id'] ?? null) !== null) {
            $obj->objectIdentityId = (string) $v;
        }
        if (($v = $data['star_id'] ?? null) !== null) {
            $obj->starId = (int) $v;
        }
        if (($v = $data['star_object_type'] ?? null) !== null) {
            $obj->starObjectType = (int) $v;
        }
        return $obj;
    }
}
