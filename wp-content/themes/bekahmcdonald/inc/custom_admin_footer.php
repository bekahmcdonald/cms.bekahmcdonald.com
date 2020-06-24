<?php

function BM_custom_footer_admin () {
  echo "Created by <a style='font-weight: bold; text-decoration: underline; color: inherit'  href='https://bekahmcdonald.com' rel='noopener noreferrer'>Bekah</a>";
}

add_filter('admin_footer_text', 'BM_custom_footer_admin');