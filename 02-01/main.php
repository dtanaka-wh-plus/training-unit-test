<?php
function isSunday(): bool{
  $date = new DateTime();
  return $date->format('w') === '0';
}
