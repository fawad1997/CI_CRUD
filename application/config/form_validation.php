<?php
$config = [
    'addarticle_rules' =>   [
                                'field' => 'nam',
                                'label' => 'Name',
                                'rules' => 'required'
    ],
    [
        'field' => 'desc',
        'label' => 'Description',
        'rules' => 'required|min_length[10]'
    ]
];
?>