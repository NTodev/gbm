<?php

namespace App\Controller;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ApiController
 *
 * @author Nick90
 */
class ApiController {

    public function getQuestion() {
        $questionService = new \App\Service\QuestionService();
        $question = $questionService->generateQuestion();
        $array = [
            'description' => $question->getDescription(),
            'answers' => $question->getAnswers(),
            'correct_answer' => $question->getCorrectAnswer(),
        ];
        header('Content-Type: application/json');
        return json_encode($array);
    }
    
    public function getJokers() {
        $jokerService = new \App\Service\JokerService();
        $jokers = $jokerService->getAll();
        header('Content-Type: application/json');
        return json_encode($jokers);
    }

}
