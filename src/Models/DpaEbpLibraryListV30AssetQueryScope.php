<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class DpaEbpLibraryListV30AssetQueryScope implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\DpaEbpLibraryListV30AssetQueryScopeHierarchy
     */
    protected ?string $hierarchy = null;

    /**
     * @var \Oceanengine\Models\DpaEbpLibraryListV30AssetQueryScopePermissionScope
     */
    protected ?string $permissionScope = null;

    /**
     * @return \Oceanengine\Models\DpaEbpLibraryListV30AssetQueryScopeHierarchy
     */
    public function getHierarchy(): ?string
    {
        return $this->hierarchy;
    }

    /**
     * @param \Oceanengine\Models\DpaEbpLibraryListV30AssetQueryScopeHierarchy $hierarchy
     * @return self
     */
    public function setHierarchy(?string $hierarchy): self
    {
        $this->hierarchy = $hierarchy;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\DpaEbpLibraryListV30AssetQueryScopePermissionScope
     */
    public function getPermissionScope(): ?string
    {
        return $this->permissionScope;
    }

    /**
     * @param \Oceanengine\Models\DpaEbpLibraryListV30AssetQueryScopePermissionScope $permissionScope
     * @return self
     */
    public function setPermissionScope(?string $permissionScope): self
    {
        $this->permissionScope = $permissionScope;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->hierarchy !== null) {
            $result['hierarchy'] = $this->hierarchy;
        }
        if ($this->permissionScope !== null) {
            $result['permission_scope'] = $this->permissionScope;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['hierarchy'] ?? null) !== null) {
            $obj->hierarchy = (string) $v;
        }
        if (($v = $data['permission_scope'] ?? null) !== null) {
            $obj->permissionScope = (string) $v;
        }
        return $obj;
    }
}
