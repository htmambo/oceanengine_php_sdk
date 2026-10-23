<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class EbpSubGroupCreateV30Request implements \JsonSerializable
{
    /**
     * 父节点组织ID
     * @var int
     */
    protected ?int $enterpriseOrganizationId = null;

    /**
     * 资产所属账户
     * @var string
     */
    protected ?string $name = null;

    /**
     * 父节点组织ID
     * @return int
     */
    public function getEnterpriseOrganizationId(): ?int
    {
        return $this->enterpriseOrganizationId;
    }

    /**
     * 父节点组织ID
     * @param int $enterpriseOrganizationId
     * @return self
     */
    public function setEnterpriseOrganizationId(?int $enterpriseOrganizationId): self
    {
        $this->enterpriseOrganizationId = $enterpriseOrganizationId;
        return $this;
    }

    /**
     * 资产所属账户
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * 资产所属账户
     * @param string $name
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->enterpriseOrganizationId !== null) {
            $result['enterprise_organization_id'] = $this->enterpriseOrganizationId;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['enterprise_organization_id'] ?? null) !== null) {
            $obj->enterpriseOrganizationId = (int) $v;
        }
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        return $obj;
    }
}
