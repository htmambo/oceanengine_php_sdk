<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class UbaToolStopUpdateV10ResponseData implements \JsonSerializable
{
    /**
     * 额外附加信息
     * @var array<string,string>
     */
    protected ?array $extra = null;

    /**
     * 关停失败计划ids
     * @var int[]
     */
    protected ?array $failedIds = null;

    /**
     * @var \Oceanengine\Models\UbaToolStopUpdateV10ResponseDataPreview
     */
    protected ?\Oceanengine\Models\UbaToolStopUpdateV10ResponseDataPreview $preview = null;

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
     * 关停成功计划ids
     * @var int[]
     */
    protected ?array $successIds = null;

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
     * 关停失败计划ids
     * @return int[]
     */
    public function getFailedIds(): ?array
    {
        return $this->failedIds;
    }

    /**
     * 关停失败计划ids
     * @param int[] $failedIds
     * @return self
     */
    public function setFailedIds(?array $failedIds): self
    {
        $this->failedIds = $failedIds;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\UbaToolStopUpdateV10ResponseDataPreview
     */
    public function getPreview(): ?\Oceanengine\Models\UbaToolStopUpdateV10ResponseDataPreview
    {
        return $this->preview;
    }

    /**
     * @param \Oceanengine\Models\UbaToolStopUpdateV10ResponseDataPreview $preview
     * @return self
     */
    public function setPreview(?\Oceanengine\Models\UbaToolStopUpdateV10ResponseDataPreview $preview): self
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
     * 关停成功计划ids
     * @return int[]
     */
    public function getSuccessIds(): ?array
    {
        return $this->successIds;
    }

    /**
     * 关停成功计划ids
     * @param int[] $successIds
     * @return self
     */
    public function setSuccessIds(?array $successIds): self
    {
        $this->successIds = $successIds;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->extra !== null) {
            $result['extra'] = $this->extra;
        }
        if ($this->failedIds !== null) {
            $result['failed_ids'] = $this->failedIds;
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
        if ($this->successIds !== null) {
            $result['success_ids'] = $this->successIds;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['extra'] ?? null) !== null && is_array($v)) {
            $obj->extra = $v;
        }
        if (($v = $data['failed_ids'] ?? null) !== null && is_array($v)) {
            $obj->failedIds = $v;
        }
        if (($v = $data['preview'] ?? null) !== null && is_array($v)) {
            $obj->preview = \Oceanengine\Models\UbaToolStopUpdateV10ResponseDataPreview::fromArray($v);
        }
        if (($v = $data['res_msg'] ?? null) !== null) {
            $obj->resMsg = (string) $v;
        }
        if (($v = $data['success'] ?? null) !== null) {
            $obj->success = (bool) $v;
        }
        if (($v = $data['success_ids'] ?? null) !== null && is_array($v)) {
            $obj->successIds = $v;
        }
        return $obj;
    }
}
