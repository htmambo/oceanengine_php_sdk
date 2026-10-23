<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarMcnProviderGetRecruitInfoGetV2ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\StarMcnProviderGetRecruitInfoGetV2ResponseDataChallenge
     */
    protected ?\Oceanengine\Models\StarMcnProviderGetRecruitInfoGetV2ResponseDataChallenge $challenge = null;

    /**
     * @var \Oceanengine\Models\StarMcnProviderGetRecruitInfoGetV2ResponseDataComponent
     */
    protected ?\Oceanengine\Models\StarMcnProviderGetRecruitInfoGetV2ResponseDataComponent $component = null;

    /**
     * @var \Oceanengine\Models\StarMcnProviderGetRecruitInfoGetV2ResponseDataDemand
     */
    protected ?\Oceanengine\Models\StarMcnProviderGetRecruitInfoGetV2ResponseDataDemand $demand = null;

    /**
     * @var \Oceanengine\Models\StarMcnProviderGetRecruitInfoGetV2ResponseDataRecruitInfo
     */
    protected ?\Oceanengine\Models\StarMcnProviderGetRecruitInfoGetV2ResponseDataRecruitInfo $recruitInfo = null;

    /**
     * @return \Oceanengine\Models\StarMcnProviderGetRecruitInfoGetV2ResponseDataChallenge
     */
    public function getChallenge(): ?\Oceanengine\Models\StarMcnProviderGetRecruitInfoGetV2ResponseDataChallenge
    {
        return $this->challenge;
    }

    /**
     * @param \Oceanengine\Models\StarMcnProviderGetRecruitInfoGetV2ResponseDataChallenge $challenge
     * @return self
     */
    public function setChallenge(?\Oceanengine\Models\StarMcnProviderGetRecruitInfoGetV2ResponseDataChallenge $challenge): self
    {
        $this->challenge = $challenge;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarMcnProviderGetRecruitInfoGetV2ResponseDataComponent
     */
    public function getComponent(): ?\Oceanengine\Models\StarMcnProviderGetRecruitInfoGetV2ResponseDataComponent
    {
        return $this->component;
    }

    /**
     * @param \Oceanengine\Models\StarMcnProviderGetRecruitInfoGetV2ResponseDataComponent $component
     * @return self
     */
    public function setComponent(?\Oceanengine\Models\StarMcnProviderGetRecruitInfoGetV2ResponseDataComponent $component): self
    {
        $this->component = $component;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarMcnProviderGetRecruitInfoGetV2ResponseDataDemand
     */
    public function getDemand(): ?\Oceanengine\Models\StarMcnProviderGetRecruitInfoGetV2ResponseDataDemand
    {
        return $this->demand;
    }

    /**
     * @param \Oceanengine\Models\StarMcnProviderGetRecruitInfoGetV2ResponseDataDemand $demand
     * @return self
     */
    public function setDemand(?\Oceanengine\Models\StarMcnProviderGetRecruitInfoGetV2ResponseDataDemand $demand): self
    {
        $this->demand = $demand;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarMcnProviderGetRecruitInfoGetV2ResponseDataRecruitInfo
     */
    public function getRecruitInfo(): ?\Oceanengine\Models\StarMcnProviderGetRecruitInfoGetV2ResponseDataRecruitInfo
    {
        return $this->recruitInfo;
    }

    /**
     * @param \Oceanengine\Models\StarMcnProviderGetRecruitInfoGetV2ResponseDataRecruitInfo $recruitInfo
     * @return self
     */
    public function setRecruitInfo(?\Oceanengine\Models\StarMcnProviderGetRecruitInfoGetV2ResponseDataRecruitInfo $recruitInfo): self
    {
        $this->recruitInfo = $recruitInfo;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->challenge !== null) {
            $result['challenge'] = $this->challenge;
        }
        if ($this->component !== null) {
            $result['component'] = $this->component;
        }
        if ($this->demand !== null) {
            $result['demand'] = $this->demand;
        }
        if ($this->recruitInfo !== null) {
            $result['recruit_info'] = $this->recruitInfo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['challenge'] ?? null) !== null && is_array($v)) {
            $obj->challenge = \Oceanengine\Models\StarMcnProviderGetRecruitInfoGetV2ResponseDataChallenge::fromArray($v);
        }
        if (($v = $data['component'] ?? null) !== null && is_array($v)) {
            $obj->component = \Oceanengine\Models\StarMcnProviderGetRecruitInfoGetV2ResponseDataComponent::fromArray($v);
        }
        if (($v = $data['demand'] ?? null) !== null && is_array($v)) {
            $obj->demand = \Oceanengine\Models\StarMcnProviderGetRecruitInfoGetV2ResponseDataDemand::fromArray($v);
        }
        if (($v = $data['recruit_info'] ?? null) !== null && is_array($v)) {
            $obj->recruitInfo = \Oceanengine\Models\StarMcnProviderGetRecruitInfoGetV2ResponseDataRecruitInfo::fromArray($v);
        }
        return $obj;
    }
}
