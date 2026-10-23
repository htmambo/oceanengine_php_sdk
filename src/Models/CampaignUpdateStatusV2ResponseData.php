<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class CampaignUpdateStatusV2ResponseData implements \JsonSerializable
{
    /**
     * @var int[]
     */
    protected ?array $campaignIds = null;

    /**
     * @var \Oceanengine\Models\CampaignUpdateStatusV2ResponseDataErrorsInner[]
     */
    protected ?array $errors = null;

    /**
     * @return int[]
     */
    public function getCampaignIds(): ?array
    {
        return $this->campaignIds;
    }

    /**
     * @param int[] $campaignIds
     * @return self
     */
    public function setCampaignIds(?array $campaignIds): self
    {
        $this->campaignIds = $campaignIds;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CampaignUpdateStatusV2ResponseDataErrorsInner[]
     */
    public function getErrors(): ?array
    {
        return $this->errors;
    }

    /**
     * @param \Oceanengine\Models\CampaignUpdateStatusV2ResponseDataErrorsInner[] $errors
     * @return self
     */
    public function setErrors(?array $errors): self
    {
        $this->errors = $errors;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->campaignIds !== null) {
            $result['campaign_ids'] = $this->campaignIds;
        }
        if ($this->errors !== null) {
            $result['errors'] = $this->errors;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['campaign_ids'] ?? null) !== null && is_array($v)) {
            $obj->campaignIds = $v;
        }
        if (($v = $data['errors'] ?? null) !== null && is_array($v)) {
            $obj->errors = array_map(fn ($vv) => \Oceanengine\Models\CampaignUpdateStatusV2ResponseDataErrorsInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
