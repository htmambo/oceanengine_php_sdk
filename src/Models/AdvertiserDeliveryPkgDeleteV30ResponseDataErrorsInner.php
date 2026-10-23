<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AdvertiserDeliveryPkgDeleteV30ResponseDataErrorsInner implements \JsonSerializable
{
    /**
     * 错误信息
     * @var string
     */
    protected ?string $errorMessage = null;

    /**
     * 行业产品id
     * @var int
     */
    protected ?int $pkgId = null;

    /**
     * 错误信息
     * @return string
     */
    public function getErrorMessage(): ?string
    {
        return $this->errorMessage;
    }

    /**
     * 错误信息
     * @param string $errorMessage
     * @return self
     */
    public function setErrorMessage(?string $errorMessage): self
    {
        $this->errorMessage = $errorMessage;
        return $this;
    }

    /**
     * 行业产品id
     * @return int
     */
    public function getPkgId(): ?int
    {
        return $this->pkgId;
    }

    /**
     * 行业产品id
     * @param int $pkgId
     * @return self
     */
    public function setPkgId(?int $pkgId): self
    {
        $this->pkgId = $pkgId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->errorMessage !== null) {
            $result['error_message'] = $this->errorMessage;
        }
        if ($this->pkgId !== null) {
            $result['pkg_id'] = $this->pkgId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['error_message'] ?? null) !== null) {
            $obj->errorMessage = (string) $v;
        }
        if (($v = $data['pkg_id'] ?? null) !== null) {
            $obj->pkgId = (int) $v;
        }
        return $obj;
    }
}
