<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanBatchCampaignStatusUpdateV10ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\QianchuanBatchCampaignStatusUpdateV10ResponseDataErrorsInner[]
     */
    protected ?array $errors = null;

    /**
     * @var int[]
     */
    protected ?array $success = null;

    /**
     * @return \Oceanengine\Models\QianchuanBatchCampaignStatusUpdateV10ResponseDataErrorsInner[]
     */
    public function getErrors(): ?array
    {
        return $this->errors;
    }

    /**
     * @param \Oceanengine\Models\QianchuanBatchCampaignStatusUpdateV10ResponseDataErrorsInner[] $errors
     * @return self
     */
    public function setErrors(?array $errors): self
    {
        $this->errors = $errors;
        return $this;
    }

    /**
     * @return int[]
     */
    public function getSuccess(): ?array
    {
        return $this->success;
    }

    /**
     * @param int[] $success
     * @return self
     */
    public function setSuccess(?array $success): self
    {
        $this->success = $success;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->errors !== null) {
            $result['errors'] = $this->errors;
        }
        if ($this->success !== null) {
            $result['success'] = $this->success;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['errors'] ?? null) !== null && is_array($v)) {
            $obj->errors = array_map(fn ($vv) => \Oceanengine\Models\QianchuanBatchCampaignStatusUpdateV10ResponseDataErrorsInner::fromArray($vv), $v);
        }
        if (($v = $data['success'] ?? null) !== null && is_array($v)) {
            $obj->success = $v;
        }
        return $obj;
    }
}
