<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class EbpAdvertiserTaskCreateV2Request implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\EbpAdvertiserTaskCreateV2AccountSource
     */
    protected ?string $accountSource = null;

    /**
     * @var int
     */
    protected ?int $enterpriseOrganizationId = null;

    /**
     * @return \Oceanengine\Models\EbpAdvertiserTaskCreateV2AccountSource
     */
    public function getAccountSource(): ?string
    {
        return $this->accountSource;
    }

    /**
     * @param \Oceanengine\Models\EbpAdvertiserTaskCreateV2AccountSource $accountSource
     * @return self
     */
    public function setAccountSource(?string $accountSource): self
    {
        $this->accountSource = $accountSource;
        return $this;
    }

    /**
     * @return int
     */
    public function getEnterpriseOrganizationId(): ?int
    {
        return $this->enterpriseOrganizationId;
    }

    /**
     * @param int $enterpriseOrganizationId
     * @return self
     */
    public function setEnterpriseOrganizationId(?int $enterpriseOrganizationId): self
    {
        $this->enterpriseOrganizationId = $enterpriseOrganizationId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->accountSource !== null) {
            $result['account_source'] = $this->accountSource;
        }
        if ($this->enterpriseOrganizationId !== null) {
            $result['enterprise_organization_id'] = $this->enterpriseOrganizationId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['account_source'] ?? null) !== null) {
            $obj->accountSource = (string) $v;
        }
        if (($v = $data['enterprise_organization_id'] ?? null) !== null) {
            $obj->enterpriseOrganizationId = (int) $v;
        }
        return $obj;
    }
}
