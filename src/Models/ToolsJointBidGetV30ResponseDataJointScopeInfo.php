<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsJointBidGetV30ResponseDataJointScopeInfo implements \JsonSerializable
{
    /**
     * @var string[]
     */
    protected ?array $domainScope = null;

    /**
     * @var \Oceanengine\Models\ToolsJointBidGetV30ResponseDataJointScopeInfoShopScopeInner[]
     */
    protected ?array $shopScope = null;

    /**
     * @return string[]
     */
    public function getDomainScope(): ?array
    {
        return $this->domainScope;
    }

    /**
     * @param string[] $domainScope
     * @return self
     */
    public function setDomainScope(?array $domainScope): self
    {
        $this->domainScope = $domainScope;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsJointBidGetV30ResponseDataJointScopeInfoShopScopeInner[]
     */
    public function getShopScope(): ?array
    {
        return $this->shopScope;
    }

    /**
     * @param \Oceanengine\Models\ToolsJointBidGetV30ResponseDataJointScopeInfoShopScopeInner[] $shopScope
     * @return self
     */
    public function setShopScope(?array $shopScope): self
    {
        $this->shopScope = $shopScope;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->domainScope !== null) {
            $result['domain_scope'] = $this->domainScope;
        }
        if ($this->shopScope !== null) {
            $result['shop_scope'] = $this->shopScope;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['domain_scope'] ?? null) !== null && is_array($v)) {
            $obj->domainScope = $v;
        }
        if (($v = $data['shop_scope'] ?? null) !== null && is_array($v)) {
            $obj->shopScope = array_map(fn ($vv) => \Oceanengine\Models\ToolsJointBidGetV30ResponseDataJointScopeInfoShopScopeInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
