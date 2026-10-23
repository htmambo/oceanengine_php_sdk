<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanAwemeSuggestBidV10DeliverySetting implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $amount = null;

    /**
     * @var \Oceanengine\Models\QianchuanAwemeSuggestBidV10DeliverySettingExternalAction
     */
    protected ?string $externalAction = null;

    /**
     * @return int
     */
    public function getAmount(): ?int
    {
        return $this->amount;
    }

    /**
     * @param int $amount
     * @return self
     */
    public function setAmount(?int $amount): self
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAwemeSuggestBidV10DeliverySettingExternalAction
     */
    public function getExternalAction(): ?string
    {
        return $this->externalAction;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAwemeSuggestBidV10DeliverySettingExternalAction $externalAction
     * @return self
     */
    public function setExternalAction(?string $externalAction): self
    {
        $this->externalAction = $externalAction;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->amount !== null) {
            $result['amount'] = $this->amount;
        }
        if ($this->externalAction !== null) {
            $result['external_action'] = $this->externalAction;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['amount'] ?? null) !== null) {
            $obj->amount = (int) $v;
        }
        if (($v = $data['external_action'] ?? null) !== null) {
            $obj->externalAction = (string) $v;
        }
        return $obj;
    }
}
