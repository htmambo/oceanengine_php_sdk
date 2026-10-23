<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarDemandGetResellCodeV2ResponseData implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $commandCode = null;

    /**
     * @var int
     */
    protected ?int $expireTime = null;

    /**
     * @var string
     */
    protected ?string $qrCodeUrl = null;

    /**
     * @return string
     */
    public function getCommandCode(): ?string
    {
        return $this->commandCode;
    }

    /**
     * @param string $commandCode
     * @return self
     */
    public function setCommandCode(?string $commandCode): self
    {
        $this->commandCode = $commandCode;
        return $this;
    }

    /**
     * @return int
     */
    public function getExpireTime(): ?int
    {
        return $this->expireTime;
    }

    /**
     * @param int $expireTime
     * @return self
     */
    public function setExpireTime(?int $expireTime): self
    {
        $this->expireTime = $expireTime;
        return $this;
    }

    /**
     * @return string
     */
    public function getQrCodeUrl(): ?string
    {
        return $this->qrCodeUrl;
    }

    /**
     * @param string $qrCodeUrl
     * @return self
     */
    public function setQrCodeUrl(?string $qrCodeUrl): self
    {
        $this->qrCodeUrl = $qrCodeUrl;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->commandCode !== null) {
            $result['command_code'] = $this->commandCode;
        }
        if ($this->expireTime !== null) {
            $result['expire_time'] = $this->expireTime;
        }
        if ($this->qrCodeUrl !== null) {
            $result['qr_code_url'] = $this->qrCodeUrl;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['command_code'] ?? null) !== null) {
            $obj->commandCode = (string) $v;
        }
        if (($v = $data['expire_time'] ?? null) !== null) {
            $obj->expireTime = (int) $v;
        }
        if (($v = $data['qr_code_url'] ?? null) !== null) {
            $obj->qrCodeUrl = (string) $v;
        }
        return $obj;
    }
}
