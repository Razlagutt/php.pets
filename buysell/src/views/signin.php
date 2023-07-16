  <form method="post" action="/session" class="w-25 mx-auto mt-5">
    <div class="form-floating my-3">
      <input type="text" name="login" class="form-control" id="floatingInput" placeholder="Логин">
      <label for="floatingInput">Логин</label>
    </div>
    <div class="form-floating my-3">
      <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Пароль">
      <label for="floatingPassword">Пароль</label>
    </div>
    <div class="form-check text-start my-3">
      <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
      <label class="form-check-label" for="flexCheckDefault">
        Запомнить меня
      </label>
    </div>
    <button class="btn btn-primary w-100 py-2 my-3" type="submit">Войти</button>
    <div class="col d-flex justify-content-center">
      <a href="/signup">Зарегистрироватья</a>
    </div>
  </form>
