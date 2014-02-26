<?php
			class Post extends AppModel {
				//makes sure that no empty Posts are added//
				public $validate = array(
        'title' => array(
            'rule' => 'notEmpty'
        ),
        'body' => array(
            'rule' => 'notEmpty'
        )
    );
}
?>