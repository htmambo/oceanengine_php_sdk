<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class FileVideoMaterialClearTaskCreateV2Request implements \JsonSerializable
{
    /**
     * 广告主id
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * @var \Oceanengine\Models\FileVideoMaterialClearTaskCreateV2RequestClearTaskParams
     */
    protected ?\Oceanengine\Models\FileVideoMaterialClearTaskCreateV2RequestClearTaskParams $clearTaskParams = null;

    /**
     * 广告主id
     * @return int
     */
    public function getAdvertiserId(): ?int
    {
        return $this->advertiserId;
    }

    /**
     * 广告主id
     * @param int $advertiserId
     * @return self
     */
    public function setAdvertiserId(?int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\FileVideoMaterialClearTaskCreateV2RequestClearTaskParams
     */
    public function getClearTaskParams(): ?\Oceanengine\Models\FileVideoMaterialClearTaskCreateV2RequestClearTaskParams
    {
        return $this->clearTaskParams;
    }

    /**
     * @param \Oceanengine\Models\FileVideoMaterialClearTaskCreateV2RequestClearTaskParams $clearTaskParams
     * @return self
     */
    public function setClearTaskParams(?\Oceanengine\Models\FileVideoMaterialClearTaskCreateV2RequestClearTaskParams $clearTaskParams): self
    {
        $this->clearTaskParams = $clearTaskParams;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->advertiserId !== null) {
            $result['advertiser_id'] = $this->advertiserId;
        }
        if ($this->clearTaskParams !== null) {
            $result['clear_task_params'] = $this->clearTaskParams;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['clear_task_params'] ?? null) !== null && is_array($v)) {
            $obj->clearTaskParams = \Oceanengine\Models\FileVideoMaterialClearTaskCreateV2RequestClearTaskParams::fromArray($v);
        }
        return $obj;
    }
}
