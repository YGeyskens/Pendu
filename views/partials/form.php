<form action="index.php" method="POST">
    <fieldset>
        <legend>
            il te reste <?= $remainingTrials;?> essais pour sauver ta peau
        </legend>
   

        <label for="triedLetter">
            Choisis ta lettre
            <select name="triedLetter" id="triedLetter">
            <!-- repeter 26 fois-->
                <?php foreach($lettersArray as $letter => $status):?>
                    <?php if ($status):?>
                        <option value="<?= $letter; ?>"><?= $letter;?></option>
                    <?php endif; ?>
                <?php endforeach; ?>
            </select>
        </label>
            <input type="hidden" name="lettersArray" value="<?= $serializedLettersArray; ?>">
            <input type="hidden" name="wordIndex" value="<?= $wordIndex;?>">
            <input type="hidden" name="nbrLetter" value="<?= $nbrLetter;?>">
            <input type="hidden" name="replacementString" value="<?= $remplacement;?>">
            <input type="hidden" name="triedLetters" value="<?= $triedLetters;?>">
            <input type="hidden" name="trials" value="<?= $trials;?>">



            <input type="submit" value="envoyez la lettre">

    </fieldset>
</form>