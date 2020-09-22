<?php

namespace App\Service;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

use App\Model\Question;

/**
 * Description of QuestionService
 *
 * @author Nick90
 */
class QuestionService {

    private $database = null;


    public function __construct() {

        $this->database = new \PDO("mysql:host=127.0.0.1;dbname=be_millionare;port=3308;", 'root', '');
        $this->database->setAttribute(\PDO::ATTR_CONNECTION_STATUS, \PDO::ATTR_SERVER_INFO);
    }

    /**
     * 
     * @return \App\Model\Question
     */
    public function generateQuestion(): Question {

        $questions = $this->database->query("SELECT * FROM questions")->fetchAll(\PDO::FETCH_ASSOC);
        $result = array_rand($questions);
        
        $question = new Question(
                $questions[$result]['description'], 
                json_decode($questions[$result]['answers'], true), 
                $questions[$result]['correct_answer']);
        
        return $question;
    }

}
