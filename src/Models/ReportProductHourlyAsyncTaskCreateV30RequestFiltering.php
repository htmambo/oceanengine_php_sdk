<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ReportProductHourlyAsyncTaskCreateV30RequestFiltering implements \JsonSerializable
{
    /**
     * @var int[]
     */
    protected ?array $adIds = null;

    /**
     * @var string
     */
    protected ?string $deepExternalAction = null;

    /**
     * @var int
     */
    protected ?int $dpaVideoTid = null;

    /**
     * @var string
     */
    protected ?string $externalAction = null;

    /**
     * @var int
     */
    protected ?int $productId = null;

    /**
     * @var string
     */
    protected ?string $showAppName = null;

    /**
     * @return int[]
     */
    public function getAdIds(): ?array
    {
        return $this->adIds;
    }

    /**
     * @param int[] $adIds
     * @return self
     */
    public function setAdIds(?array $adIds): self
    {
        $this->adIds = $adIds;
        return $this;
    }

    /**
     * @return string
     */
    public function getDeepExternalAction(): ?string
    {
        return $this->deepExternalAction;
    }

    /**
     * @param string $deepExternalAction
     * @return self
     */
    public function setDeepExternalAction(?string $deepExternalAction): self
    {
        $this->deepExternalAction = $deepExternalAction;
        return $this;
    }

    /**
     * @return int
     */
    public function getDpaVideoTid(): ?int
    {
        return $this->dpaVideoTid;
    }

    /**
     * @param int $dpaVideoTid
     * @return self
     */
    public function setDpaVideoTid(?int $dpaVideoTid): self
    {
        $this->dpaVideoTid = $dpaVideoTid;
        return $this;
    }

    /**
     * @return string
     */
    public function getExternalAction(): ?string
    {
        return $this->externalAction;
    }

    /**
     * @param string $externalAction
     * @return self
     */
    public function setExternalAction(?string $externalAction): self
    {
        $this->externalAction = $externalAction;
        return $this;
    }

    /**
     * @return int
     */
    public function getProductId(): ?int
    {
        return $this->productId;
    }

    /**
     * @param int $productId
     * @return self
     */
    public function setProductId(?int $productId): self
    {
        $this->productId = $productId;
        return $this;
    }

    /**
     * @return string
     */
    public function getShowAppName(): ?string
    {
        return $this->showAppName;
    }

    /**
     * @param string $showAppName
     * @return self
     */
    public function setShowAppName(?string $showAppName): self
    {
        $this->showAppName = $showAppName;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->adIds !== null) {
            $result['ad_ids'] = $this->adIds;
        }
        if ($this->deepExternalAction !== null) {
            $result['deep_external_action'] = $this->deepExternalAction;
        }
        if ($this->dpaVideoTid !== null) {
            $result['dpa_video_tid'] = $this->dpaVideoTid;
        }
        if ($this->externalAction !== null) {
            $result['external_action'] = $this->externalAction;
        }
        if ($this->productId !== null) {
            $result['product_id'] = $this->productId;
        }
        if ($this->showAppName !== null) {
            $result['show_app_name'] = $this->showAppName;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['ad_ids'] ?? null) !== null && is_array($v)) {
            $obj->adIds = $v;
        }
        if (($v = $data['deep_external_action'] ?? null) !== null) {
            $obj->deepExternalAction = (string) $v;
        }
        if (($v = $data['dpa_video_tid'] ?? null) !== null) {
            $obj->dpaVideoTid = (int) $v;
        }
        if (($v = $data['external_action'] ?? null) !== null) {
            $obj->externalAction = (string) $v;
        }
        if (($v = $data['product_id'] ?? null) !== null) {
            $obj->productId = (int) $v;
        }
        if (($v = $data['show_app_name'] ?? null) !== null) {
            $obj->showAppName = (string) $v;
        }
        return $obj;
    }
}
