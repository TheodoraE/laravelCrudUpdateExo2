<section class="container mt-5">
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
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <form action="/delete-all" method="POST">
        <button type="submit" class="btn btn-danger">DELETE ALL</button>
    </form>
</section>