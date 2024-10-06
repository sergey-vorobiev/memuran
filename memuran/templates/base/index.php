<?php include_once "include/header.php"; ?>

<div class="book">
    <div id="pages" class="pages">
        <div class="page">
            <article>
                <div class="article-header">
                    <time datetime="2024-09-21">21 сен 2024 года</time>
                    <a href="#" class="article-header__category">#Категория</a>
                </div>
                <h1>Заголовок статьи</h1>

                <figure>
                    <img src="<?=PATH_UPLOAD_PICTURES . "test-image.jpg"?>" alt="Описание изображения">
                    <figcaption>Подпись к изображению</figcaption>
                </figure>

                <section>
                    <h2>Введение</h2>
                    <p>Это вводный абзац статьи. Он может содержать краткое описание того, о чем будет идти речь в статье.</p>

                    <h2>Основная часть</h2>
                    <p>Здесь идет основной текст статьи. Можно добавлять цитаты:</p>
                    <blockquote>
                        <p>"Это пример цитаты, которую можно использовать для выделения важных мыслей."</p>
                        <cite>— Имя Цитируемого</cite>
                    </blockquote>
                    <p>А также списки:</p>

                    <ol>
                        <li>Первый уровень
                            <ol>
                                <li>Второй уровень
                                    <ol>
                                        <li>Третий уровень</li>
                                        <li>Третий уровень</li>
                                    </ol>
                                </li>
                                <li>Второй уровень</li>
                            </ol>
                        </li>
                        <li>Первый уровень
                            <ol>
                                <li>Второй уровень</li>
                                <li>Второй уровень</li>
                            </ol>
                        </li>
                    </ol>


                    <ul>
                        <li>Первый элемент маркированного списка.</li>
                        <li>Второй элемент.</li>
                        <li>Третий элемент.</li>
                    </ul>
                </section>

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

                        <section>
                            <h2>Заключение</h2>
                            <p>Это заключительная часть статьи. Здесь можно подвести итоги и оставить ссылку на другие статьи или
                                ресурсы.</p>
                            <p>Это заключительная часть статьи. Здесь можно подвести итоги и оставить ссылку на другие статьи или
                                ресурсы.Это заключительная часть статьи. Здесь можно подвести итоги и оставить ссылку на другие статьи или
                                ресурсы.</p>
                            <p>Это заключительная часть статьи. Здесь можно подвести итоги и оставить ссылку на другие статьи или
                                ресурсы.</p>
                            <p>Это заключительная часть статьи. Здесь можно подвести итоги и оставить ссылку на другие статьи или
                                ресурсы.Это заключительная часть статьи. Здесь можно подвести итоги и оставить ссылку на другие статьи или
                                ресурсы.Это заключительная часть статьи. Здесь можно подвести итоги и оставить ссылку на другие статьи или
                                ресурсы.</p>
                            <p>Это заключительная часть статьи. Здесь можно подвести итоги и оставить ссылку на другие статьи или
                                ресурсы.</p>
                        </section>
                    </table>
                </section>
            </article>
        </div>
        <div class="page">
            <article>
                <div class="article-header">
                    <time datetime="2024-09-21">28 сен 2024 года</time>
                    <a href="#" class="article-header__category">#Категория</a>
                </div>
                <h1>Заголовок статьи 2</h1>
                <p>Lorem ipsum odor amet, consectetuer adipiscing elit. Blandit non vehicula id venenatis dignissim per morbi. Class accumsan consectetur est euismod massa et; fermentum iaculis placerat. Vitae senectus ridiculus lacus tempus; praesent enim. Nisi potenti gravida tortor felis eget imperdiet iaculis maximus. Quam maximus eget varius consequat quam dapibus mattis. Gravida adipiscing ad metus turpis quis ornare. Integer magna rutrum metus id nam neque eget neque? Vel dis cras; convallis faucibus neque tincidunt hendrerit nulla. Tempor maecenas turpis ante mollis taciti semper tortor.</p>
                <p>Potenti habitant dapibus sollicitudin nec porttitor. Facilisi pulvinar dis enim nulla convallis. Ut congue at quisque iaculis, libero hac. Magna platea praesent aptent molestie, urna quisque malesuada. Montes posuere urna sit netus vivamus primis. Vivamus convallis maecenas class mattis; tempor eros mollis fringilla parturient. Interdum vel feugiat elit inceptos efficitur adipiscing dictum suscipit. Ad cursus id tellus habitasse netus mauris dui.</p>
            </article>
        </div>
        <div class="page">
            <article>
                <div class="article-header">
                    <time datetime="2024-09-21">22 окт 2024 года</time>
                    <a href="#" class="article-header__category">#Категория</a>
                </div>
                <h1>Заголовок статьи 3</h1>
                <p>Blandit non vehicula id venenatis dignissim per morbi. Class accumsan consectetur est euismod massa et; fermentum iaculis placerat. Vitae senectus ridiculus lacus tempus; praesent enim. Nisi potenti gravida tortor felis eget imperdiet iaculis maximus. Quam maximus eget varius consequat quam dapibus mattis. Gravida adipiscing ad metus turpis quis ornare. Integer magna rutrum metus id nam neque eget neque? Vel dis cras; convallis faucibus neque tincidunt hendrerit nulla. Tempor maecenas turpis ante mollis taciti semper tortor.</p>
                <ul>
                    <li>Facilisi pulvinar dis enim nulla convallis.</li>
                    <li>Ut congue at quisque iaculis, libero hac.</li>
                    <li>Magna platea praesent aptent molestie, urna quisque malesuada.</li>
                </ul>
                <p>Montes posuere urna sit netus vivamus primis. Vivamus convallis maecenas class mattis; tempor eros mollis fringilla parturient. Interdum vel feugiat elit inceptos efficitur adipiscing dictum suscipit. Ad cursus id tellus habitasse netus mauris dui.</p>
            </article>
        </div>
        <div class="page">
            <article>
                <div class="article-header">
                    <time datetime="2024-09-21">8 дек 2024 года</time>
                    <a href="#" class="article-header__category">#Категория</a>
                </div>
                <h1>Заголовок статьи 4</h1>

                <figure>
                    <img src="<?=PATH_UPLOAD_PICTURES . "test-image.jpg"?>" alt="Описание изображения">
                    <figcaption>Подпись к изображению</figcaption>
                </figure>
            </article>
        </div>
    </div>
</div>


<section class="section-article">
    <div class="container">
        <section>
            <h2>Комментарии</h2>
            <article>
                <header>
                    <p><strong>Аноним</strong> -
                        <time datetime="2024-09-21T14:00">21 сен 2024, 14:00</time>
                    </p>
                </header>
                <p>Очень полезная статья, спасибо!</p>
            </article>

            <article>
                <header>
                    <p><strong>Ольга</strong> -
                        <time datetime="2024-09-21T15:30">21 сен 2024, 15:30</time>
                    </p>
                </header>
                <p>Хотелось бы увидеть больше информации о данном вопросе.</p>
            </article>
        </section>
        <section>
            <h2>Оставить комментарий</h2>
            <form action="#" method="post">
                <div class="group-input">
                    <label for="name">Имя:</label>
                    <input type="text" id="name" name="name" required>
                </div>

                <div class="group-input">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>

                <div class="group-input">
                    <label for="comment">Комментарий:</label>
                    <textarea id="comment" name="comment" required></textarea>
                </div>

                <button type="submit">Отправить</button>
            </form>
        </section>
    </div>
</section>

<?php include_once "include/footer.php"; ?>
