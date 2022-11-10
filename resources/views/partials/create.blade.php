<section class="mt-5">
    <div class="container">
        <form action="{{ route('store.compagnie')}}" method="POST">
            @csrf
            <div class="form-outline mb-4">
              <input type="text" id="compagnie" name="compagnie" class="form-control" />
              <label class="form-label" for="compagnie">Nom compganie</label>
            </div>
            <div>
            <input type="text" id="nom" name="nom" class="form-control" />
            <label class="form-label" for="nom">Nom contact</label>
          </div>
          <div>
            <input type="text" id="prenom" name="prenom" class="form-control" />
            <label class="form-label" for="prenom">Prenom contact</label>
          </div>
            <div class="form-outline mb-4">
              <input type="text" id="adresse" name="adresse" class="form-control" />
              <label class="form-label" for="adresse">adresse</label>
            </div>
            <div class="form-outline mb-4">
                <input type="email" id="email" name="email" class="form-control" />
                <label class="form-label" for="email">Email</label>
              </div>
              <div class="form-outline mb-4">
                <input type="number" id="telephone" name="telephone" class="form-control" />
                <label class="form-label" for="telephone">Telephone</label>
              </div>
              <div class="form-outline mb-4">
                <input type="text" id="img" name="img" class="form-control" />
                <label class="form-label" for="img">Image</label>
              </div>
          
            <button type="submit" class="btn btn-primary btn-block mb-4">Confirmer</button>
          
            <!-- Register buttons -->
            <div class="text-center">
              <p>Not a member? <a href="#!">Register</a></p>
              <p>or sign up with:</p>
              <button type="button" class="btn btn-primary btn-floating mx-1">
                <i class="fab fa-facebook-f"></i>
              </button>
          
              <button type="button" class="btn btn-primary btn-floating mx-1">
                <i class="fab fa-google"></i>
              </button>
          
              <button type="button" class="btn btn-primary btn-floating mx-1">
                <i class="fab fa-twitter"></i>
              </button>
          
              <button type="button" class="btn btn-primary btn-floating mx-1">
                <i class="fab fa-github"></i>
              </button>
            </div>
          </form>
    </div>
    
</section>