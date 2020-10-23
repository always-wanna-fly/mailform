<div class="container">
    <h2>Форма зворотнього зв'язку</h2>
    <div class="form__wrapper">
        <p><span class="error">Обов'язкові поля</span></p>
        <form id="feedback-form" method="post" enctype="multipart/form-data" novalidate action="">
        <div class="form-row">

            <!-- Имя пользователя -->
            <div class="form-group">
                <label for="name" class="control-label">Ваше ім'я</label>
                <input id="name" type="text" name="form[name]" class="form-control" value="" placeholder="Ім'я" minlength="2"
                       maxlength="30" required="required">
                <i class="info">Лише символи латиниці и кирилиці</i>
                <span class="error">* <?php echo !empty($form_error['name']) ? $form_error['name'] : FALSE;?></span>
                <div class="invalid-feedback"></div>
            </div>

            <!--                 Email пользователя-->
            <div class="form-group">
                <label for="email" class="control-label">Email-адреса</label>
                <input id="email" type="email" name="form[email]" required="required" class="form-control" value=""
                       placeholder="Email-адреса">
                <div class="invalid-feedback"></div>
            </div>

            <!--                 Пол пользователя-->
            <div class="form-group">
                <label for="gender" class="control-label">Ваша стать</label>
                <input type="radio" id="male" name="form[gender]" value="male">
                <label for="male">Чоловік</label>
                <input type="radio" id="female" name="form[gender]" value="female">
                <label for="female">Жінка</label><br>
                <span class="error">* <?php echo !empty($form_error['name']) ? $form_error['gender'] : FALSE;?></span>
            </div>

            <!-- Возраст пользователя -->
            <div class="form-group">
                <label for="age" class="control-label">Ваш вік</label>
                <input id="age" type="email" name="form[age]" required="required" class="form-control" value=""
                       placeholder="Ваш вік">
                <div class="invalid-feedback"></div>
                <i class="info">Лише цифри</i>
                <span class="error">* <?php echo !empty($form_error['name']) ? $form_error['age'] : FALSE;?></span>
            </div>


            <!-- Сообщение пользователя -->
            <div class="form-group">
                <label for="message" class="control-label">Повідомлення</label>
                <textarea id="message" name="form[message]" class="form-control" rows="3"
                          placeholder="(не меньше 20-ти символів)" minlength="20" maxlength="500"
                          required="required"></textarea>
                <span class="error">* <?php echo !empty($form_error['name']) ? $form_error['message'] : FALSE;?></span>
            </div>




            <!--                 Файлы, для прикрепления к форме-->
            <div class="form-group form-attachments" data-count="5">
                <div class="form-attachments__wrapper">
                    <input type="file" name="myfile[]" multiple id="myfile">
                    <div class="form-attachments__items">
                        <div class="form-attachments__description">
                            <div>Нажміть щоб додати файли.</div>
                            <div>Можна додати jpg, jpeg, bmp, gif, png.</div>
                        </div>
                    </div>
                </div>
            </div>


        </div>

        <input type="submit" name="submit" value="Submit">
        </form>
    </div>

</div>
