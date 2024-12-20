<?php 
class Document
{
    public $content;
    public $lastEdited;

    public function __construct($content)
    {
        $this->content = $content;
        $this->lastEdited = date("Y-m-d H:i:s");
    }

    public function __clone()
    {
        $this->lastEdited = null; 
    }
}

$doc1 = new Document("Original Content");
$doc2 = clone $doc1;

echo $doc1->lastEdited . PHP_EOL; // Outputs: Current timestamp
echo $doc2->lastEdited . PHP_EOL; // Outputs: (null)