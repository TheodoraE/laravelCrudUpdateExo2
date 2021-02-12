<section class="container mt-">
    <form action="/update-membre/{{$edit->id}}" method="POST">
        @csrf
        <div class="form-group">
          <label for="Nom">Nom : </label>
          <input type="text" name="nom" value="{{$edit->nom}}" class="form-control" id="exampleFormControlInput1">
        </div>
        <div class="form-group">
            <label for="Age">Age : </label>
            <input type="number" name="age" value="{{$edit->age}}" class="form-control" id="exampleFormControlInput1">
        </div>
        <div class="form-group">
          <label for="Genre">Genre : </label>
          <select class="form-control" name="genre" value="{{$edit->genre}}" id="exampleFormControlSelect1">
            <option>Femme</option>
            <option>Homme</option>
          </select>
        </div>
        <button type="submit" class="btn btn-primary">Enregistrer</button>
    </form>
</section>