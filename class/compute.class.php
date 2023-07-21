<?php

class Compute {
    private $terms = [
        ['term'=>'12', 'value'=>0],
        ['term'=>'18', 'value'=>0],
        ['term'=>'24', 'value'=>0],
        ['term'=>'30', 'value'=>0],
        ['term'=>'36', 'value'=>0],
    ];

    private $interest='0.2';
    public function __construct( private $loan_amount=0 ) {}
    
    public function computeInstallments() {
        $addon = $this->loan_amount * $this->interest;

        foreach( $this->terms as $key=>$term ) {
             $monthly = $this->loan_amount / $term['term'];
             $monthly += $addon;

             $this->terms[$key]['value'] = $monthly;
        }
    }

    public function getLoadDetails() {
        return $this->terms;
    }
}


?>