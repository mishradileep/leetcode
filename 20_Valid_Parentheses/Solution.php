<?php
class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function isValid($s) {
        $just_test = array(
        '(' => ')',
        '[' => ']',
        '{' => '}'
      );
      $arr = array();
      for ($i = 0; $i <= strlen($s) - 1; $i++) {
        if (in_array($s[$i], array_keys($just_test))) {
          array_push($arr, $just_test[$s[$i]]);
        }
        elseif (in_array($s[$i], $just_test)) {
          if (empty($arr)) {
            return FALSE;
          }
          $last_element = array_pop($arr);
          if ($last_element != $s[$i]) {
            return FALSE;
          }
        }
      }
      if (empty($arr)) {
        return TRUE;
      }
      else {
        return FALSE;
      }

        }
}

$Solution = new Solution();
if ($Solution->isValid('{[]}')) {
  print "valid";
}
else {
  print "InValid";
}