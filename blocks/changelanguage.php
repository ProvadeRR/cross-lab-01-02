<select id="select" class="mt-2 mb-3">
    <option value="<?php echo $_SESSION['USER']['lang']; ?>"> <?php echo $languageCHANGENAME[$_SESSION['USER']['lang']]; ?>
    <option value="ru">Русский</option>
    <option value="en">English</option>
    <option value="uk">Український</option>
    <button id="submit"></button>
</select>
