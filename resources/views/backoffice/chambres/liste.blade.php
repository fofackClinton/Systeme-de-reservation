@extends('./layouts/backoffice/backofficeLayouts')
@section('titre', 'Gestion des chambres' )
@section('page-content')
<div class="card">
    <div class="card-header">
        <div class="">
                <a href="{{ route('chambre.creer') }}" class="btn btn-primary">ajouter une chambre</a>
        </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>Nom</th>
          <th>Type</th>
          <th>prix</th>
          <th>Aménagement</th>
          <th>description</th>
          <th>image</th>
          <th>Action</th>
        </tr>
        </thead>
        <tbody>
            @forelse ( $chambres as $chambre)
            <tr>
                <td>{{ $chambre->NOM_CHAMBRE }}</td>
                <td>{{ $chambre->TYPE_CHAMBRE }}</td>
                <td>{{ $chambre->PRIX }} XAF</td>
                <td>{{ $chambre->NOMBRE_LITS }} {{ $chambre->TELEVISION }}</td>
                <td>{{ $chambre->DESCRIPTION }}</td>
                <td><img style="width:300px; height:300px " src="/storage/{{ $chambre->IMAGE }}" alt=""> </td>
                <td>
                    <a href="{{ route('chambre.modifier',$chambre) }}" class="btn btn-primary">Modifier</a>
                    <a href="{{ route('chambre.suprimer',$chambre) }}" class="btn btn-danger">Supprimer</a>
                </td>
              </tr>

            @empty

            @endforelse
        </tbody>
        <tfoot>
        <tr>
            <th>Nom</th>
            <th>Type</th>
            <th>prix</th>
            <th>Aménagement</th>
            <th>description</th>
            <th>image</th>
            <th>Action</th>
        </tr>
        </tfoot>
      </table>
    </div>
    <!-- /.card-body -->
</div>
@endsection
