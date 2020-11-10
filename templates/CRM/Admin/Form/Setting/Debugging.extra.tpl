{* The debugging and error handling page isn't yet using the new settings metadata, so we need to manually add this to get it to display on the form. *}
<table>
<tr class="crm-debugging-form-block-monologPath">
  <td class="label">{$form.monolog_path.label}</td>
  <td>{$form.monolog_path.html}<br />
  <span class="description">{crmScope extensionKey='monolog'}{ts}Proof of concept setting to set the folder path.{/ts}{/crmScope}</span></td>
</tr>
</table>
{literal}
<script type="text/javascript">
(function($) {
  $('tr.crm-debugging-form-block-monologPath').insertAfter('tr.crm-debugging-form-block-assetCache');
})(CRM.$);
</script>
{/literal}
