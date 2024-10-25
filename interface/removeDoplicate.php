<?php 

interface RemoveShortListDuplicateInterface{
    public function removeSortLinkListDuplicate(object $head);
    public function removeShortArrayDuplicate(array $array);
}

interface RemoveArrayDuplicateInterface{
    public function removeDuplicate(array $array);
}

class Node{
    public $val;
    public $next;

    public function __construct(int $value) {
        $this->val = $value;
        $this->next = null;
    }
}

class LinkList{
    private $head;
    private $tail;
    private $length;

    public function __construct(array $nums)
    {
        foreach ($nums as $num) {
            $new_node = new Node($num);
            if ($this->head == null) {
                $this->head = $new_node;
                $this->tail = $new_node; 
            } else {
                $this->tail->next = $new_node;
                $this->tail = $new_node;
            }

            $this->length += 1;
        }
        
    }

    public function getHead() {
        return $this->head; 
    }
}

class Solution implements RemoveArrayDuplicateInterface, RemoveShortListDuplicateInterface{
    public function removeShortArrayDuplicate(array $array)
    {
        
        $map = [];
        $uniqueValues = []; 

        foreach($array as $num) {
            if (!isset($map[$num])) {
                $map[$num] = true; 
                $uniqueValues[] = $num; 
            }
        }

        return $uniqueValues; 
    }

    public function removeSortLinkListDuplicate(object $head)
    {
       
        $array = [];
        $current = $head;
        
        while($current && $current->next){
            if($current->val == $current->next->val){
                $current->next = $current->next->next;
            }else{
                $array[] = $current->val;
                $current = $current->next;
            }
        }

        return $array;
    }

    public function removeDuplicate(array $array)
    {
        // i will some thing;
    }

}

$nums = [1,1,1,2,2,3,4,5,6,7,7,7,8,9,10,10];
$list = new LinkList($nums);
$head = $list->getHead();

$solutions = [
   "list" => (new Solution())->removeSortLinkListDuplicate($head),
    "array" => (new Solution())->removeShortArrayDuplicate($nums),
    "array" => (new Solution())->removeDuplicate($nums),
];

foreach($solutions as $key => $solution){
    print_r($solution);
}


