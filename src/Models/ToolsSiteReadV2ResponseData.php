<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsSiteReadV2ResponseData implements \JsonSerializable
{
    /**
     * 具体见返回示例业务数据（新建或更新时传递的数据）
     * @var array<string,mixed>[]
     */
    protected ?array $bricks = null;

    /**
     * 站点ID
     * @var string
     */
    protected ?string $id = null;

    /**
     * 建站类型
     * @var string
     */
    protected ?string $siteType = null;

    /**
     * 站点状态
     * @var string
     */
    protected ?string $status = null;

    /**
     * 缩略图（只有发布的站点才会生成）
     * @var string
     */
    protected ?string $thumbnail = null;

    /**
     * 具体见返回示例业务数据（新建或更新时传递的数据）
     * @return array<string,mixed>[]
     */
    public function getBricks(): ?array
    {
        return $this->bricks;
    }

    /**
     * 具体见返回示例业务数据（新建或更新时传递的数据）
     * @param array<string,mixed>[] $bricks
     * @return self
     */
    public function setBricks(?array $bricks): self
    {
        $this->bricks = $bricks;
        return $this;
    }

    /**
     * 站点ID
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * 站点ID
     * @param string $id
     * @return self
     */
    public function setId(?string $id): self
    {
        $this->id = $id;
        return $this;
    }

    /**
     * 建站类型
     * @return string
     */
    public function getSiteType(): ?string
    {
        return $this->siteType;
    }

    /**
     * 建站类型
     * @param string $siteType
     * @return self
     */
    public function setSiteType(?string $siteType): self
    {
        $this->siteType = $siteType;
        return $this;
    }

    /**
     * 站点状态
     * @return string
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * 站点状态
     * @param string $status
     * @return self
     */
    public function setStatus(?string $status): self
    {
        $this->status = $status;
        return $this;
    }

    /**
     * 缩略图（只有发布的站点才会生成）
     * @return string
     */
    public function getThumbnail(): ?string
    {
        return $this->thumbnail;
    }

    /**
     * 缩略图（只有发布的站点才会生成）
     * @param string $thumbnail
     * @return self
     */
    public function setThumbnail(?string $thumbnail): self
    {
        $this->thumbnail = $thumbnail;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->bricks !== null) {
            $result['bricks'] = $this->bricks;
        }
        if ($this->id !== null) {
            $result['id'] = $this->id;
        }
        if ($this->siteType !== null) {
            $result['site_type'] = $this->siteType;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        if ($this->thumbnail !== null) {
            $result['thumbnail'] = $this->thumbnail;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['bricks'] ?? null) !== null && is_array($v)) {
            $obj->bricks = $v;
        }
        if (($v = $data['id'] ?? null) !== null) {
            $obj->id = (string) $v;
        }
        if (($v = $data['site_type'] ?? null) !== null) {
            $obj->siteType = (string) $v;
        }
        if (($v = $data['status'] ?? null) !== null) {
            $obj->status = (string) $v;
        }
        if (($v = $data['thumbnail'] ?? null) !== null) {
            $obj->thumbnail = (string) $v;
        }
        return $obj;
    }
}
