<?php include_once "include/header.php"; ?>
<section class="section-article">
    <div class="container">
        <article>
            <!-- Заголовок статьи -->
            <h1>Заголовок статьи блога</h1>

            <!-- Автор и дата -->
            <section>
                <p><strong>Автор:</strong> Иван Иванов</p>
                <time datetime="2024-09-21">21 сентября 2024</time>
            </section>

            <!-- Основное изображение статьи -->
            <figure>
                <img src="<?= PATH_UPLOAD_PICTURES . "test-image.jpg" ?>" alt="Описание изображения">
                <figcaption>Подпись к изображению</figcaption>
            </figure>

            <!-- Основной текст статьи -->
            <section>
                <h2>Введение</h2>
                <p>Это вводный абзац статьи. Он может содержать краткое описание того, о чем будет идти речь в
                    статье.</p>

                <h2>Основная часть</h2>
                <p>Здесь идет основной текст статьи. Можно добавлять цитаты:</p>
                <blockquote>
                    <p>"Это пример цитаты, которую можно использовать для выделения важных мыслей."</p>
                    <cite>— Имя Цитируемого</cite>
                </blockquote>
                <p>А также списки:</p>

                <!-- Нумерованный список -->
                <ol>
                    <li>Первый уровень 1
                        <ol>
                            <li>Второй уровень 1.1
                                <ol>
                                    <li>Третий уровень 1.1.1</li>
                                    <li>Третий уровень 1.1.2</li>
                                </ol>
                            </li>
                            <li>Второй уровень 1.2</li>
                        </ol>
                    </li>
                    <li>Первый уровень 2
                        <ol>
                            <li>Второй уровень 2.1</li>
                            <li>Второй уровень 2.2</li>
                        </ol>
                    </li>
                </ol>


                <!-- Маркированный список -->
                <ul>
                    <li>Первый элемент маркированного списка.</li>
                    <li>Второй элемент.</li>
                    <li>Третий элемент.</li>
                </ul>
            </section>

            <!-- Раздел с таблицей -->
            <section>
                <h2>Таблица данных</h2>
                <table>
                    <thead>
                    <tr>
                        <th>Название</th>
                        <th>Описание</th>
                        <th>Цена</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Товар 1</td>
                        <td>Описание товара 1</td>
                        <td>$10</td>
                    </tr>
                    <tr>
                        <td>Товар 2</td>
                        <td>Описание товара 2</td>
                        <td>$20</td>
                    </tr>
                    </tbody>
                </table>
            </section>

            <!-- Заключение -->
            <section>
                <h2>Заключение</h2>
                <p>Это заключительная часть статьи. Здесь можно подвести итоги и оставить ссылку на другие статьи или
                    ресурсы.</p>
            </section>
        </article>

        <!-- Раздел комментариев -->
        <section>
            <h2>Комментарии</h2>
            <!-- Комментарий 1 -->
            <article>
                <header>
                    <p><strong>Пользователь:</strong> Аноним</p>
                    <time datetime="2024-09-21T14:00">21 сентября 2024, 14:00</time>
                </header>
                <p>Очень полезная статья, спасибо!</p>
            </article>

            <!-- Комментарий 2 -->
            <article>
                <header>
                    <p><strong>Пользователь:</strong> Ольга</p>
                    <time datetime="2024-09-21T15:30">21 сентября 2024, 15:30</time>
                </header>
                <p>Хотелось бы увидеть больше информации о данном вопросе.</p>
            </article>
        </section>
        <section>
            <h2>Оставить комментарий</h2>
            <form action="#" method="post">
                <label for="name">Имя:</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="comment">Комментарий:</label>
                <textarea id="comment" name="comment" required></textarea>

                <button type="submit">Отправить</button>
            </form>
        </section>
    </div>
</section>

<?php include_once "include/footer.php"; ?>
