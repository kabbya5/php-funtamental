<?php 

class MaxSore{
	
	private $pq;
	

	public function __construct(SplPriorityQueue $pq){
		$this->pq = $pq;
	}


	public function score(array $nums, int $k){
		$score = 0;

		foreach($nums as $num){
			$this->pq->insert($num, $num); // [ 0 [ value => num, priority => num]]
		}

		for($i = 0; $i < $k; $i++){
			$maxElement = $this->pq->extract(); // return max pariority element

			$score += $maxElement;

			$newElement = ceil($maxElement / 3);

			$this->pq->insert($newElement, $newElement);
		}

		return $score;
	}
}

$pq = new SplPriorityQueue();

$sore1 = new MaxSore($pq);
$nums = [10,10,10,10,10];
$k = 5;
echo $sore1->score($nums, $k);
