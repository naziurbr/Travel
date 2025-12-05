<?php
function renderAlert($message, $type = 'info') {
  $color = [
    'success' => '#22A6B3',
    'error'   => '#ff6b6b',
    'info'    => '#F0A500'
  ][$type] ?? '#F0A500';

  return '<div class="alert" style="border-left:4px solid '.$color.';padding:10px;margin-bottom:1rem;">
            <span>'.e($message).'</span>
            <button class="close" style="float:right;border:none;background:transparent;cursor:pointer">&times;</button>
          </div>';
}
