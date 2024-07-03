@extends('./layouts/backoffice/backofficeLayouts')
@section('titre', 'Gestion des utilisateurs' )
@section('page-content')
<div class="card">
    <div class="card-header">
        <div class="">
                <a href="{{ route('utilisateur.creer') }}" class="btn btn-primary">ajouter un utilisateur</a>
        </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>Nom</th>
          <th>Prenom</th>
          <th>Telephone</th>
          <th>Mail</th>
          <th>CNI</th>
          <th>Rôle</th>
          <th>Actions</th>
        </tr>
        </thead>
        <tbody>
            @forelse ( $utilisateur as $user)
            <tr>
                <td>{{ $user->NOM }}</td>
                <td>{{ $user->PRENOM }}</td>
                <td>{{ $user->TELEPHONE }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->CNI }}</td>
                <td>{{ $user->role->NOM_ROLE }}</td>
                <td>
                    <a href="{{ route('utilisateur.modifier',$user) }}" class="btn btn-primary">Modifier</a>
                    <a href="{{ route('utilisateur.suprimer',$user) }}" class="btn btn-danger">suprimer</a>
                </td>
              </tr>

            @empty

            @endforelse
        </tbody>
        <tfoot>
        <tr>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Telephone</th>
            <th>Mail</th>
            <th>CNI</th>
            <th>Rôle</th>
            <th>Actions</th>
        </tr>
        </tfoot>
      </table>
    </div>
    <!-- /.card-body -->
</div>
@endsection
