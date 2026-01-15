jQuery(document).ready(function ($) {
  function switch_radio(val) {
    if (val === 'opt-out') {
      $('.aesirx_consent_gpc_consent_donotsell_row').show();
    } else {
      $('.aesirx_consent_gpc_consent_donotsell_row').hide();
    }
  }
  $('input.gpc_consent_class').click(function () {
    switch_radio($(this).val());
  });
  switch_radio("' . esc_html($mode) . '");
});
