<form>
    <h1 class=" my-4 h3 mb-3 text-white fw-normal">Inserisci i tuoi dati per accedere</h1>

  <div class="form-floating">
          <input type="text" class="form-control" id="floatingInput" placeholder="nameExample" required/>
          <label for="floatingInput">Username</label>
      </div>
      <div class="form-floating">
          <input type="password" class="form-control" placeholder="Password" required/>
          <label for="floatingInput">Password</label>
    </div>


    <div class="container d-flex justify-content-center my-3 py-3">
       <div class="checkbox mb-3">
      <label class="text-white">
        <input type="checkbox" value="remember-me"> Ricordami
      </label>

      <button id="toggle-password" type="button" class="btn-sm btn-warning mx-4 d-none"><i id="eyeIcon" class="bi bi-eye-slash"></i></button>
    </div>
    </div>

    <button class="w-100 btn btn-lg btn-warning" type="submit">Accedi</button>
    <p class="mt-5 mb-3 text-muted">© 2022</p>

</form>
