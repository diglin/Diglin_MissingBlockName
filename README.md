## Diglin_MissingBlockName - Magento 2.x Module

Fix issue with block having an alias but no name. It allows developer to overwrite template more easily

Related to pull request I did here: https://github.com/magento/magento2/pull/7272

### Instructions

When a block use only an alias "as", a name to this block will be defined with a combination of the class name of the block and the alias. For example, the block `Magento\Sales\Block\Adminhtml\Items\Renderer\DefaultRenderer` has just the alias `as="default"`, the block name will be `magento_sales_block_adminhtml_items_renderer_defaultrenderer_default` 