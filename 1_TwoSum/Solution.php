<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        
        foreach ($nums as $key => $num) {
            if ($num > $target) continue;
            $needed = $target - $num;
            $needed_index = array_search($needed, $nums);
            if ($needed_index) {
                return array($key, $needed_index);
            }
        }
        
        //return "No two sum solution";
        
    }
}

$nums = array(2,7,11,15);
$target = 9;
$solution = new Solution();
print_r($solution->twoSum($nums, $target));