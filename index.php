<?php require_once 'includes/header.php';
?>
    <main class="page">
        <div class="container">
            <form action="handler.php" method="post">
            <label for="firstname">Имя:</label>
            <input type="text" id="firstname" name="firstname" /><br />
            <label for="lastname">Фамилия:</label>
            <input type="text" id="lastname" name="lastname" /><br />
            <label for="email">Почта:</label>
            <input type="text" id="email" name="email" /><br />
            <label for="whenithappened">Когда это произошло?</label>
            <input type="text" id="whenithappened" name="whenithappened" /><br />
            <label for="howlong">Как долго вас не было?</label>
            <input type="text" id="howlong" name="howlong" /><br />
            <label for="howmany">Сколько их было?</label>
            <input type="text" id="howmany" name="howmany" /><br />
            <label for="aliendescription">Опишите их:</label>
            <input type="text" id="aliendescription" name="aliendescription" size="32" /><br />
            <label for="whattheydid">Что они с вами делали??</label>
            <input type="text" id="whattheydid" name="whattheydid" size="32" /><br />
            <div for="fangspotted">Вы видели Фэнга?</div>
            <label for="yes">Да</label> <input id="yes" name="fangspotted" type="radio" value="yes" />
            <label for="no">Нет</label> <input id="no" name="fangspotted" type="radio" value="no" /><br />
            <img src="fang.jpg" width="100" height="175"
            alt="My abducted dog Fang." /><br />
            <label for="other">Дополнительная информация</label>
            <textarea id="other" name="other"></textarea><br />
            <input type="submit" value="Сообщить" name="submit" />
            </form>
        </div>
    </main>
<?php require_once 'includes/footer.php'?>