<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsJointBidCreateV30RequestJointScopeInfo implements \JsonSerializable
{
    /**
     * @var string[]
     */
    protected ?array $domainScope = null;

    /**
     * @var \Oceanengine\Models\ToolsJointBidCreateV30RequestJointScopeInfoShopScopeInner[]
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
     * @return \Oceanengine\Models\ToolsJointBidCreateV30RequestJointScopeInfoShopScopeInner[]
     */
    public function getShopScope(): ?array
    {
        return $this->shopScope;
    }

    /**
     * @param \Oceanengine\Models\ToolsJointBidCreateV30RequestJointScopeInfoShopScopeInner[] $shopScope
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
            $obj->shopScope = array_map(fn ($vv) => \Oceanengine\Models\ToolsJointBidCreateV30RequestJointScopeInfoShopScopeInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
