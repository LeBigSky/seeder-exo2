<section class="mt-5">
<div class="container d-flex justify-content-center">
    <div class="card d-flex justify-content-center">
        <div class="d-flex justify-content-center">
          <img src="{{ $compagnie['img'] }}" style="max-width:20em" class="card-img-top" alt="{{ $compagnie['id'] }}"/>  
        </div>
        
        <div class="card-body text-center">
          <h5 class="card-title">Société: {{ $compagnie['compagnie'] }}</h5>
          <p class="card-text">adresse: {{ $compagnie['adresse'] }}</p>
          <p class="card-text">Téléphone: {{ $compagnie['telephone'] }}</p>
          <p class="card-text">Email: {{ $compagnie['email'] }}</p>
          <p class="card-text">Contact: {{ $compagnie['nom'] }} {{ $compagnie['prenom'] }}</p>
          <div class="d-flex justify-content-center gap-5">
            <a href="{{ "edit/".$compagnie['id'] }}" class="btn btn-primary">EDIT</a> 
            <a href="{{ 'delete/'.$compagnie['id'] }}" class="btn btn-danger">DELETE</a>
          </div>
        </div>
      </div>
</div>
</section>