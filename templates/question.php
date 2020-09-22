<form method="post">
    <div class="jokers">
        <button class="joker-item" name="joker" value="joker_friend">Call a friend</button>
    </div>
    <div style="margin: 5px; color: #fff"><?=$jokerResult?></div>
    <div class="question">
        <div class="question-title">
            <p><?= $question->getDescription() ?></p>
        </div>
        <div class="question-answers">
            <?php foreach ($question->getAnswers() as $key => $a) { ?>
                <div class="question-answer-item-wrapper"><div class="question-answer-item"><button type="submit" name="answer" value="<?= $key ?>"><?= $key ?>: <?= $a ?></button></div></div>
            <?php } ?>
        </div>
    </div>
</form>