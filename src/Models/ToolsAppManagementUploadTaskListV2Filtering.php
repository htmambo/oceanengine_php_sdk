<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsAppManagementUploadTaskListV2Filtering implements \JsonSerializable
{
    /**
     * 上传文件id，通过CreateUploadTask获得
     * @var int[]
     */
    protected ?array $uploadIds = null;

    /**
     * 上传文件id，通过CreateUploadTask获得
     * @return int[]
     */
    public function getUploadIds(): ?array
    {
        return $this->uploadIds;
    }

    /**
     * 上传文件id，通过CreateUploadTask获得
     * @param int[] $uploadIds
     * @return self
     */
    public function setUploadIds(?array $uploadIds): self
    {
        $this->uploadIds = $uploadIds;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->uploadIds !== null) {
            $result['upload_ids'] = $this->uploadIds;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['upload_ids'] ?? null) !== null && is_array($v)) {
            $obj->uploadIds = $v;
        }
        return $obj;
    }
}
