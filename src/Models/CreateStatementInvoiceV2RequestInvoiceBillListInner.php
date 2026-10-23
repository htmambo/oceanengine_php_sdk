<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class CreateStatementInvoiceV2RequestInvoiceBillListInner implements \JsonSerializable
{
    /**
     * 开票票据项目列表
     * @var \Oceanengine\Models\CreateStatementInvoiceV2RequestInvoiceBillListInnerInvoiceBillProjectListInner[]
     */
    protected ?array $invoiceBillProjectList = null;

    /**
     * 打印备注
     * @var string
     */
    protected ?string $remark = null;

    /**
     * 开票票据项目列表
     * @return \Oceanengine\Models\CreateStatementInvoiceV2RequestInvoiceBillListInnerInvoiceBillProjectListInner[]
     */
    public function getInvoiceBillProjectList(): ?array
    {
        return $this->invoiceBillProjectList;
    }

    /**
     * 开票票据项目列表
     * @param \Oceanengine\Models\CreateStatementInvoiceV2RequestInvoiceBillListInnerInvoiceBillProjectListInner[] $invoiceBillProjectList
     * @return self
     */
    public function setInvoiceBillProjectList(?array $invoiceBillProjectList): self
    {
        $this->invoiceBillProjectList = $invoiceBillProjectList;
        return $this;
    }

    /**
     * 打印备注
     * @return string
     */
    public function getRemark(): ?string
    {
        return $this->remark;
    }

    /**
     * 打印备注
     * @param string $remark
     * @return self
     */
    public function setRemark(?string $remark): self
    {
        $this->remark = $remark;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->invoiceBillProjectList !== null) {
            $result['invoice_bill_project_list'] = $this->invoiceBillProjectList;
        }
        if ($this->remark !== null) {
            $result['remark'] = $this->remark;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['invoice_bill_project_list'] ?? null) !== null && is_array($v)) {
            $obj->invoiceBillProjectList = array_map(fn ($vv) => \Oceanengine\Models\CreateStatementInvoiceV2RequestInvoiceBillListInnerInvoiceBillProjectListInner::fromArray($vv), $v);
        }
        if (($v = $data['remark'] ?? null) !== null) {
            $obj->remark = (string) $v;
        }
        return $obj;
    }
}
