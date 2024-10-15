<?php 

interface TrieInterface{
    public function insert($word);

    public function search($word);
}

class TrieNode{
    public $children;
    public $isEndOfWord;

    public function __construct()
    {
        $this->children = [];
        $this->isEndOfWord = false;  
    }
}

class  Trei implements TrieInterface{
    private $root;

    public function __construct(TrieNode $trieNode){
        $this->root = $trieNode;
    }

    public function insert($word){
        $node = $this->root;

        for($i = 0; $i < strlen($word); $i++){
            $char = $word[$i];

            if(!isset($node->children[$char])){
                $node->children[$char]  = new TrieNode();
            }

            $node = $node->children[$char];
        }

        $node->isEndOfWord = true;

    }

    public function search($word){
        $node = $this->root;
        for($i = 0; $i < strlen($word); $i++){
            $char = $word[$i];
            if(!isset($node->children[$char])){
                return false;
            }

            $node = $node->children[$char];
        }

        return $node->isEndOfWord;
    }

    public function startsWith($prefix) {
        $node = $this->root;
        for ($i = 0; $i < strlen($prefix); $i++) {
            $char = $prefix[$i];

            if (!isset($node->children[$char])) {
                return false;
            }

            $node = $node->children[$char];
        }
        return true;
    }
    
}

$trieNode = new TrieNode();

$trie = new Trei($trieNode);

// Insert words
$trie->insert("car");
$trie->insert("cat");
$trie->insert("dog");


echo $trie->search("car") ? "Found\n" : "Not Found\n"; 
echo $trie->search("bat") ? "Found\n" : "Not Found\n"; 


echo $trie->startsWith("ca") ? "Prefix Found\n" : "Prefix Not Found\n"; 
echo $trie->startsWith("do") ? "Prefix Found\n" : "Prefix Not Found\n"; 
echo $trie->startsWith("ba") ? "Prefix Found\n" : "Prefix Not Found\n";

