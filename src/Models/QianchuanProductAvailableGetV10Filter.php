<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanProductAvailableGetV10Filter implements \JsonSerializable
{
    /**
     * 是否托管
     * @var bool
     */
    protected ?bool $isAdlab = null;

    /**
     * @var \Oceanengine\Models\QianchuanProductAvailableGetV10FilterMarketingScene
     */
    protected ?string $marketingScene = null;

    /**
     * @var int[]
     */
    protected ?array $productIds = null;

    /**
     * @var string
     */
    protected ?string $productName = null;

    /**
     * @var \Oceanengine\Models\QianchuanProductAvailableGetV10FilterTab
     */
    protected ?string $tab = null;

    /**
     * 是否托管
     * @return bool
     */
    public function getIsAdlab(): ?bool
    {
        return $this->isAdlab;
    }

    /**
     * 是否托管
     * @param bool $isAdlab
     * @return self
     */
    public function setIsAdlab(?bool $isAdlab): self
    {
        $this->isAdlab = $isAdlab;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanProductAvailableGetV10FilterMarketingScene
     */
    public function getMarketingScene(): ?string
    {
        return $this->marketingScene;
    }

    /**
     * @param \Oceanengine\Models\QianchuanProductAvailableGetV10FilterMarketingScene $marketingScene
     * @return self
     */
    public function setMarketingScene(?string $marketingScene): self
    {
        $this->marketingScene = $marketingScene;
        return $this;
    }

    /**
     * @return int[]
     */
    public function getProductIds(): ?array
    {
        return $this->productIds;
    }

    /**
     * @param int[] $productIds
     * @return self
     */
    public function setProductIds(?array $productIds): self
    {
        $this->productIds = $productIds;
        return $this;
    }

    /**
     * @return string
     */
    public function getProductName(): ?string
    {
        return $this->productName;
    }

    /**
     * @param string $productName
     * @return self
     */
    public function setProductName(?string $productName): self
    {
        $this->productName = $productName;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanProductAvailableGetV10FilterTab
     */
    public function getTab(): ?string
    {
        return $this->tab;
    }

    /**
     * @param \Oceanengine\Models\QianchuanProductAvailableGetV10FilterTab $tab
     * @return self
     */
    public function setTab(?string $tab): self
    {
        $this->tab = $tab;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->isAdlab !== null) {
            $result['is_adlab'] = $this->isAdlab;
        }
        if ($this->marketingScene !== null) {
            $result['marketing_scene'] = $this->marketingScene;
        }
        if ($this->productIds !== null) {
            $result['product_ids'] = $this->productIds;
        }
        if ($this->productName !== null) {
            $result['product_name'] = $this->productName;
        }
        if ($this->tab !== null) {
            $result['tab'] = $this->tab;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['is_adlab'] ?? null) !== null) {
            $obj->isAdlab = (bool) $v;
        }
        if (($v = $data['marketing_scene'] ?? null) !== null) {
            $obj->marketingScene = (string) $v;
        }
        if (($v = $data['product_ids'] ?? null) !== null && is_array($v)) {
            $obj->productIds = $v;
        }
        if (($v = $data['product_name'] ?? null) !== null) {
            $obj->productName = (string) $v;
        }
        if (($v = $data['tab'] ?? null) !== null) {
            $obj->tab = (string) $v;
        }
        return $obj;
    }
}
