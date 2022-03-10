@extends('.page.layer')

@section('content')


<form method="POST" action="/vhl">
    @csrf
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="matricule">Matricule</label>
        <input type="text" class="form-control" name="matricule" placeholder="00000-A-00">
      </div>
      <div class="form-group col-md-6">
        <label for="marque">Marque</label>
        <input type="text" class="form-control" name="marque" placeholder="Marque">
      </div>
    </div>
    <div class="form-row">
    <div class="form-group  col-md-6">
      <label for="type">Type</label>
      <input type="text" class="form-control" name="type" placeholder="type">
    </div>

        <div class="form-group col-md-2">
            <label for="puissance">Puissance</label>
            <input type="number" class="form-control" name="puissance">
        </div>
    <div class="form-group col-md-4">
      <label for="dmc">DMC</label>
      <input type="date" class="form-control" name="date_mc" placeholder="Date de mise en service">
    </div>
</div>
    <div class="form-row">
    <div class="form-group col-md-9">
        <label for="chassis">Chassis</label>
        <input type="text" class="form-control" name="chassis" placeholder="chassis">
      </div>
    <div class="form-group col-md-3">
        <label for="equipement">Equipement</label>
        <input type="text" class="form-control" name="equipement" placeholder="equipement">
    </div>
    </div>
      <div class="form-row">
          <div class="form-group col-md-4">
              <label class="" for="agence">Agence</label>
              <select class="custom-select" name="agence" id="agence">
                      @foreach($agences as $agence)
                      <option value="{{$agence->id}}">{{$agence->nom}}</option>
                      @endforeach
              </select>
          </div>
      <div class="form-group col-md-4">
        <label for="categorie">Catégorie</label>
          <select class="custom-select" name="categorie" id="categorie">
              <option value="">Catégorie</option>
              @foreach($categories as $categorie)
                  <option value="{{$categorie->id}}">{{$categorie->nom}}</option>
              @endforeach
          </select>
      </div>
      <div class="form-group  col-md-4">
        <label for="intitule">Intitule</label>
          <select class="custom-select" name="intitule" id="intitule">
              @foreach($intitules as $intitule)
                  <option value="{{$intitule->id}}">{{$intitule->nom}}</option>
              @endforeach
          </select>
      </div>
    </div>


    @if($errors->any())

        @foreach($errors->all() as $error)
        <ul>
            <li>{{$error}}</li>
        </ul>
        @endforeach

    @endif


    <button type="submit" class="btn btn-primary btn-block">Ajouter véhicule</button>
  </form>


  <br>












@endsection
