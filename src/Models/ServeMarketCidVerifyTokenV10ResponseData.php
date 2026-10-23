<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ServeMarketCidVerifyTokenV10ResponseData implements \JsonSerializable
{
    /**
     * 传入的app_access_token
     * @var string
     */
    protected ?string $appAccessToken = null;

    /**
     * @var \Oceanengine\Models\ServeMarketCidVerifyTokenV10DataCidCapacityStatus
     */
    protected ?string $cidCapacityStatus = null;

    /**
     * 开放平台开发者资质名称
     * @var string
     */
    protected ?string $devQualificationName = null;

    /**
     * @var \Oceanengine\Models\ServeMarketCidVerifyTokenV10DataDevStatus
     */
    protected ?string $devStatus = null;

    /**
     * @var \Oceanengine\Models\ServeMarketCidVerifyTokenV10DataFacilitatorSubStatus
     */
    protected ?string $facilitatorSubStatus = null;

    /**
     * app_access_token是否有效，如果为true，那么token回传不会因群峰未入驻阻塞
     * @var bool
     */
    protected ?bool $tokenIsValid = null;

    /**
     * 传入的app_access_token
     * @return string
     */
    public function getAppAccessToken(): ?string
    {
        return $this->appAccessToken;
    }

    /**
     * 传入的app_access_token
     * @param string $appAccessToken
     * @return self
     */
    public function setAppAccessToken(?string $appAccessToken): self
    {
        $this->appAccessToken = $appAccessToken;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ServeMarketCidVerifyTokenV10DataCidCapacityStatus
     */
    public function getCidCapacityStatus(): ?string
    {
        return $this->cidCapacityStatus;
    }

    /**
     * @param \Oceanengine\Models\ServeMarketCidVerifyTokenV10DataCidCapacityStatus $cidCapacityStatus
     * @return self
     */
    public function setCidCapacityStatus(?string $cidCapacityStatus): self
    {
        $this->cidCapacityStatus = $cidCapacityStatus;
        return $this;
    }

    /**
     * 开放平台开发者资质名称
     * @return string
     */
    public function getDevQualificationName(): ?string
    {
        return $this->devQualificationName;
    }

    /**
     * 开放平台开发者资质名称
     * @param string $devQualificationName
     * @return self
     */
    public function setDevQualificationName(?string $devQualificationName): self
    {
        $this->devQualificationName = $devQualificationName;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ServeMarketCidVerifyTokenV10DataDevStatus
     */
    public function getDevStatus(): ?string
    {
        return $this->devStatus;
    }

    /**
     * @param \Oceanengine\Models\ServeMarketCidVerifyTokenV10DataDevStatus $devStatus
     * @return self
     */
    public function setDevStatus(?string $devStatus): self
    {
        $this->devStatus = $devStatus;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ServeMarketCidVerifyTokenV10DataFacilitatorSubStatus
     */
    public function getFacilitatorSubStatus(): ?string
    {
        return $this->facilitatorSubStatus;
    }

    /**
     * @param \Oceanengine\Models\ServeMarketCidVerifyTokenV10DataFacilitatorSubStatus $facilitatorSubStatus
     * @return self
     */
    public function setFacilitatorSubStatus(?string $facilitatorSubStatus): self
    {
        $this->facilitatorSubStatus = $facilitatorSubStatus;
        return $this;
    }

    /**
     * app_access_token是否有效，如果为true，那么token回传不会因群峰未入驻阻塞
     * @return bool
     */
    public function getTokenIsValid(): ?bool
    {
        return $this->tokenIsValid;
    }

    /**
     * app_access_token是否有效，如果为true，那么token回传不会因群峰未入驻阻塞
     * @param bool $tokenIsValid
     * @return self
     */
    public function setTokenIsValid(?bool $tokenIsValid): self
    {
        $this->tokenIsValid = $tokenIsValid;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->appAccessToken !== null) {
            $result['app_access_token'] = $this->appAccessToken;
        }
        if ($this->cidCapacityStatus !== null) {
            $result['cid_capacity_status'] = $this->cidCapacityStatus;
        }
        if ($this->devQualificationName !== null) {
            $result['dev_qualification_name'] = $this->devQualificationName;
        }
        if ($this->devStatus !== null) {
            $result['dev_status'] = $this->devStatus;
        }
        if ($this->facilitatorSubStatus !== null) {
            $result['facilitator_sub_status'] = $this->facilitatorSubStatus;
        }
        if ($this->tokenIsValid !== null) {
            $result['token_is_valid'] = $this->tokenIsValid;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['app_access_token'] ?? null) !== null) {
            $obj->appAccessToken = (string) $v;
        }
        if (($v = $data['cid_capacity_status'] ?? null) !== null) {
            $obj->cidCapacityStatus = (string) $v;
        }
        if (($v = $data['dev_qualification_name'] ?? null) !== null) {
            $obj->devQualificationName = (string) $v;
        }
        if (($v = $data['dev_status'] ?? null) !== null) {
            $obj->devStatus = (string) $v;
        }
        if (($v = $data['facilitator_sub_status'] ?? null) !== null) {
            $obj->facilitatorSubStatus = (string) $v;
        }
        if (($v = $data['token_is_valid'] ?? null) !== null) {
            $obj->tokenIsValid = (bool) $v;
        }
        return $obj;
    }
}
