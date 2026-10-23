<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class SharedWalletWalletBalanceGetV30ResponseDataSharedWalletBalanceInfoValueGeneralBalanceInfo implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\SharedWalletWalletBalanceGetV30ResponseDataSharedWalletBalanceInfoValueGeneralBalanceInfoAdOnlyBalanceInfo
     */
    protected ?\Oceanengine\Models\SharedWalletWalletBalanceGetV30ResponseDataSharedWalletBalanceInfoValueGeneralBalanceInfoAdOnlyBalanceInfo $adOnlyBalanceInfo = null;

    /**
     * @var \Oceanengine\Models\SharedWalletWalletBalanceGetV30ResponseDataSharedWalletBalanceInfoValueGeneralBalanceInfoAdSharedBalanceInfo
     */
    protected ?\Oceanengine\Models\SharedWalletWalletBalanceGetV30ResponseDataSharedWalletBalanceInfoValueGeneralBalanceInfoAdSharedBalanceInfo $adSharedBalanceInfo = null;

    /**
     * @var \Oceanengine\Models\SharedWalletWalletBalanceGetV30ResponseDataSharedWalletBalanceInfoValueGeneralBalanceInfoEcpOnlyBalanceInfo
     */
    protected ?\Oceanengine\Models\SharedWalletWalletBalanceGetV30ResponseDataSharedWalletBalanceInfoValueGeneralBalanceInfoEcpOnlyBalanceInfo $ecpOnlyBalanceInfo = null;

    /**
     * @var \Oceanengine\Models\SharedWalletWalletBalanceGetV30ResponseDataSharedWalletBalanceInfoValueGeneralBalanceInfoLocalOnlyBalanceInfo
     */
    protected ?\Oceanengine\Models\SharedWalletWalletBalanceGetV30ResponseDataSharedWalletBalanceInfoValueGeneralBalanceInfoLocalOnlyBalanceInfo $localOnlyBalanceInfo = null;

    /**
     * @return \Oceanengine\Models\SharedWalletWalletBalanceGetV30ResponseDataSharedWalletBalanceInfoValueGeneralBalanceInfoAdOnlyBalanceInfo
     */
    public function getAdOnlyBalanceInfo(): ?\Oceanengine\Models\SharedWalletWalletBalanceGetV30ResponseDataSharedWalletBalanceInfoValueGeneralBalanceInfoAdOnlyBalanceInfo
    {
        return $this->adOnlyBalanceInfo;
    }

    /**
     * @param \Oceanengine\Models\SharedWalletWalletBalanceGetV30ResponseDataSharedWalletBalanceInfoValueGeneralBalanceInfoAdOnlyBalanceInfo $adOnlyBalanceInfo
     * @return self
     */
    public function setAdOnlyBalanceInfo(?\Oceanengine\Models\SharedWalletWalletBalanceGetV30ResponseDataSharedWalletBalanceInfoValueGeneralBalanceInfoAdOnlyBalanceInfo $adOnlyBalanceInfo): self
    {
        $this->adOnlyBalanceInfo = $adOnlyBalanceInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\SharedWalletWalletBalanceGetV30ResponseDataSharedWalletBalanceInfoValueGeneralBalanceInfoAdSharedBalanceInfo
     */
    public function getAdSharedBalanceInfo(): ?\Oceanengine\Models\SharedWalletWalletBalanceGetV30ResponseDataSharedWalletBalanceInfoValueGeneralBalanceInfoAdSharedBalanceInfo
    {
        return $this->adSharedBalanceInfo;
    }

    /**
     * @param \Oceanengine\Models\SharedWalletWalletBalanceGetV30ResponseDataSharedWalletBalanceInfoValueGeneralBalanceInfoAdSharedBalanceInfo $adSharedBalanceInfo
     * @return self
     */
    public function setAdSharedBalanceInfo(?\Oceanengine\Models\SharedWalletWalletBalanceGetV30ResponseDataSharedWalletBalanceInfoValueGeneralBalanceInfoAdSharedBalanceInfo $adSharedBalanceInfo): self
    {
        $this->adSharedBalanceInfo = $adSharedBalanceInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\SharedWalletWalletBalanceGetV30ResponseDataSharedWalletBalanceInfoValueGeneralBalanceInfoEcpOnlyBalanceInfo
     */
    public function getEcpOnlyBalanceInfo(): ?\Oceanengine\Models\SharedWalletWalletBalanceGetV30ResponseDataSharedWalletBalanceInfoValueGeneralBalanceInfoEcpOnlyBalanceInfo
    {
        return $this->ecpOnlyBalanceInfo;
    }

    /**
     * @param \Oceanengine\Models\SharedWalletWalletBalanceGetV30ResponseDataSharedWalletBalanceInfoValueGeneralBalanceInfoEcpOnlyBalanceInfo $ecpOnlyBalanceInfo
     * @return self
     */
    public function setEcpOnlyBalanceInfo(?\Oceanengine\Models\SharedWalletWalletBalanceGetV30ResponseDataSharedWalletBalanceInfoValueGeneralBalanceInfoEcpOnlyBalanceInfo $ecpOnlyBalanceInfo): self
    {
        $this->ecpOnlyBalanceInfo = $ecpOnlyBalanceInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\SharedWalletWalletBalanceGetV30ResponseDataSharedWalletBalanceInfoValueGeneralBalanceInfoLocalOnlyBalanceInfo
     */
    public function getLocalOnlyBalanceInfo(): ?\Oceanengine\Models\SharedWalletWalletBalanceGetV30ResponseDataSharedWalletBalanceInfoValueGeneralBalanceInfoLocalOnlyBalanceInfo
    {
        return $this->localOnlyBalanceInfo;
    }

    /**
     * @param \Oceanengine\Models\SharedWalletWalletBalanceGetV30ResponseDataSharedWalletBalanceInfoValueGeneralBalanceInfoLocalOnlyBalanceInfo $localOnlyBalanceInfo
     * @return self
     */
    public function setLocalOnlyBalanceInfo(?\Oceanengine\Models\SharedWalletWalletBalanceGetV30ResponseDataSharedWalletBalanceInfoValueGeneralBalanceInfoLocalOnlyBalanceInfo $localOnlyBalanceInfo): self
    {
        $this->localOnlyBalanceInfo = $localOnlyBalanceInfo;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->adOnlyBalanceInfo !== null) {
            $result['ad_only_balance_info'] = $this->adOnlyBalanceInfo;
        }
        if ($this->adSharedBalanceInfo !== null) {
            $result['ad_shared_balance_info'] = $this->adSharedBalanceInfo;
        }
        if ($this->ecpOnlyBalanceInfo !== null) {
            $result['ecp_only_balance_info'] = $this->ecpOnlyBalanceInfo;
        }
        if ($this->localOnlyBalanceInfo !== null) {
            $result['local_only_balance_info'] = $this->localOnlyBalanceInfo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['ad_only_balance_info'] ?? null) !== null && is_array($v)) {
            $obj->adOnlyBalanceInfo = \Oceanengine\Models\SharedWalletWalletBalanceGetV30ResponseDataSharedWalletBalanceInfoValueGeneralBalanceInfoAdOnlyBalanceInfo::fromArray($v);
        }
        if (($v = $data['ad_shared_balance_info'] ?? null) !== null && is_array($v)) {
            $obj->adSharedBalanceInfo = \Oceanengine\Models\SharedWalletWalletBalanceGetV30ResponseDataSharedWalletBalanceInfoValueGeneralBalanceInfoAdSharedBalanceInfo::fromArray($v);
        }
        if (($v = $data['ecp_only_balance_info'] ?? null) !== null && is_array($v)) {
            $obj->ecpOnlyBalanceInfo = \Oceanengine\Models\SharedWalletWalletBalanceGetV30ResponseDataSharedWalletBalanceInfoValueGeneralBalanceInfoEcpOnlyBalanceInfo::fromArray($v);
        }
        if (($v = $data['local_only_balance_info'] ?? null) !== null && is_array($v)) {
            $obj->localOnlyBalanceInfo = \Oceanengine\Models\SharedWalletWalletBalanceGetV30ResponseDataSharedWalletBalanceInfoValueGeneralBalanceInfoLocalOnlyBalanceInfo::fromArray($v);
        }
        return $obj;
    }
}
