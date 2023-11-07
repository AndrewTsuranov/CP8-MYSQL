<div class="container">
    <form action="/journal/feedback/send" class="formcont" method="POST" >
        <h1>Оставьте обратную связь о нашем сайте!</h1>
        <p>Пожалуйста, заполните форму представленную ниже.</p>
        <hr>

        <label for="user"><b>Имя</b></label>
        <input type="text" placeholder="Введите ваше имя" name="user" required>

        <label for="email"><b>E-Mail</b></label>
        <input type="text" placeholder="Введите вашу электронную почту" name="email" required>

        <label for="comment"><b>Комментарий</b></label>
        <textarea name="comment" placeholder="Введите ваш комментарий" required></textarea>
        <hr>
       
        <input type="button" class="sendbtn" onclick="sendData()" value="Отправить">
        <input type="reset" class="clearbtn" value="Очистить">
      
    </form>
</div>
<script>
    {
        "use strict";

        function sendData() {
            let xhr = new XMLHttpRequest();
            feedbackForm = document.forms[0],
                formData = new FormData(feedbackForm)
            xhr.open("POST", '/journal/feedback/send')
            xhr.onloadend = function() {
                if (xhr.status == 200) {
                    if (xhr.response == 1) {
                        alert('Добавлено!');
                    } else {
                        alert(xhr.response);
                    }
                } else {
                    alert("Ошибка " + this.status);
                }
            };
            xhr.send(formData);
        }
    }
</script>