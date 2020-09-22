<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Model;
/**
 * Description of Question
 *
 * @author Nick90
 */
class Question {
    
    private $description;
    private $answers = [];
    private $correct_answer;

    /**
     * 
     * @param type $description
     * @param array $answers
     * @param int $correctAnswer Array key from $answers with correct answer
     */
    public function __construct($description, array $answers, $correctAnswer) {
        $this->description = $description;
        $this->answers = $answers;
        $this->correct_answer = $correctAnswer;
    }
    
    public function getDescription() {
        return $this->description;
    }

    public function getAnswers() {
        return $this->answers;
    }

    public function getCorrectAnswer() {
        return $this->correct_answer;
    }

    public function setDescription($description): void {
        $this->description = $description;
    }

    public function setAnswers($answers): void {
        $this->answers = $answers;
    }

    public function setCorrectAnswer($correctAnswer): void {
        $this->correct_answer = $correctAnswer;
    }
    
}
