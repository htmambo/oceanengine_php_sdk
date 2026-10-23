<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class DownloadStatementEsignFileV2ResponseData implements \JsonSerializable
{
    /**
     * 无下载链接原因
     * @var string
     */
    protected ?string $noUrlReason = null;

    /**
     * 下载链接
     * @var string
     */
    protected ?string $url = null;

    /**
     * 无下载链接原因
     * @return string
     */
    public function getNoUrlReason(): ?string
    {
        return $this->noUrlReason;
    }

    /**
     * 无下载链接原因
     * @param string $noUrlReason
     * @return self
     */
    public function setNoUrlReason(?string $noUrlReason): self
    {
        $this->noUrlReason = $noUrlReason;
        return $this;
    }

    /**
     * 下载链接
     * @return string
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

    /**
     * 下载链接
     * @param string $url
     * @return self
     */
    public function setUrl(?string $url): self
    {
        $this->url = $url;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->noUrlReason !== null) {
            $result['no_url_reason'] = $this->noUrlReason;
        }
        if ($this->url !== null) {
            $result['url'] = $this->url;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['no_url_reason'] ?? null) !== null) {
            $obj->noUrlReason = (string) $v;
        }
        if (($v = $data['url'] ?? null) !== null) {
            $obj->url = (string) $v;
        }
        return $obj;
    }
}
