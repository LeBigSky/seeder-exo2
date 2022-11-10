<section class="mt-5">
    
    <div class="container">
        <button type="button" class="btn btn-warning my-3" ><a style="text-decoration: none; color: black;" href="{{ route('create') }}">CREER  &#10133;</a></button>
        <table class="table align-middle mb-0 bg-white">
            <thead class="bg-light">
              <tr>
                <th>Picture</th>
                <th>Compagnie</th>
                <th>Adresse</th>
                <th>Email</th>
                <th>Telephone</th>
                <th>Contact</th>
                <th>Infos</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($compagnies as $com )
              <tr>
                <td>
                  <div class="d-flex align-items-center">
                    <img
                        src="{{ $com['img'] }}"
                        alt=""
                        style="width: 45px; height: 45px"
                        class=""
                        />
                  </div>
                </td>
                <td>
                  <p class="fw-normal mb-1">{{ $com['compagnie'] }}</p>
                </td>
                <td>
                    <p class="fw-normal mb-1">{{ $com['adresse'] }}</p>
                </td>
                <td>{{ $com['email'] }}</td>
                <td>
                    <div>
                        <p class="fw-normal mb-1">{{ $com['telephone'] }}</p>
                    </div>
                </td>
                <td>
                    <div class="ms-3">
                        <p class="fw-bold mb-1">{{ $com['nom'] }} </p>
                        <p class="text-muted mb-0">{{ $com['prenom'] }}</p>
                      </div>
                </td>
                <td>
                   <a href="{{ "show/".$com['id'] }}"> <button type="button" class="btn btn-link btn-sm btn-rounded">
                        show
                      </button></a>
                </td>
              </tr>@endforeach
            </tbody>
          </table>
    </div>
</section>