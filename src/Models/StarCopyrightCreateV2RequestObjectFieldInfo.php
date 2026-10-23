<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarCopyrightCreateV2RequestObjectFieldInfo implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\StarCopyrightCreateV2RequestObjectFieldInfoObjectNovelInfo
     */
    protected ?\Oceanengine\Models\StarCopyrightCreateV2RequestObjectFieldInfoObjectNovelInfo $objectNovelInfo = null;

    /**
     * 业务实体类型，小说为13
     * @var int
     */
    protected ?int $starObjectType = null;

    /**
     * @return \Oceanengine\Models\StarCopyrightCreateV2RequestObjectFieldInfoObjectNovelInfo
     */
    public function getObjectNovelInfo(): ?\Oceanengine\Models\StarCopyrightCreateV2RequestObjectFieldInfoObjectNovelInfo
    {
        return $this->objectNovelInfo;
    }

    /**
     * @param \Oceanengine\Models\StarCopyrightCreateV2RequestObjectFieldInfoObjectNovelInfo $objectNovelInfo
     * @return self
     */
    public function setObjectNovelInfo(?\Oceanengine\Models\StarCopyrightCreateV2RequestObjectFieldInfoObjectNovelInfo $objectNovelInfo): self
    {
        $this->objectNovelInfo = $objectNovelInfo;
        return $this;
    }

    /**
     * 业务实体类型，小说为13
     * @return int
     */
    public function getStarObjectType(): ?int
    {
        return $this->starObjectType;
    }

    /**
     * 业务实体类型，小说为13
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
        if ($this->objectNovelInfo !== null) {
            $result['object_novel_info'] = $this->objectNovelInfo;
        }
        if ($this->starObjectType !== null) {
            $result['star_object_type'] = $this->starObjectType;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['object_novel_info'] ?? null) !== null && is_array($v)) {
            $obj->objectNovelInfo = \Oceanengine\Models\StarCopyrightCreateV2RequestObjectFieldInfoObjectNovelInfo::fromArray($v);
        }
        if (($v = $data['star_object_type'] ?? null) !== null) {
            $obj->starObjectType = (int) $v;
        }
        return $obj;
    }
}
