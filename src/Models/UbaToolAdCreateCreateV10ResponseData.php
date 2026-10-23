<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class UbaToolAdCreateCreateV10ResponseData implements \JsonSerializable
{
    /**
     * 计划id
     * @var int[]
     */
    protected ?array $adIds = null;

    /**
     * 额外附加信息
     * @var array<string,string>
     */
    protected ?array $extra = null;

    /**
     * @var \Oceanengine\Models\UbaToolAdCreateCreateV10ResponseDataPreview
     */
    protected ?\Oceanengine\Models\UbaToolAdCreateCreateV10ResponseDataPreview $preview = null;

    /**
     * 操作的细节信息
     * @var string
     */
    protected ?string $resMsg = null;

    /**
     * 是否成功
     * @var bool
     */
    protected ?bool $success = null;

    /**
     * 计划id
     * @return int[]
     */
    public function getAdIds(): ?array
    {
        return $this->adIds;
    }

    /**
     * 计划id
     * @param int[] $adIds
     * @return self
     */
    public function setAdIds(?array $adIds): self
    {
        $this->adIds = $adIds;
        return $this;
    }

    /**
     * 额外附加信息
     * @return array<string,string>
     */
    public function getExtra(): ?array
    {
        return $this->extra;
    }

    /**
     * 额外附加信息
     * @param array<string,string> $extra
     * @return self
     */
    public function setExtra(?array $extra): self
    {
        $this->extra = $extra;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\UbaToolAdCreateCreateV10ResponseDataPreview
     */
    public function getPreview(): ?\Oceanengine\Models\UbaToolAdCreateCreateV10ResponseDataPreview
    {
        return $this->preview;
    }

    /**
     * @param \Oceanengine\Models\UbaToolAdCreateCreateV10ResponseDataPreview $preview
     * @return self
     */
    public function setPreview(?\Oceanengine\Models\UbaToolAdCreateCreateV10ResponseDataPreview $preview): self
    {
        $this->preview = $preview;
        return $this;
    }

    /**
     * 操作的细节信息
     * @return string
     */
    public function getResMsg(): ?string
    {
        return $this->resMsg;
    }

    /**
     * 操作的细节信息
     * @param string $resMsg
     * @return self
     */
    public function setResMsg(?string $resMsg): self
    {
        $this->resMsg = $resMsg;
        return $this;
    }

    /**
     * 是否成功
     * @return bool
     */
    public function getSuccess(): ?bool
    {
        return $this->success;
    }

    /**
     * 是否成功
     * @param bool $success
     * @return self
     */
    public function setSuccess(?bool $success): self
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
        if ($this->adIds !== null) {
            $result['ad_ids'] = $this->adIds;
        }
        if ($this->extra !== null) {
            $result['extra'] = $this->extra;
        }
        if ($this->preview !== null) {
            $result['preview'] = $this->preview;
        }
        if ($this->resMsg !== null) {
            $result['res_msg'] = $this->resMsg;
        }
        if ($this->success !== null) {
            $result['success'] = $this->success;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['ad_ids'] ?? null) !== null && is_array($v)) {
            $obj->adIds = $v;
        }
        if (($v = $data['extra'] ?? null) !== null && is_array($v)) {
            $obj->extra = $v;
        }
        if (($v = $data['preview'] ?? null) !== null && is_array($v)) {
            $obj->preview = \Oceanengine\Models\UbaToolAdCreateCreateV10ResponseDataPreview::fromArray($v);
        }
        if (($v = $data['res_msg'] ?? null) !== null) {
            $obj->resMsg = (string) $v;
        }
        if (($v = $data['success'] ?? null) !== null) {
            $obj->success = (bool) $v;
        }
        return $obj;
    }
}
