<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AicElementUpdateV30Request implements \JsonSerializable
{
    /**
     * BP账户体系:组织id，Agent账户体系:代理商id
     * @var int
     */
    protected ?int $accountId = null;

    /**
     * @var \Oceanengine\Models\AicElementUpdateV30AccountType
     */
    protected ?string $accountType = null;

    /**
     * 需要修改的元素id（文件、文件夹），权限范围:传入的account_id账户下的元素
     * @var int
     */
    protected ?int $elementId = null;

    /**
     * 需要修改的元素名称，元素名称，支持中英文、数字、特殊字符，默认剔除html标签，字数限制：50
     * @var string
     */
    protected ?string $elementName = null;

    /**
     * 元素移动的文件夹路径，确保输入路径存在，移动文件夹会移动文件夹下所有文件， 示例：/数码/电脑 层级：2，最大层级限制：10
     * @var string
     */
    protected ?string $pathName = null;

    /**
     * BP账户体系:组织id，Agent账户体系:代理商id
     * @return int
     */
    public function getAccountId(): ?int
    {
        return $this->accountId;
    }

    /**
     * BP账户体系:组织id，Agent账户体系:代理商id
     * @param int $accountId
     * @return self
     */
    public function setAccountId(?int $accountId): self
    {
        $this->accountId = $accountId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AicElementUpdateV30AccountType
     */
    public function getAccountType(): ?string
    {
        return $this->accountType;
    }

    /**
     * @param \Oceanengine\Models\AicElementUpdateV30AccountType $accountType
     * @return self
     */
    public function setAccountType(?string $accountType): self
    {
        $this->accountType = $accountType;
        return $this;
    }

    /**
     * 需要修改的元素id（文件、文件夹），权限范围:传入的account_id账户下的元素
     * @return int
     */
    public function getElementId(): ?int
    {
        return $this->elementId;
    }

    /**
     * 需要修改的元素id（文件、文件夹），权限范围:传入的account_id账户下的元素
     * @param int $elementId
     * @return self
     */
    public function setElementId(?int $elementId): self
    {
        $this->elementId = $elementId;
        return $this;
    }

    /**
     * 需要修改的元素名称，元素名称，支持中英文、数字、特殊字符，默认剔除html标签，字数限制：50
     * @return string
     */
    public function getElementName(): ?string
    {
        return $this->elementName;
    }

    /**
     * 需要修改的元素名称，元素名称，支持中英文、数字、特殊字符，默认剔除html标签，字数限制：50
     * @param string $elementName
     * @return self
     */
    public function setElementName(?string $elementName): self
    {
        $this->elementName = $elementName;
        return $this;
    }

    /**
     * 元素移动的文件夹路径，确保输入路径存在，移动文件夹会移动文件夹下所有文件， 示例：/数码/电脑 层级：2，最大层级限制：10
     * @return string
     */
    public function getPathName(): ?string
    {
        return $this->pathName;
    }

    /**
     * 元素移动的文件夹路径，确保输入路径存在，移动文件夹会移动文件夹下所有文件， 示例：/数码/电脑 层级：2，最大层级限制：10
     * @param string $pathName
     * @return self
     */
    public function setPathName(?string $pathName): self
    {
        $this->pathName = $pathName;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->accountId !== null) {
            $result['account_id'] = $this->accountId;
        }
        if ($this->accountType !== null) {
            $result['account_type'] = $this->accountType;
        }
        if ($this->elementId !== null) {
            $result['element_id'] = $this->elementId;
        }
        if ($this->elementName !== null) {
            $result['element_name'] = $this->elementName;
        }
        if ($this->pathName !== null) {
            $result['path_name'] = $this->pathName;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['account_id'] ?? null) !== null) {
            $obj->accountId = (int) $v;
        }
        if (($v = $data['account_type'] ?? null) !== null) {
            $obj->accountType = (string) $v;
        }
        if (($v = $data['element_id'] ?? null) !== null) {
            $obj->elementId = (int) $v;
        }
        if (($v = $data['element_name'] ?? null) !== null) {
            $obj->elementName = (string) $v;
        }
        if (($v = $data['path_name'] ?? null) !== null) {
            $obj->pathName = (string) $v;
        }
        return $obj;
    }
}
