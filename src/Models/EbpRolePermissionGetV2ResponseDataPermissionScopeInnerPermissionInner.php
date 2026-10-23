<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class EbpRolePermissionGetV2ResponseDataPermissionScopeInnerPermissionInner implements \JsonSerializable
{
    /**
     * 权限点对应的开放平台接口 Path 列表
     * @var string[]
     */
    protected ?array $path = null;

    /**
     * 权限点名称
     * @var string
     */
    protected ?string $permissionName = null;

    /**
     * 权限点对应的开放平台接口 Path 列表
     * @return string[]
     */
    public function getPath(): ?array
    {
        return $this->path;
    }

    /**
     * 权限点对应的开放平台接口 Path 列表
     * @param string[] $path
     * @return self
     */
    public function setPath(?array $path): self
    {
        $this->path = $path;
        return $this;
    }

    /**
     * 权限点名称
     * @return string
     */
    public function getPermissionName(): ?string
    {
        return $this->permissionName;
    }

    /**
     * 权限点名称
     * @param string $permissionName
     * @return self
     */
    public function setPermissionName(?string $permissionName): self
    {
        $this->permissionName = $permissionName;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->path !== null) {
            $result['path'] = $this->path;
        }
        if ($this->permissionName !== null) {
            $result['permission_name'] = $this->permissionName;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['path'] ?? null) !== null && is_array($v)) {
            $obj->path = $v;
        }
        if (($v = $data['permission_name'] ?? null) !== null) {
            $obj->permissionName = (string) $v;
        }
        return $obj;
    }
}
