<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanBatchCampaignStatusUpdateV10ResponseDataErrorsInner implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $campaignId = null;

    /**
     * @var string
     */
    protected ?string $errorMessage = null;

    /**
     * @return string
     */
    public function getCampaignId(): ?string
    {
        return $this->campaignId;
    }

    /**
     * @param string $campaignId
     * @return self
     */
    public function setCampaignId(?string $campaignId): self
    {
        $this->campaignId = $campaignId;
        return $this;
    }

    /**
     * @return string
     */
    public function getErrorMessage(): ?string
    {
        return $this->errorMessage;
    }

    /**
     * @param string $errorMessage
     * @return self
     */
    public function setErrorMessage(?string $errorMessage): self
    {
        $this->errorMessage = $errorMessage;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->campaignId !== null) {
            $result['campaign_id'] = $this->campaignId;
        }
        if ($this->errorMessage !== null) {
            $result['error_message'] = $this->errorMessage;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['campaign_id'] ?? null) !== null) {
            $obj->campaignId = (string) $v;
        }
        if (($v = $data['error_message'] ?? null) !== null) {
            $obj->errorMessage = (string) $v;
        }
        return $obj;
    }
}
