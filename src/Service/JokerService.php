<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Service;

use App\Model\Question;

/**
 * Description of JokerService
 *
 * @author Nick90
 */
class JokerService {

    private $database = null;


    public function __construct() {

        $this->database = new \PDO("mysql:host=127.0.0.1;dbname=be_millionare;port=3308;", 'root', '');
        $this->database->setAttribute(\PDO::ATTR_CONNECTION_STATUS, \PDO::ATTR_SERVER_INFO);
    }

    public function callFriend(Question $question) {
        
        $friendAnswer = array_rand($question->getAnswers());
        return "I think the correct answer is {$friendAnswer}";
        
    }
    
    public function getAll() {
        return $this->database->query("SELECT * FROM jokers")->fetchAll(\PDO::FETCH_ASSOC);
    }

}
