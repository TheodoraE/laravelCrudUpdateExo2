<section class="container my-5">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nom</th>
            {{-- <th scope="col">Age</th>
            <th scope="col">Genre</th> --}}
            <th scope="col"> </th>
          </tr>
        </thead>
        <tbody>
            @foreach ($membres as $membre)
                <tr>
                    <th scope="row">{{$membre->id}}</th>
                    <td>{{$membre->nom}}</td>
                    {{-- <td>{{$membre->age}}</td>
                    <td>{{$membre->genre}}</td> --}}
                    <td>
                        <a href="/show-membre/{{$membre->id}}" class="btn btn-primary">SHOW</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <form action="/delete-all" method="POST">
        <button type="submit" class="btn btn-danger">DELETE ALL</button>
    </form>
</section>